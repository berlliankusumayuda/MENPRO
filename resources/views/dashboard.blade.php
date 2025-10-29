<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    @vite(['resources/css/sidebar.css'])
    @vite(['resources/css/hero.css'])
    @vite(['resources/css/datawarga.css'])
    @vite(['resources/css/biodata.css'])
    @vite(['resources/css/tablewarga.css'])
    @vite(['resources/css/grafik.css'])
    @vite(['resources/css/dashboard.css'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
</head>
<body>
    <livewire:dashboard-page/>
    @livewireScripts
    @vite(['resources/js/dashboard.js'])
    @vite(['resources/js/dashboard-page.js'])
    @vite(['resources/js/sidebar.js'])
    @vite(['resources/js/tabelwarga.js'])
    @vite(['resources/js/grafik.js'])
    @vite(['resources/js/biodata.js'])
</body>
</html>

