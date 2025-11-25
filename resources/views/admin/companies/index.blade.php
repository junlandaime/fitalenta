@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Companies</h1>
            <a href="{{ route('admin.companies.create') }}"
                class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Add New Company
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif

        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Company</th>
                        <th class="py-3 px-6 text-left">Industry</th>
                        <th class="py-3 px-6 text-center">Location</th>
                        <th class="py-3 px-6 text-center">Active Jobs</th>
                        <th class="py-3 px-6 text-center">Status</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($companies as $company)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-8 h-8 rounded-full object-cover" src="{{ $company->logo_url }}"
                                            alt="{{ $company->name }}">
                                    </div>
                                    <span>{{ $company->name }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">{{ $company->industry }}</td>
                            <td class="py-3 px-6 text-center">{{ $company->location }}</td>
                            <td class="py-3 px-6 text-center">{{ $company->jobs()->count() }}</td>
                            <td class="py-3 px-6 text-center">
                                <span
                                    class="bg-{{ $company->is_active ? 'green' : 'red' }}-500 text-white py-1 px-3 rounded-full text-xs">
                                    {{ $company->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <a href="{{ route('admin.companies.edit', $company) }}"
                                        class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.companies.destroy', $company) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-4 mr-2 transform hover:text-red-500 hover:scale-110"
                                            onclick="return confirm('Are you sure you want to delete this company?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
