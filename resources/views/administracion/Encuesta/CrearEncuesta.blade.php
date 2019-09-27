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
        <h1 class="titulo esp">Crear Encuesta</h1>
    </header>

    <form>

        <div class="container anch">

            <div class="form-group">
                <label for="pregunta">ID Encuesta:</label>
                <label for="">001</label>
            </div>

            <div class="form-group">
                <label for="descr-enc">Descripcion Encuesta:</label>
                <input type="text" name="descr-enc" placeholder="Digite Descripcion Encuesta" class="form-control">
            </div>

            <div class="form-group">
                <label for="crea-enc">Creador Encuesta:</label>
                <input type="text" name="crea-enc" placeholder="Digite Documento Creador Encuesta" class="form-control">
            </div>

            <div class="form-group">
                <label for="fact-pre">Factor De Pregunta:</label>
                <select class="form-control sel">
                    <option value="">aqui va el factor</option>
                </select>
            </div>

            <div class="form-group">
                <label for="ind-pre">Indicador De Pregunta:</label>
                <select class="form-control sel">
                    <option value="">aqui va el indicador</option>
                </select>
            </div>

            <div class="form-group">
                <label for="pregunta">Pregunta:</label>
                <input type="text" name="pregunta" placeholder="Digite Pregunta" class="form-control">
            </div>

            <div class="form-group">
                <label for="fact-pre">Categoria De Respuesta:</label>
                <select class="form-control sel">
                    <option value="">aqui va la categoria</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Crear</button>
            <button type="button" name="submit" class="btn btn-primary"  onclick="location='{{route('admin')}}'" > Volver </button>

        </div>



    </form>

</body>

</html>
