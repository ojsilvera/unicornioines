@extends('theme.layouts')

@section('titulo')
    Semestre de ingreso
@endsection

@section('contenido')
    <div class="card-header alert-success">
      <h5>Datos generales</h5>
    </div>
    <h5>Semestre de ingreso</h5>
    <div class="card-body input-group">
        <div class="col-lg-3"></div>
          <select class="form-control">
            <option value="1">I</option>
            <option value="2">II</option>
          </select>
          <div class="input-group-prepend">
              <!--<a href="" class="btn btn-primary" name="enviar">enviar</a>-->
             <button class="btn btn-primary" type="button" id="button-addon1">Siguiente</button>
            </div>
            <div class="col-lg-3"></div>
@endsection


