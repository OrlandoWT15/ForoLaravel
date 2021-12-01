<?php

namespace App\Http\Livewire\Foro\Admin\Request;

use Livewire\Component;

class Only extends Component
{
    public function render()
    {
        return view('livewire.foro.admin.request.only')->layout('layouts.admin');
    }
}
