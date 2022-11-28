<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Http\Request;
class Start extends Component
{
    public $rand;
    public function mount(Request $req){
        $this->rand = $req->randomNum;
    }
    public function render()
    {
        return view('livewire.start')->layout('livewire.layouts.game');
    }
}
