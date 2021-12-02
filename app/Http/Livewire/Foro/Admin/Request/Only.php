<?php

namespace App\Http\Livewire\Foro\Admin\Request;

use Livewire\Component;


class Only extends Component
{
    public $is_show;

    public function open_modal()
	{
		$this->is_show=true;
        
	}

    public function render()
    {
        return view('livewire.foro.admin.request.only')->layout('layouts.admin');
    }
}
