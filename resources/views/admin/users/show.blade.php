@extends('layouts.admin')

@section('title', 'User Details')

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold">User Details: {{ $user->name }}</h1>
            <div>
                <a href="{{ route('admin.users.edit', $user) }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit User</a>
                @if (auth()->id() !== $user->id)
                    <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                            onclick="return confirm('Are you sure you want to delete this user?')">Delete User</button>
                    </form>
                @endif
            </div>
        </div>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Personal Information</h2>
                <p><strong>Name:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Role:</strong>
                    <span
                        class="px-2 py-1 rounded-full text-xs {{ $user->role == 'admin' ? 'bg-red-200 text-red-800' : 'bg-blue-200 text-blue-800' }}">
                        {{ ucfirst($user->role) }}
                    </span>
                </p>
                <p><strong>Registered On:</strong> {{ $user->created_at->format('F j, Y g:i A') }}</p>
                <p><strong>Last Updated:</strong> {{ $user->updated_at->format('F j, Y g:i A') }}</p>
            </div>

            <div class="mb-4">
                <h2 class="text-xl font-semibold mb-2">Activity Summary</h2>
                <p><strong>Last Login:</strong>
                    {{ $user->last_login ? $user->last_login->format('F j, Y g:i A') : 'Never' }}</p>
                <p><strong>Total Logins:</strong> {{ $user->login_count ?? 0 }}</p>
            </div>

            {{-- @if ($user->events->isNotEmpty())
                <div class="mb-4">
                    <h2 class="text-xl font-semibold mb-2">Registered Events</h2>
                    <ul class="list-disc list-inside">
                        @foreach ($user->events as $event)
                            <li>{{ $event->title }} ({{ $event->event_date->format('F j, Y') }})</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

            @if ($user->role == 'admin')
                <div class="mb-4">
                    <h2 class="text-xl font-semibold mb-2">Administrative Actions</h2>
                    <p><strong>Created Articles:</strong> {{ $user->articles->count() }}</p>
                    {{-- <p><strong>Managed Events:</strong> {{ $user->managedEvents->count() }}</p> --}}
                </div>
            @endif

            <div class="mt-6">
                <h2 class="text-xl font-semibold mb-2">Account Management</h2>
                {{-- <div class="flex space-x-4">
                    <form action="{{ route('admin.users.reset-password', $user) }}" method="POST" class="inline-block">
                        @csrf
                        <button type="submit"
                            class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded"
                            onclick="return confirm('Are you sure you want to reset this user\'s password?')">Reset
                            Password</button>
                    </form>
                    @if ($user->email_verified_at)
                        <span class="bg-green-200 text-green-800 py-2 px-4 rounded">Email Verified</span>
                    @else
                        <form action="{{ route('admin.users.resend-verification', $user) }}" method="POST"
                            class="inline-block">
                            @csrf
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Resend
                                Verification Email</button>
                        </form>
                    @endif
                </div>
            </div> --}}
            </div>

            <a href="{{ route('admin.users.index') }}"
                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Back to Users List</a>
        </div>
    @endsection
