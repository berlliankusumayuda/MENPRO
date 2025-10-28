<div class="container">
    @vite(['resources/css/dashboard.css'])
    <livewire:sidebar />
    <div class="page">
        @if ($activePage === 'hero')
            <livewire:hero wire:key="hero" />
        @elseif ($activePage === 'datawarga')
            <livewire:datawarga wire:key="datawarga" />
        @elseif ($activePage === 'biodata')
            <livewire:biodata wire:key="biodata" />
        @elseif ($activePage === 'grafik')
            <livewire:grafik wire:key="grafik" />
        @elseif ($activePage === 'tablewarga')
            <livewire:tablewarga wire:key="tablewarga" />
        @endif
    </div>
</div>






