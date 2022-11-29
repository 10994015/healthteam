<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use App\Models\Giveback;
use Livewire\Component;

class Feedback extends Component
{
    use WithPagination;
    public function render()
    {
        $givebacks = Giveback::paginate(50);
        return view('livewire.feedback', ['givebacks'=>$givebacks])->layout('livewire.layouts.cms');
    }
}
