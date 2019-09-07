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
        <div class="col-lg-3"></div>
    <fieldset id="first" class="col-lg-6 flex-child">
        <legend class="text-center alert-success">Datos generales</legend>
        <div class="col-lg6"><h3>Tipo documento</h3></div>
      <select class="form-control col-lg-3 next_btn">
        <option value="1">Cedula</option>
        <option value="2">Tarjeta identidad</option>
      </select>
    </fieldset>
    
    
     <fieldset class="col-lg-6 flex-child">
        <legend class="text-center alert-success">Datos generales</legend>
         <div class="col-lg6"><h3>Numero de identidad</h3></div>
        <input type="text" class="form-control" placeholder="numero de identidad" id="numero identidad">
        <input class="pre_btn btn btn-info" type="button" value="Anterior" />
            <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
    </fieldset>
    
    
      <fieldset class="col-lg-6 flex-child">
        <legend class="text-center alert-success">Datos generales</legend>
         <div class="col-lg6"><h3>Facultad</h3></div>
        <input type="text" class="form-control" placeholder="digita tu facultad" id="facultad">
        <input class="pre_btn btn btn-info" type="button" value="Anterior" />
            <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
    </fieldset>
    
    <fieldset class="col-lg-6 flex-child">
        <legend class="text-center alert-success">Datos generales</legend>
         <div class="col-lg6"><h3>Departamento</h3></div>
        <input type="text" class="form-control" placeholder="digita el departamento" id="facultad">
        <input class="pre_btn btn btn-info" type="button" value="Anterior" />
            <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
    </fieldset>
    
    <fieldset class="col-lg-6 flex-child">
        <legend class="text-center alert-success">Datos generales</legend>
         <div class="col-lg6"><h3>Tipo de vinculacion</h3></div>
        <input type="text" class="form-control" placeholder="Tipo de vinculacion" id="facultad">
        <input class="pre_btn btn btn-info" type="button" value="Anterior" />
            <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
    </fieldset>
    
    <fieldset class="col-lg-6 flex-child">
        <legend class="text-center alert-success">Datos generales</legend>
         <div class="col-lg6"><h3>Horas a la semana</h3></div>
        <input type="text" class="form-control" placeholder="Ingresa las horas laboradas" id="facultad">
        <input class="pre_btn btn btn-info" type="button" value="Anterior" />
        <input class="submit_btn btn btn-success form-control" type="submit" value="Guardar y Enviar">
    </fieldset>
    
    </form>
    
</body>
</html>
