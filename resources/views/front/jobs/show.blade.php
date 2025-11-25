@extends('layouts.app2')

@section('content')
    <main class="py-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <!-- Job Header -->
                    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                        <div class="flex items-center justify-between mb-6">
                            <img src="{{ $job->company->logo_url }}" alt="{{ $job->company->name }}" class="w-20 h-20 rounded">
                            <div class="flex space-x-4">
                                <a href="mailto:{{ $job->contact_email }}?subject=Application for {{ $job->title }}"
                                    class="bg-secondary text-white px-6 py-2 rounded-lg hover:bg-opacity-90 transition duration-300">
                                    Apply Now
                                </a>
                                <button
                                    class="border border-gray-300 px-6 py-2 rounded-lg hover:bg-gray-50 transition duration-300">
                                    <i class="far fa-bookmark"></i>
                                </button>
                            </div>
                        </div>
                        <h1 class="text-3xl font-bold mb-2">{{ $job->title }}</h1>
                        <p class="text-xl text-gray-600 mb-4">{{ $job->company->name }}</p>
                        <div class="flex flex-wrap gap-4 text-sm text-gray-600">
                            <div class="flex items-center">
                                <i class="fas fa-map-marker-alt mr-2 text-secondary"></i>
                                {{ $job->location }}
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-briefcase mr-2 text-secondary"></i>
                                {{ $job->type }}
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-money-bill-wave mr-2 text-secondary"></i>
                                Rp
                                {{ number_format($job->salary_min / 1000000, 0) }}-{{ number_format($job->salary_max / 1000000, 0) }}
                                juta/bulan
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-clock mr-2 text-secondary"></i>
                                {{ $job->posted_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>

                    <!-- Job Description -->
                    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                        <h2 class="text-2xl font-bold mb-4">Deskripsi Pekerjaan</h2>
                        <div class="prose max-w-none">
                            <p class="mb-4">
                                {!! nl2br(e($job->description)) !!}
                            </p>

                            <h3 class="text-xl font-bold mt-6 mb-3">Tanggung Jawab:</h3>
                            <ul class="list-disc pl-6 mb-4">
                                @foreach ($job->responsibilities as $responsibility)
                                    @if (trim($responsibility))
                                        <li>{{ trim($responsibility) }}</li>
                                    @endif
                                @endforeach
                            </ul>

                            <h3 class="text-xl font-bold mt-6 mb-3">Kualifikasi:</h3>
                            <ul class="list-disc pl-6 mb-4">
                                @foreach ($job->requirements as $requirement)
                                    @if (trim($requirement))
                                        <li>{{ trim($requirement) }}</li>
                                    @endif
                                @endforeach
                            </ul>

                            <h3 class="text-xl font-bold mt-6 mb-3">Benefit:</h3>
                            <ul class="list-disc pl-6 mb-4">
                                @foreach ($job->benefits as $benefit)
                                    @if (trim($benefit))
                                        <li>{{ trim($benefit) }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- How to Apply -->
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <h2 class="text-2xl font-bold mb-4">Cara Melamar</h2>
                        <div class="prose max-w-none">
                            {!! nl2br(e($job->how_to_apply)) !!}
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <!-- Company Info -->
                    <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                        <h2 class="text-xl font-bold mb-4">Tentang Perusahaan</h2>
                        <p class="text-gray-600 mb-4">
                            {{ $job->company->description }}
                        </p>
                        <div class="flex flex-col space-y-2 text-sm">
                            @if ($job->company->website)
                                <a href="{{ $job->company->website }}" class="text-primary hover:text-secondary"
                                    target="_blank">
                                    <i class="fas fa-globe mr-2"></i>{{ $job->company->website }}
                                </a>
                            @endif
                            <span>
                                <i class="fas fa-users mr-2"></i>{{ $job->company->employee_count }} karyawan
                            </span>
                            <span>
                                <i class="fas fa-industry mr-2"></i>{{ $job->company->industry }}
                            </span>
                        </div>
                    </div>

                    <!-- Similar Jobs -->
                    @if ($similarJobs->count() > 0)
                        <div class="bg-white rounded-lg shadow-lg p-6">
                            <h2 class="text-xl font-bold mb-4">Lowongan Serupa</h2>
                            <div class="space-y-4">
                                @foreach ($similarJobs as $similarJob)
                                    <a href="{{ route('jobs.show', $similarJob) }}"
                                        class="block p-4 border rounded-lg hover:bg-gray-50 transition duration-300">
                                        <div class="flex items-start space-x-3">
                                            <img src="{{ $similarJob->company->logo_url }}"
                                                alt="{{ $similarJob->company->name }}" class="w-12 h-12 rounded">
                                            <div>
                                                <h3 class="font-semibold text-gray-900">{{ $similarJob->title }}</h3>
                                                <p class="text-sm text-gray-600">{{ $similarJob->company->name }}</p>
                                                <div class="mt-1 text-sm text-gray-500">
                                                    <span>{{ $similarJob->location }}</span>
                                                    <span class="mx-2">•</span>
                                                    <span>{{ $similarJob->type }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
