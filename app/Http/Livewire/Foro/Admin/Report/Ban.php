<?php

namespace App\Http\Livewire\Foro\Admin\Report;

use Livewire\Component;

class Ban extends Component
{
    public $show_publications;
    public $show_comment;
    
    public function mount()
    {
        $this->show_publications=false;
        $this->show_comment=false;
    }
    public function show_public()
    {
        $this->show_publications=true;
    }

    public function show_comment()
    {
        $this->show_comment=true;
    }

    public function cancelarr()
    {
        $this->show_publications=false;
        
    }

    public function render()
    {
        return view('livewire.foro.admin.report.ban')->layout('layouts.admin');
    }
}
