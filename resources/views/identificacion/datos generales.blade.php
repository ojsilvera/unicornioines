<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos Generales</title>
<link rel="stylesheet" href="/css/validarform.css">
<script src="https://kit.fontawesome.com/241197f601.js" crossorigin="anonymous"></script>
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
            <i class="fas fa-arrow-right"></i>
        </div>

        <div class="field-doc innactive">
            <input type="text" name="documento" class="form-control" placeholder="Digita tu numero de documento" id="documento" required> 
            <i class="fas fa-arrow-validar"></i>
        </div>

            <div class="field-inst innactive">
                <select name="institucionid"id="">
                        <option value="">-- escoge la institucion</option>
                    @foreach ($inst as $insts)
                        <option value="{{ $insts['id'] }}">{{ $insts['nombreInstitucion'] }}</option>
                    @endforeach
                </select>
                <i class="fas fa-arrow-right"></i>
            </div>

            <div class="field-nombre innactive">
                    <i class="fas fa-user"></i>
                <input type="text" name="primerNombre" class="form-control" placeholder="Digita tu nombre" id="primerNombre" required> 
                <i class="fas fa-arrow-right"></i>
            </div>

            <div class="field-apellido innactive">
                <input type="text" name="primerApellido" class="form-control" placeholder="Digita tu apellido" id="primerApellido" required> 
                <i class="fas fa-arrow-right"></i>
            </div>



        <div class="field-genero innactive">
            <select name="generoid" id="">
                 <option value="">-- selecciona tu genero</option>
                @foreach ($genero as $generos)
                 <option value="{{ $generos['id'] }}">{{ $generos['descrpGenero'] }}</option>
                @endforeach
            </select>
            <i class="fas fa-arrow-right"></i>
        </div>

        <div class="field-fechnac innactive">
            <input type="date" name="fechaNacimiento" class="form-control" placeholder="Digita tu apellido" id="fechaNacimiento" required> 
            <i class="fas fa-arrow-right"></i>
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
    <script src="/js/validarform.js"></script>
</body>
</html>