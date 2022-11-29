<?php

namespace App\Http\Livewire;

use App\Models\No;
use Livewire\Component;

class Finish extends Component
{
   
    public function render()
    {
        $no = No::where('id', 1)->first();
        $no->count = $no->count + 1;
        $no->save();
        return view('livewire.finish', ['count'=>$no->count])->layout('livewire.layouts.finish');
    }
}
