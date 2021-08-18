@extends('layouts.mainframe')

@section('title','Gas-trek')

@section('content')

    <div class="row py-5" >
        @include('inc.examples')
    </div>
    <script>
        function redirect(id) {
            document.location.href = '/example/'+id;
        }
    </script>
@endsection
