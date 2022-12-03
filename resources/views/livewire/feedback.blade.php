<div id="feedback">
    @php
        $scoreArr = ['1'=>'非常不滿意', '2'=>'不滿意', '3'=>'普通', '4'=>'滿意', '5'=>'非常滿意'];
    @endphp
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">學號</th>
            <th scope="col">姓名</th>
            <th scope="col">滿意度</th>
            <th scope="col">本次活動學習到...</th>
            <th scope="col">心得</th>
            <th scope="col">時間</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($givebacks as $giveback)
            <tr>
                <th scope="row">{{$giveback->id}}</th>
                <td>{{$giveback->student}}</td>
                <td>{{$giveback->name}}</td>
                <td>{{$scoreArr["$giveback->score"]}}</td>
                <td>
                    @if($giveback->q1 == 1)
                        <p>瞭解含糖飲料對身體的負面影響及多喝白開水的益處</p>
                    @endif
                    @if($giveback->q2 == 1)
                        <p>飲料紅黃綠燈有助於選擇飲品的判斷</p>
                    @endif
                    @if($giveback->q3 == 1)
                        <p>瞭解日常護眼技巧及飲食</p>
                    @endif
                    @if($giveback->q4 == 1)
                        <p>瞭解如何照顧傷口，降低感染的發生</p>
                    @endif
                    @if($giveback->q5 == 1)
                        <p>瞭解傷口感染出現的症狀：紅腫熱痛</p>
                    @endif
                    @if($giveback->q6 == 1)
                        <p>學會執行簡易自我傷口處理</p>
                    @endif
                    @if($giveback->q7 == 1)
                        <p>我願意將今日所學的健康知識傳遞給身邊的朋友與同學</p>
                    @endif
                    @if($giveback->q8 == 1)
                        <p>我會想主動學習更多有關護眼、減糖及傷害預防與處理的知識</p>
                    @endif
                </td>
                <td>{{ $giveback->message }}</td>
                <td>{{$giveback->created_at}}</td>
            </tr>
        @endforeach
          
        </tbody>
      </table>
      {{ $givebacks->links() }}

      <a href="/cms" class="link-secondary gohome" >回到後臺首頁</a>
</div>