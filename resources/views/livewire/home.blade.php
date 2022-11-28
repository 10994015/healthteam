<div>
    <form method="post" action="/start"> 
        @csrf
        <img src="/images2/home.jpg" alt="">
        <!-- <a href="./start.php">開始遊戲</a> -->
        <input type="hidden" name="randomNum" value="{{$randNum}}">
        <div class="startBtn">
            <input type="submit" class="start" value="">
            <a href="javascript:;" class="prehome">開始遊戲</a>
        </div>
    </form>
</div>
