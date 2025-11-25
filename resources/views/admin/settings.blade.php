@extends('layouts.admin')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Settings</h1>
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg p-6">
            {{-- Stats Settings --}}
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Stats Settings</h2>
                <form action="{{ route('admin.settings.update-stats') }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    @php
                        $stats = collect(
                            is_string(setting('stats')) ? json_decode(setting('stats'), true) : setting('stats'),
                        )
                            ->map(function ($stat) {
                                return (array) $stat;
                            })
                            ->toArray();
                    @endphp

                    @foreach ($stats as $index => $stat)
                        <div class="grid grid-cols-3 gap-4 p-4 bg-gray-50 rounded">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Value</label>
                                <input type="number" name="stats[{{ $index }}][value]"
                                    value="{{ old("stats.$index.value", $stat['value']) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error("stats.$index.value") border-red-500 @enderror">
                                @error("stats.$index.value")
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Label</label>
                                <input type="text" name="stats[{{ $index }}][label]"
                                    value="{{ old("stats.$index.label", $stat['label']) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error("stats.$index.label") border-red-500 @enderror">
                                @error("stats.$index.label")
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Animation Duration</label>
                                <input type="number" name="stats[{{ $index }}][duration]"
                                    value="{{ old("stats.$index.duration", $stat['duration']) }}"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error("stats.$index.duration") border-red-500 @enderror">
                                @error("stats.$index.duration")
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    @endforeach
                    <div class="mt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                            Update Stats
                        </button>
                    </div>
                </form>
            </div>

            {{-- Contact Information --}}
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Contact Information</h2>
                <form action="{{ route('admin.settings.update-contact') }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    @php
                        $contact = setting('contact_info') ?? [];
                    @endphp
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Address</label>
                        <textarea name="address" rows="3"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error('address') border-red-500 @enderror">{{ old('address', $contact['address'] ?? '') }}</textarea>
                        @error('address')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="text" name="phone" value="{{ old('phone', $contact['phone'] ?? '') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error('phone') border-red-500 @enderror">
                        @error('phone')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" value="{{ old('email', $contact['email'] ?? '') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error('email') border-red-500 @enderror">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">WhatsApp</label>
                        <input type="text" name="whatsapp" value="{{ old('whatsapp', $contact['whatsapp'] ?? '') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error('whatsapp') border-red-500 @enderror">
                        @error('whatsapp')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                            Update Contact Info
                        </button>
                    </div>
                </form>
            </div>

            {{-- Social Media Links --}}
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Social Media Links</h2>
                <form action="{{ route('admin.settings.update-social') }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    @php
                        $social = setting('social_media') ?? [];
                    @endphp

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Facebook</label>
                        <input type="url" name="facebook" value="{{ old('facebook', $social['facebook'] ?? '') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error('facebook') border-red-500 @enderror">
                        @error('facebook')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Twitter</label>
                        <input type="url" name="twitter" value="{{ old('twitter', $social['twitter'] ?? '') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error('twitter') border-red-500 @enderror">
                        @error('twitter')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Instagram</label>
                        <input type="url" name="instagram" value="{{ old('instagram', $social['instagram'] ?? '') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error('instagram') border-red-500 @enderror">
                        @error('instagram')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">LinkedIn</label>
                        <input type="url" name="linkedin" value="{{ old('linkedin', $social['linkedin'] ?? '') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm @error('linkedin') border-red-500 @enderror">
                        @error('linkedin')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                            Update Social Media
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
