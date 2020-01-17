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
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-group col-md-8 border-0" readonly value="{{$cab}}">
                                    </div><hr>
                                    <label for="">Total de encuestas realizadas por el genero femenino</label>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-group col-md-8 border-0" readonly value="{{$fem}}">
                                    </div><hr>
                                    <label for="">Total de encuestas realizadas por el genero masculino</label>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-group col-md-10 border-0" readonly value="{{$mas}}">
                                    </div><hr>
                                    <label for="">Total de encuestas realizadas por el genero indefinido</label>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-group col-md-10 border-0" readonly value="{{$otro}}">
                                    </div><hr>
                                    <label for="">Total de encuestas realizadas por el rol de estudiantes</label>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-group col-md-10 border-0" readonly value="{{$est}}">
                                    </div><hr>
                                    <label for="">Total de encuestas realizadas por el rol de docente</label>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-group col-md-10 border-0" readonly value="{{$doc}}">
                                    </div><hr>
                                    <label for="">Total de encuestas realizadas por el rol de administrativo</label>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-group col-md-8 border-0" readonly value="{{$adminis}}">
                                    </div><hr>
                                    <label for="">Total de respuestas existe y se implementa</label>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-group col-md-10 border-0" readonly value="{{$impl}}">
                                    </div><hr>
                                    <label for="">Total de respuestas existe y no se implementa</label>
                                    <div class="form-group col-md-2">
                                        <input type="text" class="form-group col-md-10 border-0" readonly value="{{$noimpl}}">
                                    </div><hr>
                                    <label for="">Total de respuestas no existe</label>
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-group col-md-8 border-0" readonly value="{{$noexis}}">
                                    </div><hr>
                                    <label for="">Total de respuestas no sabe</label>
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-group col-md-8 border-0" readonly value="{{$nosabe}}">
                                    </div><hr>
                                    <label for="">Total de respuestas siempre</label>
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-group col-md-8 border-0" readonly value="{{$siempre}}">
                                    </div><hr>
                                    <label for="">Total de respuestas algunas veces</label>
                                    <div class="form-group col-md-4">
                                        <input type="text" class="form-group col-md-8 border-0" readonly value="{{$algun}}">
                                    </div><hr>
                                    <label for="">Total de respuestas nunca</label>
                                    <div class="form-group col-md-5">
                                        <input type="text" class="form-group col-md-8 border-0" readonly value="{{$nunca}}">
                                    </div><hr>
                                    <label for="">Total de respuestas no</label>
                                    <div class="form-group col-md-5">
                                        <input type="text" class="form-group col-md-8 border-0" readonly value="{{$no}}">
                                    </div><hr>
                                    <label for="">Total de respuestas si</label>
                                    <div class="form-group col-md-5">
                                        <input type="text" class="form-group col-md-8 border-0" readonly value="{{$si}}">
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


