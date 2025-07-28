<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lorasco</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-gray-300">

<nav class=" border-b border-red-200 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="flex h-16 items-center space-x-72">
            <!-- Logo -->
            <div class="flex-shrink-0 -ml-10">
                <a href="/" class="text-2xl font-bold text-red-600">Oil Service</a>
            </div>

            <!-- Navigation Links -->
            <div class=" md:flex space-x-8 text-red-600 font-semibold uppercase text-sm ">
                <x-nav-links href="/" >Home</x-nav-links>
                <x-nav-links href="/services" >Services</x-nav-links>
                <x-nav-links href="/drilling-rigs" >Drilling Rigs</x-nav-links>
                <x-nav-links href="/wireline" >Wireline</x-nav-links>
                <x-nav-links href="/pressure-pumping" >Pressure Pumping</x-nav-links>
                <x-nav-links href="/contact" >Contact</x-nav-links>
            </div>
        </div>
    </div>
</nav>


        {{ $slot }}

</body>
</html>
