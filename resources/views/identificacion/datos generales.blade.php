<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos Generales</title>
<link rel="stylesheet" href="/css/validarform.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="/js/validarform.js"></script>
</head>
<body>

    <form class="form-group" id="test" action="{{route('guardar_datos')}}" method="POST">
        {!! csrf_field() !!}

        <div class="field-rol">
            <select name="rolid" id="">
                    <option value="">-- selecciona tu rol</option>
                @foreach ($rol as $roles)
                    <option value="{{ $roles['id'] }}">{{ $roles['descrpRol'] }}</option>
                @endforeach
            </select>
            <input type="text" value="{{$docs}}" hidden name="doc">
            <div class="button">
                    <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



 </form>
<script src="{{asset("/js/validarencuesta.js")}}" type="text/javascript"></script>

</body>
</html>