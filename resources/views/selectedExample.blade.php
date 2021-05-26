@extends('layouts.mainframe')

@section('title','Gas-trek')

@section('content')
    <style>

        #images{
        }
        img{
            margin-left: 0px !important;
            padding: 0 !important;
        }
        h1, h2{
            color: var(--main-font-color);
        }
        *:not(.call){
            color: white;
        }
        span{
            color: #007bff ;
        }
    </style>
    <div class="row py-3">
        <div id="images" class="col-md-6">
            <img id="mainImg" class="col-12" src="{{ $data->img[0] }}">
            @foreach ($data->img as $image)
                <img class="col-2 my-2" onmouseover="changeImg(this);" src="../{{ $image }}">
            @endforeach
        </div>
        <div class="col-md-6">
            <h1 class="my-5">Установка ГБО на {{ $data->car_name }}</h1>
            <h2 class="my-5">Клиент заплатил {{ $data->price }} руб.</h2>
        </div>
    </div>
    <div class="container" align="center">
        <h2 class="d-inline-block">Следите за нами:</h2>
        <a class="" href="https://vk.com/gbotlt">
            <img class="col-1" src="/images/icons/vk.png">
        </a>
        <a class="" href="https://www.instagram.com/gas__trek/?igshid=sp7b5e35wrdi">
            <img class="col-1" src="/images/icons/inst.png">
        </a>
    </div>
    <script>
        function changeImg(img){
            document.getElementById('mainImg').src = img.src;
        }
    </script>
@endsection
