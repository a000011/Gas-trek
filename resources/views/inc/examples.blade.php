@isset($examples)
    @foreach ($examples as $ex)
        <div style="cursor: pointer;" onclick="redirect( {{ $ex->id }} )" class="col-xl-4 col-12 cards workCards">
            @isset($ex->img[0])
                <img  src="/images/examples/{{ $ex->img[0] }}" class="card-img-top" alt="Card image cap">
            @endisset
            <div  class="card-body " id="workEx">
                <p class="card-text">
                    {{ $ex->car_name }}
                </p>
            </div>
        </div>
    @endforeach
@endisset
