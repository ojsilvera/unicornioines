<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <div id="login">

        <!--<h3 class="text-center text-white pt-5">Login form</h3>-->

            <div class="container">

                <div id="login-row" class="row justify-content-center align-items-center">

                    <div id="login-column" class="col-md-6">

                        <div id="login-box" class="col-md-12">

                            <form id="login-form" class="form" action="" method="GET">

                                <h3 class="text-center text-info">Login</h3>

                                 <div class="form-group">

                                    <label for="usuario" class="text-info">Ususario:</label><br>
                                    <input type="text" name="usuario" id="usuario" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="contraseña" class="text-info">Contraseña:</label><br>
                                    <input type="password" name="contraseña" id="contraseña" class="form-control">
                                </div>

                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-info btn-md" onclick="location.href = '{{ route('index') }}'" value="Ingresar">
                                </div>

                            </form>

                        </div>

                     </div>

                 </div>

             </div>

        </div>

    </div>

</body>

</html>
