<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('/css/estilo.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <script src="{{asset("/js/jquery.js")}}"></script>
    <script src="{{asset("/js/multipasos.js")}}"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" id="test" class="form-inline">
        {{-- vista institucion --}}
      <div class="col-lg-3"></div>
          <fieldset id="first" class="col-lg-6 flex-child">
              <legend class="text-center alert-success">Datos generales</legend>
              <div class="col-lg6"><h3>Institucion</h3></div>
              <input type="text" class="form-control"  placeholder="Digita la institucion" id="Institucion">
              <input  class="next_btn btn btn-info form-control" name="next" type="button" value="Siguiente" />
              <input  class="btn btn-info form-control" name="next" type="button" onclick="location.href = '{{ route('layout') }}'" value="Volver" />
          </fieldset>


        <fieldset class="col-lg-6 flex-child">
            <legend class="text-center alert-success">Datos generales</legend>
             <div class="col-lg6"><h3>Nombre</h3></div>
            <input type="text" class="form-control" placeholder="Digita tu nombre" id="nombre">
            {{-- <input class="pre_btn btn btn-info form-control" type="button" value="Anterior" /> --}}
              <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>


        <fieldset class="col-lg-6 flex-child">
            <legend class="text-center alert-success">Datos generales</legend>
             <div class="col-lg6"><h3>Edad</h3></div>
            <input type="text" class="form-control" placeholder="Digita tu Edad" id="edad">
            {{-- <input class="pre_btn btn btn-info form-control" type="button" value="Anterior" /> --}}
            <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>

        <fieldset class="col-lg-6 flex-child">
            <legend class="text-center alert-success">Datos generales</legend>
            <div class="col-lg6"><h3>Genero</h3></div>
          <select class="form-control col-lg-3 next">
              <option value="">Seleccione</option>
            <option value="1">Femenino</option>
            <option value="2">Masculino</option>
          </select>
        </fieldset>


         <fieldset class="col-lg-6 flex-child">
            <legend class="text-center alert-success">Datos generales</legend>
            <div class="col-lg6"><h3>Tipo documento</h3></div>
          <select class="form-control col-lg-3 next">
              <option value="">Seleccione</option>
            <option value="1">Cedula</option>
            <option value="2">Tarjeta identidad</option>
          </select>
        </fieldset>


         <fieldset class="col-lg-6 flex-child">
            <legend class="text-center alert-success">Datos generales</legend>
             <div class="col-lg6"><h3>Numero de identidad</h3></div>
            <input type="text" class="form-control" placeholder="numero de identidad" id="numero identidad">
            {{-- <input class="pre_btn btn btn-info form-control" type="button" value="Anterior" /> --}}
            <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>


        
        <fieldset class="col-lg-6 flex-child">
          <legend class="text-center alert-success">Datos generales</legend>
          <img class="next_btn"  src="/img/estudiante.jpg" value="Siguiente" width="70" height="70" tabindex="1" />
          <img onclick="location.href = '{{ route('docente') }}'"  src="/img/docente.png" value="Siguiente" width="70" height="70" tabindex="2" />
          <img onclick="location.href = '{{ route('administrativo') }}'" src="/img/administrativo.png" value="Siguiente" width="70" height="70" tabindex="3"/>
          <input class="pre_btn btn btn-info form-control" type="button" value="Anterior" />
      </fieldset>


          <fieldset class="col-lg-6 flex-child">
            <legend class="text-center alert-success">Datos generales</legend>
             <div class="col-lg6"><h3>Facultad</h3></div>
            <input type="text" class="form-control" placeholder="digita tu facultad" id="facultad">
            {{-- <input class="pre_btn btn btn-info form-control" type="button" value="Anterior" /> --}}
            <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>

        <fieldset class="col-lg-6 flex-child">
            <legend class="text-center alert-success">Datos generales</legend>
             <div class="col-lg6"><h3>Carrera</h3></div>
            <input type="text" class="form-control" placeholder="digita tu carrera" id="carrera">
            {{-- <input class="pre_btn btn btn-info" type="button" value="Anterior" /> --}}
            <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>


        <fieldset class="col-lg-6 flex-child">
            <legend class="text-center alert-success">Datos generales</legend>
            <div class="col-lg6"><h3>Semestre</h3></div>
          <select class="form-control col-lg-3 next">
                       <option value="">Seleccione</option>
                        <option value="1">I</option>
                        <option value="2">II</option>
                        <option value="3">III</option>
                        <option value="4">IV</option>
                        <option value="5">V</option>
                        <option value="6">VI</option>
                        <option value="7">VII</option>
                        <option value="8">VIII</option>
                        <option value="9">IX</option>
                        <option value="10">X</option>
                      </select>
        </fieldset>


        <fieldset class="col-lg-6 flex-child">
            <legend class="text-center alert-success">Datos generales</legend>
             <div class="col-lg6"><h3>Año de ingreso</h3></div>
            <input type="text" class="form-control" placeholder="Año de ingreso" id="añoing">
            {{-- <input class="pre_btn btn btn-info form-control" type="button" value="Anterior" /> --}}
            <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>


       <fieldset class="col-lg-6 flex-child">
            <legend class="text-center alert-success">Datos generales</legend>
            <div class="col-lg6"><h3>Semestre</h3></div>
                <select class="form-control col-lg-3 next">
                    <option value="">Seleccione</option>
                        <option value="1">I</option>
                        <option value="2">II</option>
                      </select>
                    {{-- <input class="btn btn-info form-control" onclick="location.href = '{{ route('estudiante') }}'" type="button" value="Empezar encuesta" /> --}}
                    {{-- <input class="submit_btn btn btn-success form-control" type="submit" value="Guardar y Enviar"> --}}
        </fieldset>


    </form>
</body>
</html>
