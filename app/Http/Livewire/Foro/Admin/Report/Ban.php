<?php

namespace App\Http\Livewire\Foro\Admin\Report;

use Livewire\Component;

class Ban extends Component
{
    public function render()
    {
        return view('livewire.foro.admin.report.ban')->layout('layouts.admin');
    }
}
