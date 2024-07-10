@extends('layouts.app')

@section('content')

<!-- About Us Section -->
<section id="about" class="py-20">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center text-black">Tentang Kami</h2>
        <p class="mt-6 text-lg text-center text-gray-600">Selamat datang di Polinema Esports! Kami adalah komunitas mahasiswa Politeknik Negeri Malang yang berdedikasi dan bersemangat dalam dunia esports. Misi kami adalah untuk mendukung dan memajukan kegiatan esports di kampus dengan menyelenggarakan acara, turnamen, serta menyediakan platform bagi para gamers untuk berinteraksi dan meningkatkan keterampilan mereka.</p>
        
        <div class="mt-12 flex flex-col lg:flex-row justify-center items-center lg:space-x-8">
            <div class="flex flex-col items-center mb-8 lg:mb-0">
                <img src="path/to/our-team.jpg" alt="Tim Kami" class="w-48 h-48 rounded-full shadow-lg">
                <h3 class="mt-4 text-2xl font-semibold text-white">Tim Kami</h3>
                <p class="mt-2 text-gray-300 text-center">Kenali anggota-anggota yang berdedikasi di balik Polinema Esports, yang mendorong komunitas kami maju.</p>
            </div>
            <div class="flex flex-col items-center mb-8 lg:mb-0">
                <img src="path/to/our-mission.jpg" alt="Misi Kami" class="w-48 h-48 rounded-full shadow-lg">
                <h3 class="mt-4 text-2xl font-semibold text-white">Misi Kami</h3>
                <p class="mt-2 text-gray-300 text-center">Membangun lingkungan esports yang mendukung dan kompetitif di kampus.</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="path/to/our-vision.jpg" alt="Visi Kami" class="w-48 h-48 rounded-full shadow-lg">
                <h3 class="mt-4 text-2xl font-semibold text-white">Visi Kami</h3>
                <p class="mt-2 text-gray-300 text-center">Menjadi komunitas esports kampus terkemuka yang unggul dalam inovasi dan prestasi.</p>
            </div>
        </div>

        <!-- Statistics Section -->
        <div class="mt-12">
            <h3 class="text-3xl font-bold text-center text-black pt-20">Pencapaian Kami</h3>
            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h4 class="text-4xl font-bold text-white">2019</h4>
                    <p class="mt-2 text-gray-300">Berdiri Sejak</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h4 class="text-4xl font-bold text-white">700+</h4>
                    <p class="mt-2 text-gray-300">Anggota Komunitas</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h4 class="text-4xl font-bold text-white">30+</h4>
                    <p class="mt-2 text-gray-300">Prestasi yang diperoleh</p>
                </div>
            </div>
        </div>

        <div class="mt-32 bg-gray-800 p-8 rounded-lg shadow-lg">
            <h3 class="text-3xl font-bold text-center text-white">Apa yang Kami Lakukan?</h3>
            <p class="mt-6 text-lg text-center text-gray-300">Di Polinema Esports, kami melakukan berbagai program dan kegiatan untuk mendukung anggota kami, termasuk:</p>
            <ul class="mt-4 text-lg text-gray-300 list-disc list-inside space-y-2">
                <li>Turnamen dan kompetisi esports reguler</li>
                <li>Sesi pelatihan/scrim dengan pemain profesional</li>
                <li>Acara komunitas dan meetup</li>
                <li>Diskusi dengan sesama anggota komunitas lainnya</li>
            </ul>
        </div>
    </div>

    <div id="default-carousel" class="mt-20 relative w-full" data-carousel="slide">
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

@endsection