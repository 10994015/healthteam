<div id="cms">
    <form action="{{route('logout')}}" method="post">
        @csrf
        {{--Auth::user()->name--}}
        <button type="submit" class="logout btn btn-outline-info logout" style="color:#000">登出</button>
    </form>
    <div class="center">
        <div class="header">
            <h2>111健康體育週 團體衛教講座</h2>
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
                    <button type="button" class="btn btn-danger" id="clearBtn" wire:click="clera">清除</button>
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
            <b>總遊戲次數: {{$gameTotal}} </b>
            <p>總遊戲人數: {{$total}}</p>
            <p class="scoreView" id="score5View" data-bs-toggle="modal" data-bs-target="#scoreModalLabel" wire:click="openScoreModal(5)">非常滿意: {{$score5}}</p>
            <p class="scoreView" id="score4View" data-bs-toggle="modal" data-bs-target="#scoreModalLabel" wire:click="openScoreModal(4)">滿意: {{$score4}}</p>
            <p class="scoreView" id="score3View" data-bs-toggle="modal" data-bs-target="#scoreModalLabel" wire:click="openScoreModal(3)">普通: {{$score3}}</p>
            <p class="scoreView" id="score2View" data-bs-toggle="modal" data-bs-target="#scoreModalLabel" wire:click="openScoreModal(2)">不滿意: {{$score2}}</p>
            <p class="scoreView" id="score1View" data-bs-toggle="modal" data-bs-target="#scoreModalLabel" wire:click="openScoreModal(1)">非常不滿意: {{$score1}}</p>
            <b>平均分數: {{$scoreAvg}}</b>
        </div>
        <div class="bottom">
            <p class="questView" data-bs-toggle="modal" data-bs-target="#questModalLabel" wire:click="openQuestModal('q1')"> 瞭解含糖飲料對身體的負面影響及多喝白開水的益處 : {{$quest1}}</p>
            <p class="questView" data-bs-toggle="modal" data-bs-target="#questModalLabel" wire:click="openQuestModal('q2')"> 飲料紅黃綠燈有助於選擇飲品的判斷 : {{$quest2}}</p>
            <p class="questView" data-bs-toggle="modal" data-bs-target="#questModalLabel" wire:click="openQuestModal('q3')"> 瞭解日常護眼技巧及飲食 : {{$quest3}}</p>
            <p class="questView" data-bs-toggle="modal" data-bs-target="#questModalLabel" wire:click="openQuestModal('q4')"> 瞭解如何照顧傷口，降低感染的發生 : {{$quest4}}</p>
            <p class="questView" data-bs-toggle="modal" data-bs-target="#questModalLabel" wire:click="openQuestModal('q5')"> 瞭解傷口感染出現的症狀(紅腫熱痛) : {{$quest5}}</p>
            <p class="questView" data-bs-toggle="modal" data-bs-target="#questModalLabel" wire:click="openQuestModal('q6')"> 學會執行簡易自我傷口處理 : {{$quest6}}</p>
            <a href="/feedbacks" class="link-info" style="margin-top: 20px;display:block">查看完整詳細資料...</a>
        </div>
        
        <footer>
            <p>中原大學衛保組</p>
        </footer>    
    </div>
    <div class="loading" wire:loading target="openScoreModal"> <img src="/images2/loading.gif" alt=""></div>
    @include('livewire/scoreModal')
    @include('livewire/questModal')
</div>