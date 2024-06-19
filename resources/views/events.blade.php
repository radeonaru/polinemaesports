@extends('layouts.app')

@section('content')
    <article class="bg-white rounded-lg shadow-md overflow-hidden bg-gray-200">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:items-center lg:justify-between lg:px-8">
            <div class="text-center">
                <p class="mt-5 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">Events</p>
            </div>
            @foreach ($events as $event)
                <div class="mt-10">
                    <div class="flex flex-col sm:flex-row items-start">
                        <div class="p-4 flex-shrink-0 border rounded mb-4 sm:mb-0 sm:mr-4">
                            <img src="{{ asset($event->gambar_event) }}" alt="Event 1" class="object-cover h-64 w-full sm:h-48 sm:w-48">
                        </div>
                        <div class="w-full">
                            <h3 class="m-5 text-2xl sm:text-3xl text-gray-900 font-medium">{{ $event->nama_event }}</h3>
                            <div class="box-content">
                                <p class="m-5 text-base sm:text-lg text-gray-500">{{ $event->deskripsi_singkat }}</p>
                            </div>
                            <hr class="border-t border-gray-300 mb-2">
                            <div class="flex justify-between items-center">
                                <a href="{{ route('event.show', $event->id_event) }}" class="flex items-center hover:text-yellow-500">
                                    <p class="ml-5 text-base sm:text-lg font-medium text-black-500">Lihat Selengkapnya</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0-7.5 7.5M21 12H3" />
                                    </svg>
                                </a>
                                <span class="ml-5 text-sm text-gray-500">Created at: {{ $event->created_at }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </article>
@endsection
