<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $randNum;
    public function mount(){
        $this->randNum = rand(1,4);
    }
    public function render()
    {
        
        return view('livewire.home')->layout('livewire.layouts.base');
    }
}
