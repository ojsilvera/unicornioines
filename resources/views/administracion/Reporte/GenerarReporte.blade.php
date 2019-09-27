<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generar Reporte</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <h1 class="titulo">Generar Reporte</h1>
    </header>

    <form>

        <div class="form-group">
            <label for="tip_res">Dato General:</label>
            <select class="form-control">
                <option>Edad</option>
                <option>Indice</option>
                <option>Factor</option>
                <option>Institucion</option>
            </select>
        </div>

            <div class="form-group">
                <label for="tip_res">Rango:</label>
                <select class="form-control">
                    <option>0 a 5</option>
                    <option>6 a 10</option>
                    <option>11 a 18</option>
                    <option>18 o mas</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tip_res">Indicador:</label>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tip_res">Factor:</label>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

        <button type="submit" class="btn btn-primary">Generar</button>
        <button type="button" name="submit" class="btn btn-primary"  onclick="location='{{route('inicio')}}'" > Volver </button>

    </form>


</body>

</html>
