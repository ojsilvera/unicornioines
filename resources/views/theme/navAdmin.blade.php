<nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container">

            <a  class="navbar-brand">Ines | Indice De Inclusion Para Educacion Superior</a>

            <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbar9">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbar9">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Encuestas</a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item"  href="{{route('crear.enc')}}">Crear Encuestas</a>
                                <a class="dropdown-item"  href="{{route('ver.enc')}}">Ver Encuestas</a>
                                <a class="dropdown-item"  href="{{route('act.enc')}}">Actualizar Encuestas</a>
                                <a class="dropdown-item"  href="{{route('eli.enc')}}">Eliminar Encuestas</a>

                            </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{route('crear.usu')}}">Crear Usuarios</a>
                            <a class="dropdown-item" href="{{route('ver.usu')}}">Ver Usuarios</a>
                            <a class="dropdown-item" href="{{route('act.usu')}}">Actualizar Usuarios</a>
                            <a class="dropdown-item" href="{{route('eli.usu')}}">Eliminar Usuarios</a>

                        </div>

                    </li>

                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reportes</a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{route('crear.rep')}}">Generar Reportes</a>
                                <a class="dropdown-item" href="{{route('ver.rep')}}">Ver Reportes</a>

                            </div>

                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link" href="{{route('layout')}}" >Cerrar Sesion <span class="sr-only">(current)</span></a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>
