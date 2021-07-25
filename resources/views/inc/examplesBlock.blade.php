<div class="d-flex justify-content-center flex-wrap examples">
    <div class="example-title" align="center">
        <h1>Примеры работ</h1>
        <form action="/example" method="get">
            <input type="Submit" value="Смотреть все >>">
        </form>
    </div>
    <div class="d-flex justify-content-center flex-wrap">
        @isset($examples)
            @if(count($examples)>2)
                @for ($i = 0; $i < 2; $i++)
                    <div  onclick="redirect( {{ $examples[$i]->id }} )" class="cards workCards">
                        @isset($examples[$i]->img[0])
                            <img  src="../{{ $examples[$i]->img[0] }}" class="card-img-top" alt="Card image cap">
                        @endisset
                        <div  class="card-body bg-dark" id="workEx">
                            <p class="card-text">
                                {{ $examples[$i]->car_name }}
                            </p>
                        </div>
                    </div>
                @endfor
            @else

                @foreach ($examples as $ex)
                    <div  onclick="redirect( {{ $ex->id }} )" class="cards workCards">
                        @isset($ex->img[0])
                            <img  src="../{{ $ex->img[0] }}" class="card-img-top" alt="Card image cap">
                        @endisset
                        <div  class="card-body " id="workEx">
                            <p class="card-text">
                                {{ $ex->car_name }}
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif
        @endisset
    </div>
</div>
