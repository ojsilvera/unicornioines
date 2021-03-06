<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/estilo.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

    <div id="login">

        <!--<h3 class="text-center text-white pt-5">Login form</h3>-->

            <div class="container">

                <div id="login-row" class="row justify-content-center align-items-center">

                    <div id="login-column" class="col-md-6">

                        <div id="login-box" class="col-md-12">

                        <form id="login-form" class="form" action="{{route('login_post')}}" method="POST">
                            @csrf

                                <h3 class="text-center text-info">Login</h3>

                                <div class="form-group">

                                    <label for="usuario" class="text-info">Usuario:</label><br>
                                    <input type="text" name="userName" id="userName" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="contraseña" class="text-info">Contraseña:</label><br>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>

                                <div class="form-group">
                                {{-- <input type="submit" value="ingresar" class="btn btn-info btn-md"> --}}
                                <button type="submit" name="submit" class="btn btn-info btn-md"  > Ingresar </button>
                                <button type="button" name="submit" class="btn btn-info btn-md"  > Volver </button>
                                </div>

                            </form>
                            <div class="col-md-12">
                                    @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <div class="alert-text">
                                            @foreach ($errors->all() as $error)
                                                <span>{{ $error }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                            </div>
                        @endif


                    </div>

             </div>

        </div>

    </div>

</body>

</html>
