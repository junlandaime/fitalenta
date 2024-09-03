@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img class="h-48 w-full object-cover md:w-48" src="{{ asset('storage/' . $teamMember->image) }}"
                        alt="{{ $teamMember->name }}">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Team Member</div>
                    <h1 class="mt-1 text-3xl font-bold">{{ $teamMember->name }}</h1>
                    <p class="mt-2 text-gray-500">{{ $teamMember->position }}</p>
                </div>
            </div>
            <div class="p-8">
                <div class="mb-4">
                    <h2 class="text-xl font-bold mb-2">Bio</h2>
                    <p class="text-gray-700">{{ $teamMember->bio }}</p>
                </div>
                <div class="mb-4">
                    <span class="font-bold">Order:</span> {{ $teamMember->order }}
                </div>
                <div class="mb-4">
                    <span class="font-bold">Active:</span>
                    <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $teamMember->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ $teamMember->is_active ? 'Yes' : 'No' }}
                    </span>
                </div>
                <div class="mb-4">
                    <span class="font-bold">Created at:</span> {{ $teamMember->created_at->format('F j, Y, g:i a') }}
                </div>
                <div class="mb-4">
                    <span class="font-bold">Last updated:</span> {{ $teamMember->updated_at->format('F j, Y, g:i a') }}
                </div>
                <div class="flex justify-between items-center mt-6">
                    <a href="{{ route('admin.team-members.edit', $teamMember) }}"
                        class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </a>
                    <form action="{{ route('admin.team-members.destroy', $teamMember) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this team member?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                            Delete
                        </button>
                    </form>
                    <a href="{{ route('admin.team-members.index') }}"
                        class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                        Back to Team Members
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
