<div id="cms">
    <a href="/logout.php" class="logout btn btn-info">登出</a>
    <div class="center">
        <div class="header">
            <h2>衛生保健組健康促進活動抽獎系統</h2>
        </div>
        <div class="content">
            <div class="left">
                <select class="form-select" aria-label="Default select example" id="toggleView">
                    <option value="1" selected>All</option>
                </select>
                <div class="list" id="passlist">
                    @foreach($games as $game)
                        <div class="item sample"> {{$game->student}} - {{$game->name}}　{{$game->created_at}}</div>
                    @endforeach
                    {{-- <?php foreach($RS_users as $user){ ?>
                        <div class="item sample"><?php echo $user['student']."-".$user['name']." ".$user['time']; ?> <span style="color:#fff"><?php echo 'score:'.$user['score']; ?></span> </div>
                    <?php } ?> --}}
                </div>
            </div>
            <div class="right">
                <div class="choose">
                    <select class="form-select" id="lotterySelect" aria-label="Default select example">
                        <option selected value="0">抽獎人數</option>
                        <option value="1">1</option>
                        <option value="3">3</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                    </select>
                    <button type="button" class="btn btn-success" id="addSemple">加入樣本</button>
                    <button type="button" class="btn btn-primary" id="lotteryBtn">抽獎</button>
                </div>
                <div class="list" id="winnerList">
                </div>
            </div>
        </div>
        <div class="bottom">
            <p>總人數: </p>
            <b>通過人數:  </b>
            <p class="scoreView" id="score5View">非常滿意:</p>
            <p class="scoreView" id="score4View">滿意:</p>
            <p class="scoreView" id="score3View">普通: </p>
            <p class="scoreView" id="score2View">不滿意:</p>
            <p class="scoreView" id="score1View">非常不滿意: </p>
            <b>平均分數: </b>
        </div>
        <footer>
            <p>中原大學衛保組</p>
        </footer>    
    </div>
    <div class="scoreModal" id="score5">
        <div class="scoreModalback"></div>
        <div class="content">
            <div class="header">非常滿意</div>
        <ul>
        {{-- <?php foreach($score_5 as $item){ ?>
            <li><?php echo $item['student']."-".$item['name']."-score:".$item['score']; ?></li>
        <?php  } ?> --}}
        </ul>
        </div>
    </div>
    <div class="scoreModal" id="score4">
        <div class="scoreModalback"></div>
        <div class="content">
        <div class="header">滿意</div>
        <ul>
        {{-- <?php foreach($score_4 as $item){ ?>
            <li><?php echo $item['student']."-".$item['name']."-score:".$item['score']; ?></li>
        <?php  } ?> --}}
        </ul>
        </div>
    </div>    
    <div class="scoreModal" id="score3">
        <div class="scoreModalback"></div>
        <div class="content">
        <div class="header">普通</div>
        <ul>
        {{-- <?php foreach($score_3 as $item){ ?>
            <li><?php echo $item['student']."-".$item['name']."-score:".$item['score']; ?></li>
        <?php  } ?> --}}
        </ul>
        </div>
    </div>    
    <div class="scoreModal" id="score2">
        <div class="scoreModalback"></div>
        <div class="content">
        <div class="header">不滿意</div>
        <ul>
        {{-- <?php foreach($score_2 as $item){ ?>
            <li><?php echo $item['student']."-".$item['name']."-score:".$item['score']; ?></li>
        <?php  } ?> --}}
        </ul>
        </div>
    </div>    
    <div class="scoreModal" id="score1">
        <div class="scoreModalback"></div>
        <div class="content">
        <div class="header">非常不滿意</div>
        <ul>
        {{-- <?php foreach($score_1 as $item){ ?>
            <li><?php echo $item['student']."-".$item['name']."-score:".$item['score']; ?></li>
        <?php  } ?> --}}
        </ul>
        </div>
    </div>    

</div>