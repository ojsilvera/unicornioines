<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Encuesta</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        @include('theme.navAdmin')
        <h1 class="titulo esp">Listado Encuesta</h1>
    </header>

    <div class="container ancho">

        <div class="row">
            <div class="col-lg-12">
                <div class="box box-primary">

                <form class="form-inline" action="{{route('filtrar')}}" method="GET">
                                @csrf
                                <div class="form-group">
                                  <input type="email" class="form-control" name="sexo" placeholder="filtrar por sexo">
                                </div>
                                <div class="col-lg-1"></div>
                                <div class="form-group">
                                  <input type="password" class="form-control" name="edad" placeholder="filtrar por edad">
                                </div>

                                <div class="col-lg-1"></div>
                                <div class="form-group">
                                  <input type="password" class="form-control" name="rol" placeholder="filtrar por rol">
                                </div>
                                <div class="form-group col-2">
                                    <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                                </div>
                              </form><hr>

                              <form class="form-inline" action="">
                                  <div class="form-group col-6">
                                        <label for="">Total de encuestas realizadas</label>
                                        <input type="text" readonly value="{{$cab}}">
                                  </div>
                                  <div class="col-lg-12"></div>
                                  <div class="form-group">
                                        <label for="">Total de encuestas realizadas por el genero femenino</label>
                                        <input type="text" readonly value="{{$fem}}">
                                  </div>
                                  <div class="form-group">
                                        <label for="">Total de encuestas realizadas por el genero masculino</label>
                                        <input type="text" readonly value="{{$mas}}">
                                  </div>
                                  <div class="form-group">
                                        <label for="">Total de encuestas realizadas por el genero indefinido</label>
                                        <input type="text" readonly value="{{$otro}}">
                                  </div>
                              </form>
                     {{-- <button class="btn btn-info" onclick="location='{{route('crear.genero')}}'">Crear</button>  --}}
                </div>
            </div>
        </div>
        <button type="button" name="submit" class="btn btn-info bot"  onclick="location='{{route('admin')}}'" > Volver </button>
    </div>



</body>

</html>

