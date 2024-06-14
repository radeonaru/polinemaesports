<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polinema Esports</title>
    <link rel="icon" href="../public/content/polinemaesports.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@tailus/tailus-ui@1.0.0-beta.1/dist/tailus-ui.min.css" rel="stylesheet">
</head>

<body class="antialiased bg-gray-100">
    @include('layouts.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
</body>

</html>
