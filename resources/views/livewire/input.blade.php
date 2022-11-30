<div class="form">
    <form action="/add" method="post">
        @csrf
        <input type="text" placeholder="請輸入學號" name="student" min="8" max="8" id="student" required>
        <input type="text" placeholder="請輸入姓名" name="name" required id="name">
        <div class="Satisfaction">
            <p style="text-align:center;font-size:16px;font-weight: 600;">您對本次活動的滿意度為何?</p>
            <select name="score" id="">
                <option value="5">非常滿意</option>
                <option value="4">滿意</option>
                <option value="3">普通</option>
                <option value="2">不滿意</option>
                <option value="1">非常不滿意</option>
            </select>
            <p style="text-align:center;font-size:16px;font-weight: 600;margin-top:10px">您覺得本次活動學習到?(可複選)</p>
            <label for="q1">
                <input type="checkbox" id="q1" name="q1" class="study">瞭解含糖飲料對身體的負面影響及多喝白開水的益處
            </label>
            <label for="q2">
                <input type="checkbox" id="q2" name="q2" class="study">飲料紅黃綠燈有助於選擇飲品的判斷
            </label>
            <label for="q3">
                <input type="checkbox" id="q3" name="q3" class="study">瞭解日常護眼技巧及飲食
            </label>
            <label for="q4">
                <input type="checkbox" id="q4" name="q4" class="study">瞭解如何照顧傷口，降低感染的發生
            </label>
            <label for="q5">
                <input type="checkbox" id="q5" name="q5" class="study">瞭解傷口感染出現的症狀：紅腫熱痛
            </label>
            <label for="q6">
                <input type="checkbox" id="q6" name="q6" class="study">學會執行簡易自我傷口處理
            </label>
            <textarea name="message" id="" placeholder="您對本次活動心得回饋..."></textarea>
        </div>
        <input type="hidden" name="inputData" value="insert">
        <input type="hidden" name="type" wire:model="rand">
        <input type="submit" value="完成" id="finish" disabled>
    </form>   
</div>