<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Usuario</title>
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
        <h1 class="titulo esp">Crear Usuario</h1>
    </header>

    <form>

        <div class="container anch">

                <div class="form-group an">
                        <label for="documento">Documento:</label>
                        <input type="number" class="form-control" id="documento" aria-describedby="emailHelp" placeholder="Digite Documento">
                    </div>

                    <div class="form-group">
                        <label for="tpdoc">Tipo Documento:</label>
                        <select name="tpdoc" id="id" class="form-control sel">
                            <option value="1">Cedula</option>
                            <option value="2">Cedula Extranjera</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="rol">Rol:</label>
                        <select name="rol" id="id" class="form-control sel">
                            <option value="1">Administrador</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="primerNombre">Primer Nombre:</label>
                        <input type="text" class="form-control" id="primerNombre" placeholder="Digite Primer Nombre">
                    </div>

                    <div class="form-group">
                        <label for="segundoNombre">Segundo Nombre:</label>
                        <input type="text" class="form-control" id="segundoNombre" placeholder="Digite Segundo Nombre">
                    </div>

                    <div class="form-group">
                        <label for="primerApellido">Primer Apellido:</label>
                        <input type="text" class="form-control" id="primerApellido" placeholder="Digite Primer Apellido">
                    </div>

                    <div class="form-group">
                        <label for="segundoApellido">Segundo Apellido:</label>
                        <input type="text" class="form-control" id="segundoApellido" placeholder="Digite Segundo Apellido">
                    </div>

                    <div class="form-group">
                        <label for="userName"> Usuario:</label>
                        <input type="text" class="form-control" id="userName" placeholder="Digite Usuario">
                    </div>

                    <div class="form-group">
                        <label for="password">  Password:</label>
                        <input type="text" class="form-control" id="password" placeholder="Digite password">
                    </div>

                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" name="submit" class="btn btn-primary"  onclick="location='{{route('admin')}}'" > Volver </button>

        </div>



    </form>


</body>

</html>
