<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
        // Nah ini dia variabelnya
    public $count = 0;

    // Fungsi buat nambah angka
    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        if ($this->count > 0) {
            $this->count--;
        }
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
