<center>
    @foreach($records as $record)
        <div class="record">
            @if($record->text != '')
                <h3 class="whall_text">{{$record->text}}</h3>
            @endif
            <img class="whall_img" src="./{{$record->img_src}}">
        </div>
    @endforeach
</center>
