@extends('theme.layouts')

@section('titulo')
    carrera
@endsection

@section('contenido')
<div class="card-header alert-success">
  <h5>Datos generales</h5>
</div>
<h5>Carrera</h5>
  <div class="card-body input-group">
    <div class="col-lg-3"></div>
   <input type="text" class="form-control" placeholder="Digita la institucion" id="carrera">
   <div class="input-group-prepend">
    <!--<a href="" class="btn btn-primary" name="enviar">enviar</a>-->
   <button class="btn btn-primary" type="button" id="button-addon1"  onclick="location.href = '{{ route('semestre') }}'">Siguiente</button>
   </div>
   <div class="col-lg-3"></div>
   
  <!--<input type="submit" value="enviar">--> 
  </div>
     
@endsection