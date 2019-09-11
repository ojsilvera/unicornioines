<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar Encuesta</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/estilo.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <h1 class="titulo">Actualizar Encuesta</h1>
    </header>

    <form>

        <div class="form-group">
            <label for="pregunta">Pregunta:</label>
            <input type="text" class="form-control" id="pregunta" aria-describedby="emailHelp" placeholder="Escriba Pregunta">
        </div>

        <div class="form-group">
                <label for="tip_res">Tipo De Respuesta:</label>
                <select class="form-control">
                    <option>Combobox</option>
                    <option>RadioButon</option>
                </select>
        </div>

        <div class="form-group">
                <label for="tip_res">Realizar a:</label>
                <select class="form-control">
                    <option>Estudiante</option>
                    <option>Directivo</option>
                    <option>Docente</option>
                </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea2">Respuestas:</label>
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
        <button type="button" name="submit" class="btn btn-primary"  onclick="location='{{route('inicio')}}'" > Volver </button>

    </form>

</body>

</html>
