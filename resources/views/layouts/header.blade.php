<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <a href="{{ route('landing') }}">
                <img src="../public/content/polinemaesports.png" alt="Logo Polinema Esports" width="100" height="100">
            </a>
            <!-- Tambahkan tombol dropdown untuk mobile -->
            <div class="flex lg:hidden">
                <button id="mobile-menu-button" class="text-gray-600 focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <!-- Menu untuk desktop -->
            <div class="hidden lg:flex justify-end space-x-8">
                <a class="font-semibold hover:text-yellow-500" href="{{ route('event') }}">Events</a>
                <a class="font-semibold hover:text-yellow-500" href="">Staff</a>
                <a class="font-semibold hover:text-yellow-500" href="{{ route('partnership') }}">Partnership</a>
                <a class="font-semibold hover:text-yellow-500" href="">About Us</a>
            </div>
        </div>
        <!-- Menu dropdown untuk mobile -->
        <div class="lg:hidden flex flex-col items-end" id="mobile-menu">
            <a class="block mt-4 font-semibold hover:text-yellow-500" href="{{ route('event') }}">Events</a>
            <a class="block mt-4 font-semibold hover:text-yellow-500" href="">Staff</a>
            <a class="block mt-4 font-semibold hover:text-yellow-500" href="{{ route('partnership') }}">Partnership</a>
            <a class="block mt-4 font-semibold hover:text-yellow-500" href="">About Us</a>
        </div>        
    </div>
</header>

