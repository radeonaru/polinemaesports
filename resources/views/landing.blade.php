    @extends('layouts.app')

    @section('content')
    <!-- Hero Section -->
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:px-8">
            <div class="lg:w-1/2">
                <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                    <span class="block">Welcome to Polinema Esports</span>
                    <span class="block text-yellow-500 mt-2">#FlySoHigh!</span>
                </h2>
                <p class="mt-4 text-lg leading-6 text-gray-500">Polinema E-sports is a student community In Malang State
                    Polytechnic that focuses on development and achievement in the E-sports realm.</p>
                <div class="mt-10">
                    <a href="https://linktr.ee/PMLC.ID"
                        class="px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-yellow-500 hover:bg-yellow-700">Join
                        Us</a>
                    <a href="#"
                        class="ml-4 px-8 py-3 border border-transparent text-base font-medium rounded-md text-yellow-500 bg-yellow-100 hover:bg-yellow-200">Learn
                        More</a>
                </div>
            </div>
            <div class="mt-8 lg:mt-0 lg:w-1/2">
                <img class="h-72 w-full object-cover sm:h-96 lg:h-full" src="https://via.placeholder.com/600x400"
                    alt="Hero Image">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:items-center lg:justify-between lg:px-8">
            <div class="lg:text-left">
                <p class="mt-2 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">Event Terkini
                </p>
            </div>
            <div class="mt-10">
                <div class="grid grid-cols-1 gap-y-10 md:grid-cols-2 lg:grid-cols-2 gap-8">
                    <div class="flex lg:w-1/2">
                        <div class="p-4 flex-shrink-0 border rounded">
                            <img src="../public/content/foto_event/event1.jpg" alt="Event 1" height="500"
                                width="500">
                            <h3 class="text-2xl mt-5 leading-6 font-medium text-gray-900">Charity Mobile Legends
                                Championship</h3>
                            <p class="mt-2 text-lg text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</p>
                        </div>
                    </div>
                    <div class="flex lg:w-1/2">
                        <div class="p-4 flex-shrink-0 border rounded">
                            <img src="../public/content/foto_event/event2.jpg" alt="Event 2" height="500"
                                width="500">
                            <h3 class="text-2xl mt-5 leading-6 font-semibold text-gray-900">Edith Collector Offline
                                Tournament</h3>
                            <p class="mt-2 text-lg text-gray-500">Nullam scelerisque nulla eget mauris fermentum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:items-center lg:justify-between lg:px-8">
                <div class="lg:text-left">
                    <p class="mt-2 text-3xl leading-8 font-semibold tracking-tight text-gray-900 sm:text-4xl">
                        Partnership</p>
                </div>
                <div class="mt-12">
                    <div class="grid grid-cols-1 gap-y-10 md:grid-cols-2 lg:grid-cols-3 justify-items-center">
                        <div class="flex lg:w-1/2">
                            <div class="p-4 flex-shrink-0">
                                <img src="../public/content/foto_partner/partner1.png" alt="Partner 1" height="200"
                                    width="200">
                            </div>
                        </div>
                        <div class="flex lg:w-1/2">
                            <div class="p-4 flex-shrink-0">
                                <img src="../public/content/foto_partner/partner2.png" alt="Partner 2" height="200"
                                    width="200">
                            </div>
                        </div>
                        <div class="flex lg:w-1/2">
                            <div class="p-4 flex-shrink-0">
                                <img src="../public/content/foto_partner/partner3.png" alt="Partner 3" height="200"
                                    width="200">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
