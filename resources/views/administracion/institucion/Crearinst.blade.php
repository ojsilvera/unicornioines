<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Encuesta</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/estilo.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        @include('theme.navAdmin')
        <h1 class="titulo esp">Crear Institucion</h1>
    </header>

    <form action="{{route('guardar.inst')}}" method="POST">
            @csrf

        <div class="container anch">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>                                        
                @endforeach  
            @endif

            <div class="form-group">
                <label for="nombreInstitucion">Institucion:</label>
                <input type="text" class="form-control" id="nombreInstitucion" aria-describedby="nombreInstitucion" name="nombreInstitucion" required/>
            </div>
            <div class="form-group">
                <label for="poblacionTotal">Poblacion Total:</label>
                <input type="text" class="form-control" id="poblacionTotal" aria-describedby="poblacionTotal" name="poblacionTotal" required/>
            </div>
            <div class="form-group">
                <label for="muestra">Poblacion Muestra:</label>
                <input type="text" class="form-control" id="muestra" aria-describedby="muestra" name="muestra" required/>
            </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" name="submit" class="btn btn-primary"  onclick="location='{{route('ver.inst')}}'" > Volver </button>

        </div>

    </form>

</body>

</html>
