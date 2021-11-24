<?php

namespace App\Http\Livewire\Foro;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.foro.index')
        ->layout('layouts.app');
    }
}
