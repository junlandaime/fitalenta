@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Job Listings</h1>
            <a href="{{ route('admin.jobs.create') }}"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Add New Job
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Title</th>
                        <th class="py-3 px-6 text-left">Company</th>
                        <th class="py-3 px-6 text-center">Type</th>
                        <th class="py-3 px-6 text-center">Location</th>
                        <th class="py-3 px-6 text-center">Posted Date</th>
                        <th class="py-3 px-6 text-center">Status</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($jobs as $job)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                {{ $job->title }}
                            </td>
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full" src="{{ $job->company->logo_url }}"
                                            alt="{{ $job->company->name }}">
                                    </div>
                                    <span>{{ $job->company->name }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-blue-200 text-blue-600 py-1 px-3 rounded-full text-xs">{{ $job->type }}</span>
                            </td>
                            <td class="py-3 px-6 text-center">{{ $job->location }}</td>
                            <td class="py-3 px-6 text-center">{{ $job->posted_at->format('M d, Y') }}</td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-{{ $job->is_active ? 'green' : 'red' }}-500 text-white py-1 px-3 rounded-full text-xs">
                                    {{ $job->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <a href="{{ route('admin.jobs.edit', $job) }}"
                                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.jobs.destroy', $job) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-4 mr-2 transform hover:text-red-500 hover:scale-110"
                                            onclick="return confirm('Are you sure you want to delete this job?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{ route('jobs.show', $job) }}" target="_blank"
                                        class="w-4 transform hover:text-blue-500 hover:scale-110">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="px-6 py-4">
                {{-- {{ $jobs->links() }} --}}
            </div>
        </div>
    </div>
@endsection
