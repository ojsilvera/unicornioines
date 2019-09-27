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
                <input type="date" name="fech-rep" class="form-control">
            </div>

            <div class="form-group">
                <label for="desc-rep">Descripcion Reporte:</label>
                <input type="text" name="desc-rep" class="form-control" placeholder="Digite Descripcion Reporte">
            </div>

            <div class="form-group">
                <label for="crea-rep">Creador Reporte:</label>
                <input type="text" name="crea-rep" placeholder="Digite Documento Creador Reporte" class="form-control">
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Estructura Encuesta</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">Encuesta Diligenciada</label>
            </div>

            <div></div>

            <div class="form-group">
                <label for="ind-pre">Reporte Esctructura Encuesta:</label>
                <select class="form-control sel">
                    <option value="">Factor</option>
                    <option value="">Indicador</option>
                    <option value="">Pregunta</option>
                    <option value="">Categoria</option>
                </select>
            </div>

            <div class="form-group">
                <label for="ind-pre">Reporte Encuesta Diligenciada:</label>
                <select class="form-control sel">
                    <option value="">Factor</option>
                    <option value="">Indicador</option>
                    <option value="">Pregunta</option>
                    <option value="">Categoria</option>
                    <option value="">Edad</option>
                    <option value="">Fecha</option>
                    <option value="">Genero</option>
                    <option value="">Institucion</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary ">Generar</button>
            <button type="button" name="submit" class="btn btn-primary"  onclick="location='{{route('inicio')}}'" > Volver </button>

        </div>



    </form>


</body>

</html>
