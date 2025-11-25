@extends('layouts.app2')

@section('content')
    <!-- Hero Section -->
    <section class="py-20 bg-primary text-white">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Lowongan Pekerjaan</h1>
            <p class="text-xl md:text-2xl mb-8">Temukan Peluang Karir Terbaik untuk Anda</p>
            <div class="max-w-2xl mx-auto">
                <form action="{{ route('jobs.index') }}" method="GET" class="flex flex-col md:flex-row gap-4">
                    <input type="text" name="search" value="{{ request('search') }}"
                        placeholder="Cari posisi atau perusahaan..." class="flex-1 px-4 py-3 rounded-lg text-gray-800">
                    <button type="submit"
                        class="bg-secondary text-white px-8 py-3 rounded-lg hover:bg-opacity-90 transition duration-300">
                        <i class="fas fa-search mr-2"></i>Cari
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Job Listings Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <!-- Filters -->
            <form action="{{ route('jobs.index') }}" method="GET" class="mb-8 grid grid-cols-1 md:grid-cols-4 gap-4">
                @if (request('search'))
                    <input type="hidden" name="search" value="{{ request('search') }}">
                @endif

                <select name="location" class="p-2 border rounded-lg">
                    <option value="">Semua Lokasi</option>
                    @foreach ($locations as $loc)
                        <option value="{{ $loc }}" {{ request('location') == $loc ? 'selected' : '' }}>
                            {{ $loc }}
                        </option>
                    @endforeach
                </select>

                <select name="industry" class="p-2 border rounded-lg">
                    <option value="">Semua Kategori</option>
                    {{-- @foreach ($industries as $industry)
                        <option value="{{ $industry }}" {{ request('industry') == $industry ? 'selected' : '' }}>
                            {{ $industry }}
                        </option>
                    @endforeach --}}
                </select>

                <select name="type" class="p-2 border rounded-lg">
                    <option value="">Semua Tipe</option>
                    @foreach ($types as $type)
                        <option value="{{ $type }}" {{ request('type') == $type ? 'selected' : '' }}>
                            {{ $type }}
                        </option>
                    @endforeach
                </select>

                <select name="experience" class="p-2 border rounded-lg">
                    <option value="">Pengalaman</option>
                    <option value="fresh" {{ request('experience') == 'fresh' ? 'selected' : '' }}>Fresh Graduate</option>
                    <option value="1-3" {{ request('experience') == '1-3' ? 'selected' : '' }}>1-3 Tahun</option>
                    <option value="3-5" {{ request('experience') == '3-5' ? 'selected' : '' }}>3-5 Tahun</option>
                    <option value="5+" {{ request('experience') == '5+' ? 'selected' : '' }}>5+ Tahun</option>
                </select>
            </form>

            <!-- Job Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($jobs as $job)
                    <a href="{{ route('jobs.show', $job) }}"
                        class="job-card block bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <img src="{{ $job->company->logo_url }}" alt="{{ $job->company->name }}"
                                    class="w-12 h-12 rounded object-cover">
                                <span
                                    class="@if ($job->type == 'Full Time') bg-green-100 text-green-800 
                                    @elseif($job->type == 'Remote') bg-blue-100 text-blue-800
                                    @elseif($job->type == 'Internship') bg-yellow-100 text-yellow-800
                                    @else bg-gray-100 text-gray-800 @endif
                                    px-3 py-1 rounded-full text-sm">
                                    {{ $job->type }}
                                </span>
                            </div>
                            <h3 class="text-xl font-bold mb-2">{{ $job->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ $job->company->name }}</p>
                            <div class="flex items-center text-gray-500 text-sm mb-4">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                <span>{{ $job->location }}</span>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-primary">
                                    Rp
                                    {{ number_format($job->salary_min / 1000000, 0) }}-{{ number_format($job->salary_max / 1000000, 0) }}
                                    juta/bulan
                                </span>
                                <span class="text-gray-500">{{ $job->posted_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500">Tidak ada lowongan yang ditemukan.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $jobs->links() }}
            </div>
        </div>
    </section>

    <style>
        .job-card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s;
        }
    </style>
@endsection
