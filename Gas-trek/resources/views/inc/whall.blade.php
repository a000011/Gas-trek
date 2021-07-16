<div class="d-flex justify-content-center flex-wrap">
    @foreach($records as $record)
        <h2 class="whall_text">{{$record->text}}</h2>
        <img class="whall_img" src="./{{$record->img_src}}">
    @endforeach
</div>
