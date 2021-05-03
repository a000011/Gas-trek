@extends('layouts.mainframe')

@section('title','Gas-trek')

@section('content')
    <div class="container-fluid" id="indexList">
        <div id="banner" class="banner">
            <h1 class="bannerh1">Установка ГБО в Тольятти</h1>
            {{-- <h2>ул. Ларина 145/1<br />89278998878</h2> --}}
            <ul clas="info d-flex" style="margin: 0 auto;">
                <li>
                    <img src="/images/icons/check.png" class="align-middle">
                    <h1 class="d-inline-block py-auto align-middle hList">
                        Низкая цена
                    </h1>
                </li>
                <li>
                    <img src="/images/icons/check.png" class="align-middle">
                    <h1 class="d-inline-block py-auto align-middle hList">
                        Гарантия
                    </h1>
                </li>
                <li>
                    <img src="/images/icons/check.png" class="align-middle">
                    <h1 class="d-inline-block py-auto align-middle hList">
                        Качество
                    </h1>
                </li>
            </ul>
            {{-- <div class="logo"></div> --}}
        </div>

        <div class="row" id="servicesRow">
            <h1 class="col-md-12 col-xl-12 my-3 zagolovoc" align="center" id="servisHeader">
                Услуги по ГБО
            </h1>
            <div id="services" align="center" class="row col-md-10 text-center"></div>
        </div>
        <div class="row">

        </div>
    </div>
    <script src="js/banner.js"></script>
    <script src="js/service.js"></script>
    <script src="js/autosize.js"></script>
@endsection
