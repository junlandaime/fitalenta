@extends('layouts.admin')

@section('title', $event->title)

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold">Event Details: {{ $event->title }}</h1>
            <div>
                <a href="{{ route('admin.events.edit', $event) }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                        onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                </form>
            </div>
        </div>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @if ($event->image)
                <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}"
                    class="mb-6 max-w-full h-auto rounded">
            @endif

            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Description</h2>
                <p>{{ $event->description }}</p>
            </div>

            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Event Details</h2>
                <p><strong>Date:</strong> {{ $event->event_date->format('F j, Y g:i A') }}</p>
                <p><strong>Location:</strong> {{ $event->location }}</p>
                @if ($event->max_participants)
                    <p><strong>Max Participants:</strong> {{ $event->max_participants }}</p>
                @endif
                <p><strong>Featured:</strong> {{ $event->is_featured ? 'Yes' : 'No' }}</p>
            </div>

            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Registrations</h2>
                @if ($event->registrations->count() > 0)
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-left">Name</th>
                                <th class="text-left">Email</th>
                                <th class="text-left">Registration Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($event->registrations as $registration)
                                <tr>
                                    <td>{{ $registration->user->name }}</td>
                                    <td>{{ $registration->user->email }}</td>
                                    <td>{{ $registration->created_at->format('F j, Y g:i A') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No registrations yet.</p>
                @endif
            </div>
        </div>

        <a href="{{ route('admin.events.index') }}"
            class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Events</a>
    </div>
@endsection
