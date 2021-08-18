@extends('layouts.mainframe')

@section('title','Gas-trek')

@section('content')
    @include('inc.map')
    <div id="carouselExampleControls" class="carousel slide h-80 mx-auto mb-5 col-10" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" align="center">
            <img class="d-block w-100 caruselImg" align="center" src="/images/garage/2.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 caruselImg" src="/images/garage/1.jpg" alt="Second slide">
          </div>
        </div>
      </div>
@endsection
