<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(10);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        $categories = Category::with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();
        return view('admin.events.create', compact('categories'));
    }

    public function store(StoreEventRequest $request)
    {
        // dd($request);
        $validatedData = ($request->validated());
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('events', 'public');
            // $validated['foto']$img_url = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
        }
        $validatedData['slug'] = Str::slug($validatedData['title']);
        Event::create($validatedData);
        return redirect()->route('admin.events.index')->with('success', 'Event created successfully.');
    }

    public function show(Event $event)
    {
        $googleCalendarUrl = EventController::generateGoogleCalendarUrl($event->id);
        return view('admin.events.show', compact('event', 'googleCalendarUrl'));
    }

    public function edit(Event $event)
    {
        $categories = Category::with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();

        return view('admin.events.edit', compact('event', 'categories'));
    }

    public function update(UpdateEventRequest $request, Event $event)
    {
        $validatedData = ($request->validated());

        if ($request->hasFile('image')) {
            // Hapus foto lama jika ada
            if ($event->image) {
                Storage::disk('public')->delete($event->image);
            }
            $validatedData['image'] = $request->file('image')->store('events', 'public');
        }

        $validatedData['slug'] = Str::slug($validatedData['title']);

        $event->update($validatedData);
        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully.');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully.');
    }

    public function generateGoogleCalendarUrl(Event $event)
    {
        $event = Event::findOrFail($event->id);

        $baseUrl = 'https://calendar.google.com/calendar/r/eventedit';

        $params = [
            'text' => urlencode($event->title),
            'dates' => $this->formatDates($event->event_date, $event->event_date),
            'details' => urlencode($event->description . "\n\nFor details, link here: " . route('events.show', $event->id)),
            'location' => urlencode($event->location),
        ];

        $url = $baseUrl . '?' . http_build_query($params);

        return $url;
    }

    private function formatDates($startTime, $endTime)
    {
        $start = $startTime->format('Ymd\THis\Z');
        $end = $endTime->format('Ymd\THis\Z');

        return $start . '/' . $end;
    }
}
