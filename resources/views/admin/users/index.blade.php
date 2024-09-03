@extends('layouts.admin')

@section('title', 'Manage Users')

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold">Manage Users</h1>
            <a href="{{ route('admin.users.create') }}"
                class="bg-[#00294B] hover:bg-[#001f3b] text-white font-bold py-2 px-4 rounded">Add New User</a>
        </div>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <form action="{{ route('admin.users.index') }}" method="GET" class="mb-4">
                <div class="flex items-center">
                    <input type="text" name="search" placeholder="Search users..."
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-2"
                        value="{{ request('search') }}">
                    <select name="role"
                        class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-2">
                        <option value="">All Roles</option>
                        <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="user" {{ request('role') == 'user' ? 'selected' : '' }}>User</option>
                    </select>
                    <button type="submit"
                        class="bg-[#00294B] hover:bg-[#001f3b] text-white font-bold py-2 px-4 rounded">Search</button>
                </div>
            </form>

            @if ($users->isEmpty())
                <p class="text-gray-600">No users found.</p>
            @else
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="text-left py-2">Name</th>
                            <th class="text-left py-2">Email</th>
                            <th class="text-left py-2">Role</th>
                            <th class="text-left py-2">Registered On</th>
                            <th class="text-left py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="py-2">{{ $user->name }}</td>
                                <td class="py-2">{{ $user->email }}</td>
                                <td class="py-2">
                                    <span
                                        class="px-2 py-1 rounded-full text-xs {{ $user->role == 'admin' ? 'bg-red-200 text-red-800' : 'bg-blue-200 text-blue-800' }}">
                                        {{ ucfirst($user->role) }}
                                    </span>
                                </td>
                                <td class="py-2">{{ $user->created_at->format('M d, Y') }}</td>
                                <td class="py-2">
                                    <a href="{{ route('admin.users.show', $user) }}"
                                        class="text-blue-600 hover:text-blue-800 mr-2">Show</a>
                                    <a href="{{ route('admin.users.edit', $user) }}"
                                        class="text-blue-600 hover:text-blue-800 mr-2">Edit</a>
                                    @if ($user->id !== auth()->id())
                                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800"
                                                onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $users->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
