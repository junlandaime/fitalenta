@extends('layouts.admin')

@section('title', 'Manage Events')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-semibold">Manage Events</h1>
        <a href="{{ route('admin.events.create') }}"
            class="bg-[#00294B] text-white px-4 py-2 rounded-md hover:bg-[#001f3b] transition duration-300">Add New Event</a>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <form action="{{ route('admin.events.index') }}" method="GET" class="flex items-center space-x-4">
            <div class="flex-1">
                <input type="text" name="search" placeholder="Search events..."
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00294B]"
                    value="{{ request('search') }}">
            </div>
            <div>
                <select name="status"
                    class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#00294B]">
                    <option value="">All Status</option>
                    <option value="upcoming" {{ request('status') == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                    <option value="past" {{ request('status') == 'past' ? 'selected' : '' }}>Past</option>
                </select>
            </div>
            <button type="submit"
                class="bg-[#00294B] text-white px-4 py-2 rounded-md hover:bg-[#001f3b] transition duration-300">Search</button>
        </form>
    </div>

    @if ($events->isEmpty())
        <p class="text-center text-gray-600">No events found.</p>
    @else
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Views
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($events as $event)
                        <tr>
                            <td class="px-6 py-4 whitespace">{{ $event->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $event->event_date->format('M d, Y') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $event->location }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $event->views }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($event->event_date->isPast())
                                    <span class="px-2 py-1 bg-gray-200 text-gray-800 rounded-full text-xs">Past</span>
                                @else
                                    <span class="px-2 py-1 bg-green-200 text-green-800 rounded-full text-xs">Upcoming</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="{{ route('admin.events.edit', $event) }}"
                                    class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                <form action="{{ route('admin.events.destroy', $event) }}" method="POST"
                                    class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900"
                                        onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $events->links() }}
        </div>
    @endif
@endsection
