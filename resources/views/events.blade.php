@extends('layouts.app')

@section('content')
    <article class="bg-white rounded-lg shadow-md overflow-hidden bg-gray-200">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:items-center lg:justify-between lg:px-8">
            <div class="lg:text-center">
                <p class="mt-5 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">Events
                </p>
            </div>
            @foreach ($events as $event)
                <div class="mt-10">
                    <div class="flex">
                        <div class="p-4 flex-shrink-0 border rounded">
                            <img src="{{ asset('../public/' . $event->gambar_event) }}" alt="Event 1" height="300"
                                width="300">
                        </div>
                        <div>
                            <h3 class="m-5 text-3xl text-gray-900 font-semibold">{{ $event->nama_event }} </h3>
                            <div class="box-content h-48">
                                <p class="m-5 text-lg text-gray-500">{{ $event->deskripsi_singkat }}
                            </div>
                            <hr class="border-t border-gray-300 mb-2">
                            <div class="flex justify-between">
                                <a href="{{ route('event.show', $event->id_event) }}" class="flex hover:text-yellow-500">
                                    <p class="ml-5 text-left font-medium text-xl text-black-500">
                                        Lihat Selengkapnya
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 ml-1 mt-0.5 text-black-500"
                                        width="30" height="30">>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                    </svg>
                                </a>
                                <span class="ml-5 text-gray-500">Created at: {{ $event->created_at }}</span>
                            </div>
                        </div>
                        <div class="mt-auto text-gray-700 text-sm">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </article>
@endsection
