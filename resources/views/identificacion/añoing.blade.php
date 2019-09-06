@extends('theme.layouts')

@section('titulo')
    Año ingreso
@endsection

@section('contenido')
<div class="card-header alert-success">
  <h5>Datos generales</h5>
</div>
<h5>Año de ingreso</h5>
  <div class="card-body input-group">
    <div class="col-lg-3"></div>
   <input type="text" class="form-control col-lg-6" placeholder="Digita el año de ingreso" id="añoing">
   <div class="input-group-prepend">
    <!--<a href="" class="btn btn-primary" name="enviar">enviar</a>-->
   <button class="btn btn-primary" type="button" id="button-addon1"  onclick="location.href = '{{ route('semestreing') }}'">Siguiente</button>
   </div>
   <div class="col-lg-3"></div>
  </div>
@endsection