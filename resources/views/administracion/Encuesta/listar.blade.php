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

                     <div class="box-body table-responsive no-padding">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                      <td>ID ENCUESTA</td>
                                      <td>PREGUNTA</td>
                                      <td>RESPUESTA</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($encuesta as $data)
                                        <tr>
                                            <td>{{$data->cabEncuestaDilid}}</td>
                                            <td>{{$data->descrpPregunta}}</td>
                                            <td>{{$data->descrpRespuesta}}</td>

                                           
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{$encuesta->links()}}

                     </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>


