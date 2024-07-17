    @extends('layouts.app')

    @section('content')
        <!-- Hero Section -->
        <section class="bg-gray-100">
            <div class="max-w-7xl mx-auto py-24 lg:py-48 px-4 sm:px-6 lg:items-center lg:justify-between lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                        <span class="block">Welcome to Polinema Esports</span>
                        <span class="block text-yellow-500 mt-2">#FlySoHigh!</span>
                    </h2>
                    <p class="mt-4 text-lg leading-6 text-gray-500">Polinema E-sports is a student community in Malang State
                        Polytechnic that focuses on development and achievement in the E-sports realm.</p>
                    <div class="mt-10">
                        <a href="https://linktr.ee/PMLC.ID"
                            class="px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-yellow-500 hover:bg-yellow-700 transition duration-300">Join
                            Us</a>
                        <a href="#events" id="learnmore-btn"
                            class="ml-4 px-8 py-3 border border-transparent text-base font-medium rounded-md text-yellow-500 bg-yellow-100 hover:bg-yellow-200 transition duration-300">Learn
                            More</a>
                    </div>
                </div>
                {{-- <div class="mt-8 lg:mt-0 lg:w-1/2 hidden lg:block">
                    <img class="h-72 w-full object-cover lg:h-full" src="https://via.placeholder.com/600x400" alt="Hero Image">
                </div> --}}
            </div>    

        <!-- Features Section -->
            <div id="events" class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:items-center lg:justify-between lg:px-8">
                <div class="text-center p-10 pb-10">
                    <p class="mt-2 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">Event Terkini
                    </p>
                </div>
                <div class="mt-5">
                    <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-6">
                        @foreach ($events->take(2) as $event)
                        <div class="flex place-content-center">
                            <a href="{{ route('event.show', $event->id_event) }}">
                                <div class="p-4 flex-shrink border rounded transition transform hover:scale-105 hover:bg-gray-100" style="max-width: 500px; max-height: 1000px">
                                    <img src="{{ asset($event->gambar_event) }}" alt="{{ $event->nama_event }}" class="w-700 h-700">
                                    <h3 class="text-2xl mt-5 leading-6 font-medium text-gray-900">{{ $event->nama_event }}</h3>
                                    <p class="mt-5 text-gray-500">{{ $event->deskripsi_singkat }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    
                    @for ($i = $events->count(); $i < 2; $i++)
                        <div class="flex place-content-center">
                            <div class="p-4 flex-shrink-0 border rounded" style="max-width: 500px;">
                                <div class="w-full h-48 bg-gray-200"></div>
                                <h3 class="text-2xl mt-5 leading-6 font-medium text-gray-900">Event Kosong</h3>
                                <p class="mt-5 text-lg text-gray-500">Deskripsi event kosong.</p>
                            </div>
                        </div>
                    @endfor
                    </div>
                </div>
                <div class="mt-8"></div>
                <div class="flex justify-between">
                    <a href="{{ route('event') }}" class="flex hover:text-yellow-500">
                        <p class="ml-5 text-left font-semibold text-2xl text-black-500">
                            Lainnya
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 ml-1 mt-0.5 text-black-500" width="30" height="30">>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="text-center p-10 pb-10">
                <p class="mt-5 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">Game Division
                </p>
            </div>
            <section class="relative">
                <div class="flex flex-col md:flex-row bg-black bg-opacity-50 items-center">
                    <img src="../public/content/foto_divisi/MobileLegends.jpg" alt="Mobile Legends" class="w-full h-96 object-cover">
                    <div class="absolute top-0 left-0 right-0 bottom-0 z-30 flex flex-col items-center justify-center p-6 text-center bg-black bg-opacity-50 backdrop-blur-lg">
                        <img src="../public/content/foto_divisi/MobileLegendsLogo.png" alt="Mobile Legends Logo" class="w-80 h-auto">
                    </div>
                </div>
            </section>
            <section class="relative">
                <div class="flex flex-col md:flex-row bg-black bg-opacity-50 items-center">
                    <img src="../public/content/foto_divisi/PUBGM.jpg" alt="PUBG Mobile" class="w-full h-96 object-cover">
                    <div class="absolute top-0 left-0 right-0 bottom-0 z-30 flex flex-col items-center justify-center p-6 text-center bg-black bg-opacity-50 backdrop-blur-lg">
                        <img src="../public/content/foto_divisi/PUBGMLogo.png" alt="PUBG Mobile Logo" class="w-80 h-auto">
                    </div>
                </div>
            </section>
            <section class="relative">
                <div class="flex flex-col md:flex-row bg-black bg-opacity-50 items-center">
                    <img src="../public/content/foto_divisi/Valorant.jpg" alt="Valorant" class="w-full h-96 object-cover">
                    <div class="absolute top-0 left-0 right-0 bottom-0 z-30 flex items-center justify-center p-6 text-center bg-black bg-opacity-50 backdrop-blur-lg">
                        <img src="../public/content/foto_divisi/ValorantLogo.png" alt="Valorant Logo" class="w-80 h-auto">
                    </div>
                </div>
            </section>
            <section class="relative">
                <div class="flex flex-col md:flex-row bg-black bg-opacity-50 items-center">
                    <img src="../public/content/foto_divisi/HonorOfKings.jpg" alt="Honor of Kings" class="w-full w-1/2 h-96 object-cover">
                    <div class="absolute top-0 left-0 right-0 bottom-0 z-30 flex items-center justify-center p-6 text-center bg-black bg-opacity-50 backdrop-blur-lg">
                        <img src="../public/content/foto_divisi/HonorOfKingsLogo.png" alt="Honor of Kings Logo" class="w-80 h-auto">
                    </div>
                </div>
            </section>
            <div>
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:items-center lg:justify-between lg:px-8 mt-5">
                    <div class="text-center">
                        <p class="mt-2 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">
                            Partnership</p>
                    </div>
                    <div class="mt-12">
                        <div class="grid grid-cols-1 gap-y-10 md:grid-cols-2 lg:grid-cols-4 justify-items-center">
                            <div class="flex">
                                <div class="p-4 flex-shrink">
                                    <a href="https://www.evos.gg/">
                                    <img src="../public/content/foto_partner/partner1.png" alt="Partner 1" height="200"
                                        width="200">
                                    </a>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="p-4 flex-shrink">
                                    <a href="https://moontonstudentleader.com.my/msl-landing">
                                    <img src="../public/content/foto_partner/partner2.png" alt="Partner 2" height="200"
                                        width="200">
                                    </a>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="p-4 flex-shrink">
                                    <a href="https://pmjc.id/">
                                    <img src="../public/content/foto_partner/partner3.png" alt="Partner 3" height="200"
                                        width="200">
                                    </a>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="p-4 flex-shrink">
                                    <a href="https://hokacecommunity.id/">
                                    <img src="../public/content/foto_partner/partner4.png" alt="Partner 4" height="200"
                                        width="300">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10"></div>
            </div>

            <div id="default-carousel" class="mb-20 relative w-full" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-96 overflow-hidden md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="../public/content/foto_dokumentasi/dokumentasi1.jpg" class="block w-full h-full object-cover" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="../public/content/foto_dokumentasi/dokumentasi2.jpg" class="block w-full h-full object-cover" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                        <img src="../public/content/foto_dokumentasi/dokumentasi3.jpg" class="block w-full h-full object-cover" alt="...">
                    </div>
                </div>
                <div class="absolute top-0 left-0 right-0 bottom-0 z-30 flex flex-col items-center justify-center p-6 text-center bg-black bg-opacity-50 backdrop-blur-lg">
                    <h2 class="text-white text-4xl font-bold mb-4">Join our community</h2>
                    <a href="https://linktr.ee/PMLC.ID">
                    <button class="px-8 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-yellow-500 hover:bg-yellow-700 transition duration-300">Join Us</button>
                    </a>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
        <script>
            document.getElementById('learnmore-btn').addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector('#events').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        </script>
    @endsection
