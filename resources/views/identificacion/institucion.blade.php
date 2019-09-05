@extends('theme.layouts')

@section('titulo')
    institucion
@endsection

@section('contenido')
<div class="card-header alert-success">
  <h5>Datos generales</h5>
</div>
<h5>Institucion</h5>
  <div class="card-body input-group">
    <div class="col-lg-3"></div>
   <input type="text" class="form-control" placeholder="Digita la institucion" id="Institucion">
   <div class="input-group-prepend">
    <!--<a href="" class="btn btn-primary" name="enviar">enviar</a>-->
   <button class="btn btn-primary" type="button" id="button-addon1"  onclick="location.href = '{{ route('nombre') }}'">Siguiente</button>
   </div>
   <div class="col-lg-3"></div>
   
  <!--<input type="submit" value="enviar">--> 
  </div>
     
@endsection