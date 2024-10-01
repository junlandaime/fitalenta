@extends('layouts.admin')

@section('title', 'Manage Services')

@section('content')
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold">Manage Services</h1>
            <a href="{{ route('admin.services.create') }}"
                class="bg-[#00294B] hover:bg-[#001f3b] text-white font-bold py-2 px-4 rounded">Add New Service</a>
        </div>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <form action="{{ route('admin.services.index') }}" method="GET" class="mb-4">
                <div class="flex items-center">
                    <input type="text" name="search" placeholder="Search services..."
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-2"
                        value="{{ request('search') }}">
                    <select name="sort"
                        class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mr-2">
                        <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>Sort by Name</option>
                        <option value="price" {{ request('sort') == 'price' ? 'selected' : '' }}>Sort by Price</option>
                        <option value="created_at" {{ request('sort') == 'created_at' ? 'selected' : '' }}>Sort by Creation
                            Date</option>
                    </select>
                    <button type="submit"
                        class="bg-[#00294B] hover:bg-[#001f3b] text-white font-bold py-2 px-4 rounded">Search</button>
                </div>
            </form>

            @if ($services->isEmpty())
                <p class="text-gray-600">No services found.</p>
            @else
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="text-left py-2">Name</th>
                            <th class="text-left py-2">Price</th>
                            <th class="text-left py-2">Duration</th>
                            <th class="text-left py-2">Views</th>
                            <th class="text-left py-2">Featured</th>
                            <th class="text-left py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td class="py-2">{{ $service->name }}</td>
                                <td class="py-2">{{ $service->price ? '$' . number_format($service->price, 2) : 'N/A' }}
                                </td>
                                <td class="py-2">{{ $service->duration }}</td>
                                <td class="py-2">{{ $service->views }}</td>
                                <td class="py-2">
                                    @if ($service->is_featured)
                                        <span
                                            class="bg-green-200 text-green-800 py-1 px-2 rounded-full text-xs">Featured</span>
                                    @else
                                        <span class="bg-gray-200 text-gray-800 py-1 px-2 rounded-full text-xs">Not
                                            Featured</span>
                                    @endif
                                </td>
                                <td class="py-2">
                                    <a href="{{ route('admin.services.edit', $service) }}"
                                        class="text-blue-600 hover:text-blue-800 mr-2">Edit</a>
                                    <form action="{{ route('admin.services.destroy', $service) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800"
                                            onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $services->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
