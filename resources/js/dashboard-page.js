document.addEventListener('livewire:init', () => {
    const lastPage = localStorage.getItem('activePage') || 'hero';
    const component = Livewire.find(
        document.querySelector('[wire\\:id]').getAttribute('wire:id')
    );
    if (component) {
        component.$dispatch('change-page', { page: lastPage });
    }
});
