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
    <div class="row" id="exampleRow">
      <h1 class="col-md-12 col-xl-12 zagolovoc" align="center" id="">
        Наши работы
      </h1>
      <div id="example" class="row col-md-10 text-center">
          @include('inc.examples')
      </div>
    </div>
  </div>
  <script>
    function redirect(id) {
        document.location.href = '/example/'+id;
    }
  </script>

@endsection
