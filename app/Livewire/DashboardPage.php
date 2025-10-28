<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class DashboardPage extends Component
{
    public $activePage = 'hero';

    public function mount()
    {
        // Saat pertama kali di-load, ambil dari session
        $this->activePage = Session::get('activePage', 'hero');
    }

    #[On('change-page')]
    public function setPage($page)
    {
        $this->activePage = $page;
        Session::put('activePage', $page); // simpan ke session
    }

    public function render()
    {
        return view('livewire.dashboard-page');
    }
}
