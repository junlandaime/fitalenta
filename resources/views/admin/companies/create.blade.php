@extends('layouts.admin')

@section('title', 'Perusahaan Mitra')
@section('header_title', 'Perusahaan Mitra')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Add New Company</h1>
            <a href="{{ route('admin.companies.index') }}"
                class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                Back to List
            </a>
        </div>

        <div class="bg-white shadow-md rounded my-6 p-6">
            <form action="{{ route('admin.companies.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label class="block text-slate-700 text-sm font-bold mb-2" for="name">
                        Company Name
                    </label>
                    <input
                        class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('name') border-red-500 @enderror"
                        id="name" type="text" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-slate-700 text-sm font-bold mb-2" for="logo">
                        Logo
                    </label>
                    <input
                        class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('logo') border-red-500 @enderror"
                        id="logo" type="file" name="logo" accept="image/*" required>
                    @error('logo')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-slate-700 text-sm font-bold mb-2" for="website">
                        Website
                    </label>
                    <input
                        class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('website') border-red-500 @enderror"
                        id="website" type="url" name="website" value="{{ old('website') }}">
                    @error('website')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-slate-700 text-sm font-bold mb-2" for="industry">
                        Industry
                    </label>
                    <input
                        class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('industry') border-red-500 @enderror"
                        id="industry" type="text" name="industry" value="{{ old('industry') }}" required>
                    @error('industry')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-slate-700 text-sm font-bold mb-2" for="employee_count">
                        Employee Count Range
                    </label>
                    <select
                        class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('employee_count') border-red-500 @enderror"
                        id="employee_count" name="employee_count">
                        <option value="">Select range</option>
                        <option value="1-10">1-10 employees</option>
                        <option value="11-50">11-50 employees</option>
                        <option value="51-200">51-200 employees</option>
                        <option value="201-500">201-500 employees</option>
                        <option value="501-1000">501-1000 employees</option>
                        <option value="1000+">1000+ employees</option>
                    </select>
                    @error('employee_count')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-slate-700 text-sm font-bold mb-2" for="location">
                        Location
                    </label>
                    <input
                        class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('location') border-red-500 @enderror"
                        id="location" type="text" name="location" value="{{ old('location') }}" required>
                    @error('location')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-slate-700 text-sm font-bold mb-2" for="description">
                        Description
                    </label>
                    <textarea
                        class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('description') border-red-500 @enderror"
                        id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                            class="form-checkbox h-5 w-5 text-blue-600">
                        <span class="ml-2 text-slate-700">Active</span>
                    </label>
                </div>

                <div class="flex items-center justify-end">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B]"
                        type="submit">
                        Add Company
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
