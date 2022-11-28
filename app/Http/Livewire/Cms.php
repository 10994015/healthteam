<?php

namespace App\Http\Livewire;

use App\Models\Game;
use App\Models\Giveback;
use App\Models\Option;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
class Cms extends Component
{
    public $options = [];
    public $studentList = [];
    public $selectSession = 1;
    public $peopleNum = 0;
    public $sampleArr = [];
    public $winner = [];
    public $total;
    public $passTotal;
    public $score5;
    public $score4;
    public $score3;
    public $score2;
    public $score1;
    public $scoreAvg;
    public $scorePeopleArr = [];
    public function changeSelect(){
        if($this->selectSession != -1){
            $option = Option::where('id', $this->selectSession)->first();
            $this->studentList = Game::whereBetween('created_at', [$option->start_time, $option->end_time])->get();
            // log::info($this->studentList);
        }
    }
    public function addSample(){
        $this->sampleArr = [];
        $option = Option::where('id', $this->selectSession)->first();
        $this->studentList = Game::whereBetween('created_at', [$option->start_time, $option->end_time])->get()->toArray();
        $this->sampleArr = $this->studentList;
        
    }
    public function lottery(){
        // log::info($this->sampleArr);
        if($this->peopleNum > count($this->sampleArr)){
            $this->dispatchBrowserEvent('sampleAlert');
            return;
        }
        for($n=0;$n<$this->peopleNum;$n++){
            $rand = rand(0, (count($this->sampleArr)-1));
            // log::info($this->sampleArr[$rand]);
            array_push($this->winner, $this->sampleArr[$rand]);
            array_splice($this->sampleArr, $rand, 1);
            log::info($this->sampleArr);
            log::info($this->winner);
        }
    }
    public function openScoreModal($s){
        $this->scorePeopleArr = Giveback::where('score', $s)->get();
    }
    public function render()
    {
        $this->total = Game::all()->count();
        $this->passTotal = Game::where([['type1',1], ['type2',2], ['type3',3], ['type4',4]])->count();
        $this->score5 = Giveback::where('score', 5)->count();
        $this->score4 = Giveback::where('score', 4)->count();
        $this->score3 = Giveback::where('score', 3)->count();
        $this->score2 = Giveback::where('score', 2)->count();
        $this->score1 = Giveback::where('score', 1)->count();
        $this->scoreAvg = Giveback::all()->avg('score');
        $option = Option::where('id', $this->selectSession)->first();
        $this->studentList = Game::whereBetween('created_at', [$option->start_time, $option->end_time])->get();
        $options = Option::all();
        $this->options = $options;
        $games = Game::where([['type1', '1'],['type2', '2'],['type3', '3]', ['type4', '4']]])->get();
        return view('livewire.cms', ['games'=>$games])->layout('livewire.layouts.cms');
    }
}
