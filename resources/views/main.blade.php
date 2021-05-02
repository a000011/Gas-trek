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
      <h1 class="col-md-12 col-xl-12 my-3 zagolovoc" align="center" id="servisHeader">
        Услуги по ГБО
      </h1>
      <div id="services" align="center" class="row col-md-10 text-center"></div>
    </div>
    <div class="row" id="exampleRow">

    </div>
  </div>


    <script src="js/banner.js"></script>
    <script src="js/service.js"></script>
    <script src="js/autosize.js"></script>
@endsection
