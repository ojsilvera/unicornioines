@extends('theme.layouts')

@section('titulo')
    Datos
@endsection

@section('contenido')
    <div class="card-header alert-success">
      <h5>Datos generales</h5>
    </div>
    <h5>Nombre</h5>
      <div class="card-body input-group mb-6">
          <div class="col-lg-3"></div>
       <input type="text" class="form-control" placeholder="Digita tu nombre" id="Nombre">
       <div class="input-group-prepend">
        <!--<a href="" class="btn btn-primary" name="enviar">enviar</a>-->
       <button class="btn btn-primary" type="button" id="button-addon1"  onclick="location.href = '{{ route('edad') }}'">Siguiente</button>
       </div>
       <div class="col-lg-3"></div>
      </div>
@endsection