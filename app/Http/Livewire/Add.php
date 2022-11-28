<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Illuminate\Support\Facades\Log;
use App\Models\Giveback;
use Livewire\Component;
use Illuminate\Http\Request;
class Add extends Component
{
    public function render(Request $req)
    {
        $giveback = new Giveback();
        $giveback->student = $req->student;
        $giveback->score = $req->score;
        $giveback->q1 =  (!isset($req->q1)) ? '0' : '1';
        $giveback->q2 =  (!isset($req->q2)) ? '0' : '1';
        $giveback->q3 =  (!isset($req->q3)) ? '0' : '1';
        $giveback->q4 =  (!isset($req->q4)) ? '0' : '1';
        $giveback->q5 =  (!isset($req->q5)) ? '0' : '1';
        $giveback->q6 =  (!isset($req->q6)) ? '0' : '1';
        $giveback->message = $req->message;
        $giveback->save();

        $total = Game::where('student', $req->student)->get();

        if(count($total) < 1){
            $game = new Game();
            $game->name = $req->name;
            $game->student = $req->student;
            if($req->type == 1){
                $game->type1 = $req->type;
            }elseif($req->type == 2){
                $game->type2 = $req->type;
            }elseif($req->type == 3){
                $game->type3 = $req->type;
            }elseif($req->type == 4){
                $game->type4 = $req->type;
            }
            $game->save();
        }else{
            $game = Game::where('student', $req->student)->first();
            if($req->type == 1){
                $game->type1 = $req->type;
            }elseif($req->type == 2){
                $game->type2 = $req->type;
            }elseif($req->type == 3){
                $game->type3 = $req->type;
            }elseif($req->type == 4){
                $game->type4 = $req->type;
            }
            $game->save();
        }

        return view('livewire.add')->layout('livewire.layouts.base');
    }
}
