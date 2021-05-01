@extends('layouts.mainframe')

@section('title','Gas-trek')

@section('content')
<div class="container-fluid" id="indexList">
    <div id="banner" class="banner">
      <h1>Установка ГБО в Тольятти</h1>
      <h2>ул. Ларина 145/1<br />89278998878</h2>
      <div class="logo"></div>
    </div>

    <div class="row" id="servicesRow">
      <h1 class="col-md-12 col-xl-12 zagolovoc" align="center" id="servisHeader">
        Услуги по ГБО
      </h1>
      <div id="services" align="center" class="row col-md-10 text-center"></div>
    </div>

    <!-- <center>
          <h5 style="background-color: rgba(255, 0, 0, 0.576); margin-bottom: 20px;" id="garant" class="col-12">Гарантия 3 года на новое оборудование 4-го поколения, 1 год на новое оборудование 2-го поколения, 1 месяц на ремонт</h1>
        </center> -->

    <!-- <h1 class="col-md-12 col-xl-12" align="center" id="zagolovoc">ЦЕНА НА ГБО С УСТАНОВКОЙ И УСЛУГИ</h1>
        <div id="generic-price" align="center">
          <div class="row col-md-9 prices" >
            <img src="img/generation/4.jpg">
            <h5> Оборудование и установка ГБО 4 поколения с гарантией 3 года от XXXXXXX руб.</h5>
          </div>
          <div class="row col-md-9 prices" >
            <img src="img/generation/2.png">
            <h5> Оборудование и установка ГБО 2 поколения с гарантией 3 года от XXXXXXX руб.</h5>
          </div>
        </div> -->
    <div class="row" id="exampleRow">
      <h1 class="col-md-12 col-xl-12 zagolovoc" align="center" id="">
        Наши работы
      </h1>
      <div id="example" class="row col-md-10 text-center"></div>
    </div>
  </div>

@endsection
