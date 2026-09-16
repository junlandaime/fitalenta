@extends('layouts.admin')

@section('title', 'Mitra Universitas')
@section('header_title', 'Mitra Universitas')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Add New University Partner</h1>
            <a href="{{ route('admin.university-partners.index') }}"
                class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                Back to List
            </a>
        </div>

        <div class="bg-white shadow-md rounded my-6 p-6">
            <form action="{{ route('admin.university-partners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label class="block text-slate-700 text-sm font-bold mb-2" for="name">
                        University Name
                    </label>
                    <input
                        class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('name') border-red-500 @enderror"
                        id="name" type="text" name="name" value="{{ old('name') }}" required>
                    @error('name')
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
                    <label class="block text-slate-700 text-sm font-bold mb-2" for="student_count">
                        Number of Students
                    </label>
                    <input
                        class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('student_count') border-red-500 @enderror"
                        id="student_count" type="number" name="student_count" value="{{ old('student_count', 0) }}" required>
                    @error('student_count')
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
                    <label class="block text-slate-700 text-sm font-bold mb-2" for="order">
                        Display Order
                    </label>
                    <input
                        class="border border-slate-200 rounded-xl w-full py-3 px-4 text-slate-700 leading-tight focus:outline-none focus:ring-2 focus:ring-[#00294B]/10 focus:border-[#00294B] @error('order') border-red-500 @enderror"
                        id="order" type="number" name="order" value="{{ old('order', 0) }}" required>
                    @error('order')
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
                        Add Partner
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
