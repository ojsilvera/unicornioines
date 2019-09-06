@extends('theme.layouts')

@section('titulo')
    Genero
@endsection

@section('contenido')
    <div class="card-header alert-success">
      <h5>Datos generales</h5>
    </div>
    <h5>Genero</h5>
    <div class="card-body input-group">
        <div class="col-lg-3"></div>
          <select class="form-control">
            <option value="1">Masculino</option>
            <option value="2">Femenino</option>
          </select>
          <div class="input-group-prepend">
              <!--<a href="" class="btn btn-primary" name="enviar">enviar</a>-->
             <button class="btn btn-primary" type="button" id="button-addon1"  onclick="location.href = '{{ route('identificacion') }}'">Siguiente</button>
            </div>
            <div class="col-lg-3"></div>
@endsection


