<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generar Reporte</title>
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
        <h1 class="titulo esp">Generar Reporte</h1>
    </header>

    <form>

        <div class="container anch">

            <div class="form-group">
                <label for="pregunta">ID Reporte:</label>
                <label for="">001</label>
            </div>

            <div class="form-group">
                <label for="fech-rep">Fecha Reporte:</label>
                <input type="date" name="fech-rep" id="fchReporte" class="form-control">
            </div>

            <div class="form-group">
                <label for="desc-rep">Descripcion Reporte:</label>
                <input type="text" name="desc-rep" id="descrpReporte" class="form-control" placeholder="Digite Descripcion Reporte">
            </div>

            <div class="form-group">
                <label for="crea-rep">Creador Reporte:</label>
                <input type="text" name="crea-rep" id="documento" placeholder="Digite Documento Creador Reporte" class="form-control">
            </div>

            <div class="form-group">
                <label for="ind-pre">Reporte:</label>
                <select class="form-control sel" id="sel-rep">
                    <option value="" id="cuerpoFormEncuestaid">Estructura Encuesta</option>
                    <option value="" id="cabEncuestadilid">Encuesta Diligenciada</option>
                </select>
            </div>

                <div class="estructuraEnc">

                    <div class="custom-control custom-checkbox">

                        <div class="check">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1"> Factor</label>
                        </div>

                        <div class="check">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2"> Indicador</label>
                        </div>

                        <div class="check">
                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3"> Pregunta</label>
                        </div>

                        <div class="check">
                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4"> Categoria</label>
                        </div>


                    </div>

                </div>

                <div class="encuestaDili">

                    <div class="custom-control custom-checkbox">

                        <div class="check">
                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                            <label class="custom-control-label" for="customCheck5"> Factor</label>
                        </div>

                        <div class="check">
                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                            <label class="custom-control-label" for="customCheck6"> Indicador</label>
                        </div>

                        <div class="check">
                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                            <label class="custom-control-label" for="customCheck7"> Pregunta</label>
                        </div>

                        <div class="check">
                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                            <label class="custom-control-label" for="customCheck8"> Categoria</label>
                        </div>

                        <div class="check">
                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                            <label class="custom-control-label" for="customCheck9"> Edad</label>
                        </div>

                        <div class="check">
                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                            <label class="custom-control-label" for="customCheck10"> Fecha</label>
                        </div>

                        <div class="check">
                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                            <label class="custom-control-label" for="customCheck11"> Genero</label>
                        </div>

                        <div class="check">
                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                            <label class="custom-control-label" for="customCheck12"> Institucion</label>
                        </div>

                        <div class="check">
                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                            <label class="custom-control-label" for="customCheck13"> Rol</label>
                        </div>

                    </div>

                </div>

            <button type="submit" class="btn btn-primary ">Generar</button>
            <button type="button" name="submit" class="btn btn-primary"  onclick="location='{{route('admin')}}'" > Volver </button>

        </div>

    </form>

</body>

</html>
