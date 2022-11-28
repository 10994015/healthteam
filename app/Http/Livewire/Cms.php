<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Livewire\Component;

class Cms extends Component
{
    public function render()
    {
        $games = Game::where([['type1', '1'],['type2', '2'],['type3', '3]', ['type4', '4']]])->get();
        return view('livewire.cms', ['games'=>$games])->layout('livewire.layouts.cms');
    }
}
