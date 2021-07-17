<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>админ-панель</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        *{
            color: white;
        }
    </style>
</head>

<body class="bg-dark">
    @include('inc.admin_nav')
    <h1 align="center">Панель администратора</h1>
    <center>
        <h3 style="background-color:rgb(143, 14, 14);">
            @if (isset($errors))
                @foreach ( $errors->messages() as $key => $messages)
                        @foreach ($translate as $trkey => $tr)
                            @if ($trkey == $key)
                                {{ $tr }}
                            @endif
                        @endforeach
                        :
                        @foreach ($messages as $message)
                            {{$message}}<br>
                        @endforeach
                @endforeach
            @endif
        </h3>
    </center>
    <center>
        <form method="post" action="" enctype="multipart/form-data" class="col-4 ">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Название машины</label>
                <input type="text" name="car_name" class="form-control" id="name" placeholder="Название машины">
            </div>

            <div class="form-group">
                <label for="price">Цена установки</label>
                <input type="number" name="price" class="form-control" id="price" placeholder="Цена установки">
            </div>

            <div class="form-group">
                <label for="file">Загрузите фотографии  </label>
                <input type="file" name="photos[]" class="form-control-file" multiple id="file">
            </div>

            <button type="submit" class="btn btn-primary">Добавить работу</button>
        </form>
    </center>
</body>
</html>


