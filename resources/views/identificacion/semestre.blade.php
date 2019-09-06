@extends('theme.layouts')

@section('titulo')
    semestre
@endsection

@section('contenido')
<div class="card-header alert-success">
  <h5>Datos generales</h5>
</div>
<h5>Semestre</h5>
<div class="card-body input-group">
        <div class="col-lg-3"></div>
          <select class="form-control">
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
          <div class="input-group-prepend">
              <!--<a href="" class="btn btn-primary" name="enviar">enviar</a>-->
             <button class="btn btn-primary" type="button" id="button-addon1"  onclick="location.href = '{{ route('añoing') }}'">Siguiente</button>
            </div>
            <div class="col-lg-3"></div>
     
@endsection