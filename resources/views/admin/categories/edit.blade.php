@extends('layouts.admin')

@section('title', 'Manajemen Kategori')
@section('header_title', 'Manajemen Kategori')

@section('content')


    <div class="space-y-6">
        <h2 class="text-2xl font-extrabold text-[#00294B] leading-tight">
            {{ __('New Category') }}
        </h2>
        <div class="max-w-5xl mx-auto">
            <div class="bg-white overflow-hidden p-6 sm:p-8 border border-slate-200 shadow-sm rounded-2xl">

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="px-5 w-full rounded-3xl bg-red-500 text-white">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{ route('admin.categories.update', $category) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input value='{{ $category->name }}' id="name" class="block mt-1 w-full" type="text"
                            name="name" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="parent_id" :value="__('Kategori')" />

                        <select name="parent_id" id="parent_id" class="h-12 rounded-xl px-4 w-full border border-slate-200">
                            <option value="">None</option>
                            @forelse($parent as $row)
                                <option value="{{ $row->id }}"
                                    {{ $category->parent_id == $row->id ? 'selected' : '' }}>{{ $row->name }}
                                </option>
                            @empty
                            @endforelse
                        </select>

                        <x-input-error :messages="$errors->get('category')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <button type="submit" class="font-bold py-3 px-6 bg-[#F15A24] hover:bg-[#dc4e1d] text-white rounded-xl">
                            Update Category
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
