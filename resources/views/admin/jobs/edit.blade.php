@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Edit Job</h1>
            <a href="{{ route('admin.jobs.index') }}"
                class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                Back to List
            </a>
        </div>

        <div class="bg-white shadow-md rounded my-6 p-6">
            <form action="{{ route('admin.jobs.update', $job) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="company_id">
                        Company
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('company_id') border-red-500 @enderror"
                        id="company_id" name="company_id" required>
                        <option value="">Select Company</option>
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}"
                                {{ old('company_id', $job->company_id) == $company->id ? 'selected' : '' }}>
                                {{ $company->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('company_id')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Job Title
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('title') border-red-500 @enderror"
                        id="title" type="text" name="title" value="{{ old('title', $job->title) }}" required>
                    @error('title')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="type">
                        Job Type
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('type') border-red-500 @enderror"
                        id="type" name="type" required>
                        <option value="">Select Type</option>
                        <option value="Full Time" {{ old('type', $job->type) == 'Full Time' ? 'selected' : '' }}>Full Time
                        </option>
                        <option value="Part Time" {{ old('type', $job->type) == 'Part Time' ? 'selected' : '' }}>Part Time
                        </option>
                        <option value="Contract" {{ old('type', $job->type) == 'Contract' ? 'selected' : '' }}>Contract
                        </option>
                        <option value="Internship" {{ old('type', $job->type) == 'Internship' ? 'selected' : '' }}>Internship
                        </option>
                        <option value="Remote" {{ old('type', $job->type) == 'Remote' ? 'selected' : '' }}>Remote</option>
                    </select>
                    @error('type')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="location">
                        Location
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('location') border-red-500 @enderror"
                        id="location" type="text" name="location" value="{{ old('location', $job->location) }}"
                        required>
                    @error('location')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="salary_min">
                            Minimum Salary
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('salary_min') border-red-500 @enderror"
                            id="salary_min" type="number" name="salary_min"
                            value="{{ old('salary_min', $job->salary_min) }}" required>
                        @error('salary_min')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="salary_max">
                            Maximum Salary
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('salary_max') border-red-500 @enderror"
                            id="salary_max" type="number" name="salary_max"
                            value="{{ old('salary_max', $job->salary_max) }}" required>
                        @error('salary_max')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                        Description
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror"
                        id="description" name="description" rows="4" required>{{ old('description', $job->description) }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="responsibilities">
                        Responsibilities
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('responsibilities') border-red-500 @enderror"
                        id="responsibilities" name="responsibilities" rows="4" required>{{ old('responsibilities', is_array($job->responsibilities) ? implode("\n", $job->responsibilities) : $job->responsibilities) }}</textarea>
                    <p class="text-sm text-gray-600 mt-1">Enter each responsibility on a new line</p>
                    @error('responsibilities')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="requirements">
                        Requirements
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('requirements') border-red-500 @enderror"
                        id="requirements" name="requirements" rows="4" required>{{ old('requirements', is_array($job->requirements) ? implode("\n", $job->requirements) : $job->requirements) }}</textarea>
                    <p class="text-sm text-gray-600 mt-1">Enter each requirement on a new line</p>
                    @error('requirements')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="benefits">
                        Benefits
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('benefits') border-red-500 @enderror"
                        id="benefits" name="benefits" rows="4" required>{{ old('benefits', is_array($job->benefits) ? implode("\n", $job->benefits) : $job->benefits) }}</textarea>
                    <p class="text-sm text-gray-600 mt-1">Enter each benefit on a new line</p>
                    @error('benefits')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="how_to_apply">
                        How to Apply
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('how_to_apply') border-red-500 @enderror"
                        id="how_to_apply" name="how_to_apply" rows="4" required>{{ old('how_to_apply', $job->how_to_apply) }}</textarea>
                    @error('how_to_apply')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="order">
                        Display Order
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('order') border-red-500 @enderror"
                        id="order" type="number" name="order" value="{{ old('order', $job->order) }}" required>
                    @error('order')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="flex items-center">
                        <input type="checkbox" name="is_active" value="1"
                            {{ old('is_active', $job->is_active) ? 'checked' : '' }}
                            class="form-checkbox h-5 w-5 text-blue-600">
                        <span class="ml-2 text-gray-700">Active</span>
                    </label>
                </div>

                <div class="flex items-center justify-end">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Update Job
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
