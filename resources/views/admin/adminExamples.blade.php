@extends('layouts.adminFrame')

@section('content')
    @foreach ($examples as $example)
        <div class="example-block">
            <form method="post">
                {{ csrf_field() }}
                <div class="form-group col-6" style="display: none">
                    <input type="text" name="id" class="form-control" value="{{ $example->id }}" id="exampleName" >
                </div>

                <div class="form-group col-6">
                  <label for="exampleName">Название</label>
                  <input type="text" name="car_name" class="form-control" value="{{ $example->car_name }}" id="exampleName" >
                </div>

                <div class="form-group col-6">
                  <label for="examplePrice">Name</label>
                  <input type="number" name="price" class="form-control" value="{{ $example->price }}" id="examplePrice" >
                </div>

                <button type="submit" name="action" value="Update" class="btn btn-primary">Изменить</button>
                <button type="submit" name="action" value="Delete" class="btn btn-primary">Удалить</button>
              </form>
        </div>
    @endforeach
@endsection
