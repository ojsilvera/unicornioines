<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos Generales</title>
<link rel="stylesheet" href="/css/validarform.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="/js/validarform.js"></script>
</head>
<body>

    <form class="form-group" id="test" action="{{route('guardar_datos')}}" method="POST">
        {!! csrf_field() !!}

        <div class="field-tpdoc">
            <select name="tpDocumentoid" class="sel" required>
                    <option value="">-- escoge el tipo de documento</option>
                @foreach ($doc as $docs)
                    <option value="{{ $docs['id'] }}">{{ $docs['descrpTpDocumento'] }}</option>
                @endforeach
            </select>
            <i class="fa fa-arrow-right"></i>
        </div>

        <div class="field-doc innactive" id="doc">
            <input type="text" name="documento"  class="form-control" placeholder="Digita tu numero de documento" id="documento" required> 
            <i class="fa fa-arrow-right"></i>
        </div>

            <div class="field-inst innactive">
                <select name="institucionid"id="">
                        <option value="">-- escoge la institucion</option>
                    @foreach ($inst as $insts)
                        <option value="{{ $insts['id'] }}">{{ $insts['nombreInstitucion'] }}</option>
                    @endforeach
                </select>
                <i class="fa fa-arrow-right"></i>
            </div>

            <div class="field-nombre innactive">
                <input type="text" name="primerNombre" class="form-control" placeholder="Digita tu nombre" id="primerNombre" required> 
                <i class="fa fa-arrow-right"></i>
            </div>

            <div class="field-apellido innactive">
                <input type="text" name="primerApellido" class="form-control" placeholder="Digita tu apellido" id="primerApellido" required> 
                <i class="fa fa-arrow-right"></i>
            </div>



        <div class="field-genero innactive">
            <select name="generoid" id="">
                 <option value="">-- selecciona tu genero</option>
                @foreach ($genero as $generos)
                 <option value="{{ $generos['id'] }}">{{ $generos['descrpGenero'] }}</option>
                @endforeach
            </select>
            <i class="fa fa-arrow-right"></i>
        </div>

        <div class="field-fechnac innactive">
            <input type="date" name="fechaNacimiento" class="form-control" placeholder="Digita tu apellido" id="fechaNacimiento" required> 
            <i class="fa fa-arrow-right"></i>
        </div>

        <div class="field-rol innactive">
            <select name="rolid" id="">
                    <option value="">-- selecciona tu rol</option>
                @foreach ($rol as $roles)
                    <option value="{{ $roles['id'] }}">{{ $roles['descrpRol'] }}</option>
                @endforeach
            </select>
             <button type="submit" class="btn btn-success">Siguiente</button>
        </div>
 </form>
 <script src="/js/validarform.js" type="text/javascript"></script>

</body>
</html>