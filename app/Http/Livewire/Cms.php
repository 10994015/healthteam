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
    public $gameTotal;
    public $passTotal;
    public $score5;
    public $score4;
    public $score3;
    public $score2;
    public $score1;
    public $scoreAvg;
    public $scorePeopleArr = [];
    public $quest1;
    public $quest2;
    public $quest3;
    public $quest4;
    public $quest5;
    public $quest6;
    public $questArr = [];
    
    public function changeSelect(){
        if($this->selectSession != -1){
            $option = Option::where('id', $this->selectSession)->first();
            $this->studentList = Game::whereBetween('created_at', [$option->start_time, $option->end_time])->get();
            // log::info($this->studentList);
        }
    }
    public function addSample(){
        $option = Option::where('id', $this->selectSession)->first();
        $this->studentList = Game::whereBetween('created_at', [$option->start_time, $option->end_time])->get()->toArray();
        if(count($this->studentList) < $this->peopleNum){
            $this->dispatchBrowserEvent('totalAlert');
            return;
        }
        $this->sampleArr = [];
        $this->sampleArr = $this->studentList;
        $this->dispatchBrowserEvent('addSampleSuccess');
        
    }
    public function lottery(){
        // log::info($this->sampleArr);
        if($this->peopleNum == 0){
            $this->dispatchBrowserEvent('zeroAlert');
            return;
        }
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
    public function clera(){
        $this->winner = [];
        $this->sampleArr = [];
    }
    public function openScoreModal($s){
        $this->scorePeopleArr = Giveback::where('score', $s)->get();
    }
    public function openQuestModal($q){
        $this->questArr = Giveback::where("$q", 1)->get();
    }
    public function render()
    {
        $this->total = Game::all()->count();
        $this->gameTotal = Giveback::all()->count();
        $this->passTotal = Game::where([['type1',1], ['type2',2], ['type3',3], ['type4',4]])->count();
        $this->score5 = Giveback::where('score', 5)->count();
        $this->score4 = Giveback::where('score', 4)->count();
        $this->score3 = Giveback::where('score', 3)->count();
        $this->score2 = Giveback::where('score', 2)->count();
        $this->score1 = Giveback::where('score', 1)->count();
        $this->scoreAvg = Giveback::all()->avg('score');
        $this->quest1 = Giveback::where('q1', 1)->count();
        $this->quest2 = Giveback::where('q2', 1)->count();
        $this->quest3 = Giveback::where('q3', 1)->count();
        $this->quest4 = Giveback::where('q4', 1)->count();
        $this->quest5 = Giveback::where('q5', 1)->count();
        $this->quest6 = Giveback::where('q6', 1)->count();
        $option = Option::where('id', $this->selectSession)->first();
        $this->studentList = Game::whereBetween('created_at', [$option->start_time, $option->end_time])->get();
        $options = Option::all();
        $this->options = $options;
        $games = Game::where([['type1', '1'],['type2', '2'],['type3', '3]', ['type4', '4']]])->get();
        return view('livewire.cms', ['games'=>$games])->layout('livewire.layouts.cms');
    }
}
