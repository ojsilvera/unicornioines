<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/estilo.css')}}">
    <script src="{{asset("/js/jquery.js")}}"></script>
    <script src="{{asset("/js/multipasos.js")}}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos generales</title>
</head>
<body>

    @include('theme.navEnc')

<form class="form-group" id="test" action="{{route('guardar_datos')}}" method="POST">
    @csrf
                    <div class="col-lg-3"></div>

                    <fieldset id="first" class="col-lg-12 estilo">
                        <legend class="text-center alert-success"><h3 class="h">Datos generales</h3></legend>
                        <div class="col-lg6 align-text-bottom"><h3>Institucion</h3></div>
                        <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-lg-6">
                                        <input type="text" class="form-control"  placeholder="Digita la institucion" id="Institucion">
                                </div>
                                <div class="col-md-3"></div>
                        </div>

                            <input  class="next_btn btn btn-info col-6 espacio form-control" name="next" type="button" value="Siguiente" />
                            {{-- <input  class="btn btn-info col-6 espacio" name="next" type="button" onclick="location.href = '{{ route('layout') }}'" value="Volver" /> --}}
                    </fieldset>


                  <fieldset class="col-lg-12 estilo">
                      <legend class="text-center alert-success"><h3 class="h">Datos generales</h3></legend>
                       <div class="col-lg6"><h3>Nombre</h3></div>
                       <div class="row">
                            <div class="col-md-3"></div>
                                <div class="col-lg-6">
                                    <input type="text" name="primerNombre" class="form-control" placeholder="Digita tu nombre" id="primerNombre">
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                      {{-- <input class="pre_btn btn btn-info form-control" type="button" value="Anterior" /> --}}
                        <input class="next_btn btn btn-info form-control espacio" type="button" value="Siguiente" />
                  </fieldset>


                  <fieldset class="col-lg-12 estilo">
                      <legend class="text-center alert-success"><h3 class="h">Datos generales</h3></legend>
                       <div class="col-lg6"><h3>Fecha de nacimiento</h3></div>
                       <div class="row">
                            <div class="col-md-3"></div>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" placeholder="Digita tu fecha de nacimiento" id="fechaNacimiento" name="fechaNacimiento">
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                       <input class="next_btn btn btn-info form-control espacio" type="button" value="Siguiente" />
                  </fieldset>

                  <fieldset class="col-lg-12 estilo">
                      <legend class="text-center alert-success"><h3 class="h">Datos generales</h3></legend>
                      <div class="col-lg6"><h3>Genero</h3></div>
                    <select name="generoid" class="next col-lg-6 form-control">
                        <option value="">Seleccione</option>
                      <option value="1">Femenino</option>
                      <option value="2">Masculino</option>
                    </select>
                  </fieldset>


                   <fieldset class="col-lg-12 estilo">
                      <legend class="text-center alert-success"><h3 class="h">Datos generales</h3></legend>
                      <div class="col-lg6"><h3>Tipo documento</h3></div>
                    <select name="tpDocumentoid" class="form-control col-lg-6 next">
                        <option value="">Seleccione</option>
                      <option value="1">Cedula</option>
                      <option value="2">Tarjeta identidad</option>
                    </select>
                  </fieldset>


                   <fieldset class="col-lg-12 estilo">
                      <legend class="text-center alert-success"><h3 class="h">Datos generales</h3></legend>
                       <div class="col-lg6"><h3>Numero de identidad</h3></div>
                       <div class="row">
                            <div class="col-md-3"></div>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="Numero identidad" id="documento" name="documento">
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                      <input class="next_btn btn btn-info form-control espacio" type="button" value="Siguiente" />
                  </fieldset>



                <fieldset class="col-lg-12 estilo">
                    <legend class="text-center alert-success"><h3 class="h">Datos generales</h3></legend>
                    <div class="col-lg">
                            <select name="rolid" id="rolid">
                                <option value="0">selecione</option>
                                <option value="1">estudiante</option>
                                <option value="2">docente</option>
                            </select>
                    </div>
                    <input class="submit_btn btn btn-success form-control espacio" type="submit" value="Guardar y Enviar">
                    <input class="pre_btn btn btn-info form-control espacio" type="button" value="Anterior" />
                </fieldset>

    </form>
</body>
</html>
