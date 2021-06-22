@extends('layouts.mainframe')

@section('title','Gas-trek')

@section('content')
    <div class="container-fluid" id="indexList">
        <div id="banner" class="banner">
            <h1 class="bannerh1">Установка ГБО в Тольятти</h1>
            {{-- <h2>ул. Ларина 145/1<br />89278998878</h2> --}}
            <div class="d-flex justify-content-center banner-card">
                <div class="baner-element">
                    <img class="col-12" src="/images/icons/savings_white.svg">
                    <h1>Низкая цена</h1>
                </div>

                <div class="baner-element">
                    <img class="col-12" src="/images/icons/verified_white.svg">
                    <h1>Гарантия</h1>
                </div>

                <div class="baner-element">
                    <img class="col-12" src="/images/icons/thumb_up_alt_white.svg">
                    <h1>Качество</h1>
                </div>
            </div>
        </div>


        {{--  services block  --}}

        <div id="services" align="center" class="d-flex justify-content-center col-12">
            @foreach ($services as $serv)
                <div class="service-card col-3" >
                    <div class="card-content">
                        <span class="material-icons">
                            {{ $serv['icon'] }}
                        </span>
                        <h1>{{ $serv['text'] }}</h1>
                    </div>
                </div>
            @endforeach
        </div>

        {{--  news block  --}}

        <div id="stonk">
            <div class="news-img d-flex justify-content-center">
                <img src="/images/news/brc.jpg">
            </div>
        </div>

        {{--  examples block  --}}

        <div class="d-flex justify-content-center flex-wrap examples">
            <div class="example-title" align="center">
                <h1>Примеры работ</h1>
                <form action="/example" method="post">
                    <input type="Submit" value="Смотреть все >>">
                </form>
            </div>
            <div class="d-flex justify-content-center flex-wrap">
                @isset($examples)
                    @if(count($examples)>3)
                        @for ($i = 0; $i < 3; $i++)
                        <div  onclick="redirect( {{ $examples[$i]->id }} )" class="cards workCards">
                            @isset($examples[$i]->img[0])
                                <img  src="/images/examples/{{ $examples[$i]->img[0] }}" class="card-img-top" alt="Card image cap">
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

        {{-- реклама гбо --}}

        {{-- <div class="advantages">

            @foreach ($advantages as $adv)
            <div class="" align="center ">
                <h3>{{ $adv }}</h3>
            </div>
            @endforeach

        </div> --}}
    </div>
    <script>
        function redirect(id) {
            document.location.href = '/example/'+id;
        }
    </script>
    <script src="js/banner.js"></script>
@endsection
