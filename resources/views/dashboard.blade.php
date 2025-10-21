<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    @vite(['resources/css/sidebar.css'])
    @livewireStyles
</head>
<body>

    <div class="container">
        <livewire:sidebar/>
        <livewire:hero />
        <livewire:datawarga />
        <livewire:biodata />
        <livewire:grafik />
        <livewire:tablewarga />
    </div>

    @livewireScripts
</body>
</html>
