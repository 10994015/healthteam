<div class="modal fade modal-dialog-scrollable" id="scoreModalLabel" tabindex="-1" aria-labelledby="scoreModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">查看結果</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          @foreach ($scorePeopleArr as $item)
              <li> {{$item->student}} {{$item->name}} - score:{{$item->score}}　( {{$item->created_at}} ) </li>
          @endforeach
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>

    <style>
        .btn{
            color:#000;
        }
    </style>
  </div>