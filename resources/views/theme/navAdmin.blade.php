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

                                <a class="dropdown-item"  href="{{route('filtrar')}}">Consultas Encuestas</a>
                                <a class="dropdown-item"  href="{{route('mostrar_encuesta')}}">Ver Encuestas</a>

                            </div>
                    </li>



                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tablas</a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item"  href="{{route('ver.genero')}}">Genero</a>
                                <a class="dropdown-item"  href="{{route('ver.tpdoc')}}">Tipo Documento</a>
                                <a class="dropdown-item"  href="{{route('ver.inst')}}">Institucion</a>
                                <a class="dropdown-item"  href="{{route('ver.rol')}}">Rol</a>
                                <a class="dropdown-item"  href="{{route('ver.factor')}}">Factor</a>
                                <a class="dropdown-item"  href="{{route('ver.cat')}}">Categoria</a>

                            </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios</a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{route('crear.usu')}}">Crear Usuarios</a>
                            <a class="dropdown-item" href="{{route('ver.usu')}}">Ver Usuarios</a>

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

                        <a class="nav-link" href="{{route('logout')}}" >Cerrar Sesion <span class="sr-only">(current)</span></a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>
