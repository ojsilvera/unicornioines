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
        <h1 class="titulo esp">Listado de Genero</h1>
    </header>

    <div class="container ancho">

        <div class="row">
            <div class="col-lg-12">
                <div class="box box-primary">
                        <div class="box-tools pull-right col-lg-3" style="float:right">
                            <a href="{{route('crear.genero')}}" class="btn btn-block btn-info btn-sm">
                                <i class="fa fa-fw fa-plus-circle"></i>Crear
                              </a><hr>
                        </div>

                     <div class="box-body table-responsive no-padding">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                      <td>DESCRIPCION</td>
                                      <td>ACCION</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datas as $data)
                                        <tr>
                                            <td>{{$data->descrpGenero}}</td>
                                            <td>
                                                <a href="{{route('editar.genero',['id'=>$data->id])}}" class="btn-accion-tabla tooltipsC" title="Editar esta registro">
                                                   <i class="fa fa-fw fa-pencil"></i>
                                                </a>
                                                <form action="{{route('eliminar.genero',['id'=>$data->id])}}" class="d-inline form-eliminar" method="POST">
                                                   @csrf @method("delete")
                                                   <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro">
                                                       <i class="fa fa-fw fa-trash text-danger"></i>
                                                   </button>
                                                </form>
                                             </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                     </div>
                     {{-- <button class="btn btn-info" onclick="location='{{route('crear.genero')}}'">Crear</button>  --}}
                </div>
            </div>
        </div>
        <button type="button" name="submit" class="btn btn-info bot"  onclick="location='{{route('admin')}}'" > Volver </button>
    </div>



</body>

</html>


