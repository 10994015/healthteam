<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
class Input extends Component
{
    public $rand;
    public function mount(Request $req){
        $this->rand = $req->type;   
    }
    public function render()
    {
        return view('livewire.input')->layout('livewire.layouts.input');
    }
}
