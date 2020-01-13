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
        <h1 class="titulo esp">Reporte de encuesta</h1>
    </header>


    <div class="container">

            <div id="login-row" class="row justify-content-center align-items-center">

                <div id="login-column" class="col-md-6">

                    <div id="login-box" class="col-md-12">

                            <form class="form-inline" action="">
                                    <label for="">Total de encuestas realizadas</label>
                                    <div class="col-lg-12"></div>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-group" readonly value="{{$cab}}">
                                    </div>
                                    <label for="">Total de encuestas realizadas por el genero femenino</label>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-group" readonly value="{{$fem}}">
                                    </div>
                                    <label for="">Total de encuestas realizadas por el genero masculino</label>
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-group" readonly value="{{$mas}}">
                                    </div>
                                    <label for="">Total de encuestas realizadas por el genero indefinido</label>
                                    <div class="form-group col-lg-12">
                                        <input type="text" readonly value="{{$otro}}">
                                    </div><hr>
                                    <label for="">Total de encuestas realizadas por el rol de estudiantes</label>
                                    <div class="form-group col-lg-12">
                                        <input type="text" readonly value="{{$est}}">
                                    </div><hr>
                                    <label for="">Total de encuestas realizadas por el rol de docente</label>
                                    <div class="form-group col-lg-12">
                                        <input type="text" readonly value="{{$doc}}">
                                    </div><hr>
                                    <label for="">Total de encuestas realizadas por el rol de administrativo</label>
                                    <div class="form-group col-lg-12">
                                        <input type="text" readonly value="{{$adminis}}">
                                    </div><hr>
                                    <button type="button" name="submit" class=" text-center col-lg-12 btn btn-info btn-md"  onclick="location='{{route('admin')}}'" > Volver </button>
                                    
                                   
                                </form>

                                             {{-- <button class="btn btn-info" onclick="location='{{route('crear.genero')}}'">Crear</button>  --}}
                            </div>
                        </div>


                </div>

         </div>

    </div>

</div>
    



</body>

</html>


