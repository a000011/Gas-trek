@extends('layouts.adminFrame')

@section('content')
    @foreach ($examples as $example)
        <div class="example-block">
            <form method="post">

                <table class="col-12">
                    <tr  class="col-6" id="qwert">
                        <td >
                            {{ csrf_field() }}
                            <div class="form-group col-12" style="display: none">
                                <input type="text" name="id" class="form-control" value="{{ $example->id }}" id="exampleName" >
                            </div>

                            <div class="form-group col-12">
                              <label for="exampleName">Название</label>
                              <input type="text" name="car_name" class="form-control" value="{{ $example->car_name }}" id="exampleName" >
                            </div>

                            <div class="form-group col-12">
                              <label for="examplePrice">Name</label>
                              <input type="number" name="price" class="form-control" value="{{ $example->price }}" id="examplePrice" >
                            </div>

                            <button type="submit" name="action" value="Update" class="btn btn-primary">Изменить</button>
                            <button type="submit" name="action" value="Delete" class="btn btn-primary">Удалить</button>
                        </td>
                        <td class="col-6" id="qwert1">
                            @foreach ($example->img as $image)
                                <img class="col-2 my-2" src="../{{ $image }}">
                            @endforeach
                        </td>
                    </tr>
                </table>
              </form>

        </div>
    @endforeach
@endsection
