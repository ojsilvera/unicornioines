<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Usuarios</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

    <h1 class="titulo">Listado de Usuarios</h1>

        <table class='table' >

            <tr>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>CORREO</th>
                <th></th>
                <th></th>
            </tr>

            <tr>

                <td></td>
                <td></td>
                <td></td>
                <td> <a href="{{route('act.usu')}}"> Editar </a> </td>
                <td> <a href=''> Eliminar </a> </td>

            </tr>


        </table>

        <button type="button" name="submit" class="btn btn-info btn-md"  onclick="location='{{route('inicio')}}'" > Volver </button>

</body>

</html>

