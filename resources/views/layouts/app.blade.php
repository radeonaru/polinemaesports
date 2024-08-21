<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polinema Esports</title>
    <link rel="icon" href="../public/content/polinemaesports.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="antialiased bg-gray-100">
    @include('layouts.header')

    <main class="mt-20 py-4">
        @yield('content')
    </main>

    @include('layouts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        // JavaScript untuk toggle menu dropdown pada mobile
        document.addEventListener('DOMContentLoaded', function() {
            var mobileMenuButton = document.getElementById('mobile-menu-button');
            var mobileMenu = document.getElementById('mobile-menu');
    
            // Sembunyikan menu dropdown saat halaman dimuat
            mobileMenu.style.display = 'none';
    
            // Tambahkan event listener untuk tombol menu mobile
            mobileMenuButton.addEventListener('click', function() {
                if (mobileMenu.style.display === 'block') {
                    mobileMenu.style.display = 'none';
                } else {
                    mobileMenu.style.display = 'block';
                }
            });
        });
    </script>
</body>

</html>
