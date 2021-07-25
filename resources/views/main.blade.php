@extends('layouts.mainframe')

@section('title','Gas-trek')

@section('content')

    <div class="container-fluid" id="indexList">
        {{--  banner  --}}
        @include('inc.banner')
        {{--  services block  --}}
        @include('inc.services')
        {{--  examples block  --}}
        @include('inc.examplesBlock')
        {{--стена с записями--}}
        @include('inc.whall')
        {{-- реклама гбо --}}
        @include('inc.recomendation')
    </div>
    <script>
        function redirect(id) {
            document.location.href = '/example/'+id;
        }
    </script>
    <script src="js/banner.js"></script>
@endsection
