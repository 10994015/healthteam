<div id="cms">
    <a href="/logout.php" class="logout btn btn-info">登出</a>
    <div class="center">
        <div class="header">
            <h2>衛生保健組健康促進活動抽獎系統</h2>
        </div>
        <div class="content">
            <div class="left">
                <select class="form-select" aria-label="Default select example" id="toggleView" wire:model="selectSession" wire:change="changeSelect">
                    @foreach($options as $option)
                    <option value="{{$option->id}}">{{$option->title}}</option>
                    @endforeach
                </select>
                <div class="list" id="passlist">
                    @foreach($studentList as $item)
                        <div class="item sample"> {{$item->student}} - {{$item->name}}　{{$item->created_at}}</div>
                    @endforeach
                </div>
            </div>
            <div class="right">
                <div class="choose">
                    <select class="form-select" id="lotterySelect" aria-label="Default select example" wire:model="peopleNum" >
                        <option selected value="0">抽獎人數</option>
                        <option value="1">1</option>
                        <option value="3">3</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                    </select>
                    <button type="button" class="btn btn-success" id="addSemple" wire:click="addSample">加入樣本</button>
                    <button type="button" class="btn btn-primary" id="lotteryBtn" wire:click="lottery">抽獎</button>
                </div>
                <div class="list" id="winnerList">
                    <div class="loading" wire:loading wire:target="lottery"><img src="/images2/loading.gif" alt=""></div>
                    @foreach($winner as $item)
                        <div class="item"><b>{{$item['student']}} - {{$item['name']}}</b></div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="bottom">
            <p>總人數: {{$total}}</p>
            <b>通過人數: {{$passTotal}} </b>
            <p class="scoreView" id="score5View" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="openScoreModal(5)">非常滿意: {{$score5}}</p>
            <p class="scoreView" id="score4View" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="openScoreModal(4)">滿意: {{$score4}}</p>
            <p class="scoreView" id="score3View" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="openScoreModal(3)">普通: {{$score3}}</p>
            <p class="scoreView" id="score2View" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="openScoreModal(2)">不滿意: {{$score2}}</p>
            <p class="scoreView" id="score1View" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click="openScoreModal(1)">非常不滿意: {{$score1}}</p>
            <b>平均分數: {{$scoreAvg}}</b>
        </div>
        <footer>
            <p>中原大學衛保組</p>
        </footer>    
    </div>
    <div class="loading" wire:loading target="openScoreModal"> <img src="/images2/loading.gif" alt=""></div>
    @include('livewire/scoreModal')
</div>