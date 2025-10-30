
        <div class="sidebar">
            <div class="sidebar_header">
                <input type="checkbox" id="checkbox" checked >
                <label for="checkbox" class="toggle">
                    <div class="bar bar--top"></div>
                    <div class="bar bar--middle"></div>
                    <div class="bar bar--bottom"></div>
                </label>
                <h1>Gergaji</h1>
            </div>
            <div class="sidebar-content">
                <div class="sidebar-item">
                    <a href="#" wire:click="$dispatch('change-page', { page: 'hero' })">Beranda</a>
                </div>
                <div class="sidebar-item">
                    <a href="#" wire:click="$dispatch('change-page', { page: 'datawarga' })">Data Warga</a>
                </div>
                <div class="sidebar-item">
                    <a href="#" wire:click="$dispatch('change-page', { page: 'biodata' })">Biodata</a>
                </div>
                <div class="sidebar-item">
                    <a href="#" wire:click="$dispatch('change-page', { page: 'tablewarga' })">Tabel Warga</a>
                </div>
                <div class="sidebar-item">
                    <a href="#" wire:click="$dispatch('change-page', { page: 'grafik' })">Grafik</a>
                </div>
            </div>
        </div>

