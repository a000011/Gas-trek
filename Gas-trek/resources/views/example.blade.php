@extends('layouts.mainframe')

@section('title','Gas-trek')

@section('content')

    <div class="row py-5" style="examplesCards d-flex justify-content-center flex-wrap">
        @include('inc.examples')
    </div>
    <script>
        function redirect(id) {
            document.location.href = '/example/'+id;
        }
    </script>
@endsection
