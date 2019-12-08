<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrativo</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/validarform.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
<body>
<form action="{{route('enviar_encuesta')}}" method="POST">
    @csrf

                    {{-- datos generales --}}

                <div class="field-inst">
                    <select name="institucionid"id="">
                            <option value="">-- escoge la institucion</option>
                        @foreach ($inst as $insts)
                            <option value="{{ $insts['id'] }}">{{ $insts['nombreInstitucion'] }}</option>
                        @endforeach
                    </select>
                    <input type="text" name="documento" hidden value="{{$user}}"> 
                    <input type="text" name="rolid" id="" value="4" hidden>
                    <i class="fa fa-arrow-right button"></i>
                </div>


                <div class="field-nombre innactive">
                    <input type="text" name="primerNombre" class="form-control" placeholder="Digita tu nombre" id="primerNombre" required> 
                    <i class="fa fa-arrow-right button"></i>
                </div>

                <div class="field-apellido innactive">
                    <input type="text" name="primerApellido" class="form-control" placeholder="Digita tu apellido" id="primerApellido" required> 
                    <i class="fa fa-arrow-right button"></i>
                </div>



            <div class="field-genero innactive">
                <select name="generoid" id="">
                    <option value="">-- selecciona tu genero</option>
                    @foreach ($genero as $generos)
                    <option value="{{ $generos['id'] }}">{{ $generos['descrpGenero'] }}</option>
                    @endforeach
                </select>
                <i class="fa fa-arrow-right button"></i>
            </div>

            <div class="field-fechnac innactive">
                <input type="number" name="edad" class="form-control" placeholder="Digita tu edad" id="fechaNacimiento" required> 
                <i class="fa fa-arrow-right button"></i>
            </div>

            <div class="field-doc innactive" id="cargo">
                <input type="text" name="cargo"  class="form-control" placeholder="Digita el cargo que desempeñas" id="cargo" required> 
                <i class="fa fa-arrow-right button"></i>
            </div>


            <div class="field-doc innactive" id="dependencia">
                <input type="text" name="dependencia"  class="form-control" placeholder="Digita la dependencia que perteneces" id="dependencia" required> 
                <i class="fa fa-arrow-right button"></i>
            </div>


            <div class="field-doc innactive" id="antinst">
                <input type="number" name="antinst"  class="form-control" placeholder="Digita la antiguedad en la institucion" id="antinst" required> 
                <i class="fa fa-arrow-right button"></i>
            </div>


            <div class="field-doc innactive" id="antcargo">
                <input type="number" name="antcargo"  class="form-control" placeholder="Digita la antiguedad en el cargo" id="antcargo" required> 
                <i class="fa fa-arrow-right button"></i>
            </div>


    {{-- **********************************preguntas de encuesta*********************************************************** --}}
        <div class="field-1 innactive">
                        <div class="col-lg-8">
                            <div class="col-lg-12">
                                    1. MISIÓN Y PROYECTO INSTITUCIONAL (INDICADORES 1.1 Y 1.2)
                            </div><hr>
                                <p>1. ¿Contemplan la misión y el proyecto de la institución las seis características de la educación inclusiva
                                pensando en la eliminación de estas barreras? </p>
                        </div>
                                <select class="form-control" name="1">
                                        <option value="">Seleccione</option>
                                        <option value="1">Existe y Se Implementa</option>
                                        <option value="2">Existe y No Se Implementa</option>
                                        <option value="3">No Existe</option>
                                        <option value="4">No Sabe</option>
                                </select>
                <div class="button">
                    <button class="fa fa-arrow-right" type="button"></button>
                </div>
        </div>


        <div class="field-2 innactive">
                <div class="col-lg-8">
                    <p>2. ¿Existe en la institución una instancia responsable de examinar cuáles son estas barreras? </p>
                </div>
                    <select class="form-control" name="2">
                        <option value="">Seleccione</option>
                        <option value="5">Existe y Se Implementa</option>
                        <option value="6">Existe y No Se Implementa</option>
                        <option value="7">No Existe</option>
                        <option value="8">No Sabe</option>
                    </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="button"></button>
            </div>
        </div>


        <div class="field-3 innactive">
                <div class="col-lg-8">
                        <p>3. Si estas barreras han sido identificadas,
                        ¿se han implementado estrategias concretas para su eliminación </p>
                </div>
                <select class="form-control" name="3">
                    <option value="">Seleccione</option>
                    <option value="9">Existe y Se Implementa</option>
                    <option value="10">Existe y No Se Implementa</option>
                    <option value="11">No Existe</option>
                    <option value="12">No Sabe</option>
                </select>        
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>
</form>

        <div class="field-4 innactive">
                <div class="col-lg-8">
                        <p>4. ¿Cuenta la institución con un acto administrativo o una resolución que priorice las particularidades <br>
                        sociales, económicas, políticas, culturales, lingüísticas, físicas y geográficas de sus estudiantes,
                        con el fin de facilitar el acceso y la permanencia? </p>
                </div>
                <select class="form-control" name="4">
                    <option value="">Seleccione</option>
                    <option value="13">Existe y Se Implementa</option>
                    <option value="14">Existe y No Se Implementa</option>
                    <option value="15">No Existe</option>
                    <option value="16">No Sabe</option>
                </select>        
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-5 innactive">
                <div class="col-lg-8">
                    <div class="col-lg-12">1.2. IDENTIFICACIÓN Y CARACTERIZACIÓN DE ESTUDIANTES DESDE LA EDUCACIÓN INCLUSIVA</div> <hr>
                        <p>1. ¿Cuenta la institución con estudios sobre las condiciones de su población estudiantil
                        (sociales, económicas, políticas, culturales, lingüísticas, físicas y geográficas)
                        y usa esta información <br> para desarrollar estrategias de educación inclusiva? </p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="17">Siempre</option>
                    <option value="18">Algunas Veces</option>
                    <option value="19">Nunca</option>
                    <option value="20">No Sabe</option>
                </select>        
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-7 innactive">
                <div class="col-lg-8">
                        <p>2. ¿La identificación y caracterización estudiantil es una prioridad para determinar
                        a los estudiantes más proclives a ser excluidos del sistema? </p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="21">Siempre</option>
                    <option value="22">Algunas veces</option>
                    <option value="23">Nunca</option>
                    <option value="24">No Sabe</option>
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-8 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Recoge y sistematiza la institución, en los procesos de matrícula,
                        información sobre las condiciones particulares de sus estudiantes? </p>
                </div>
                <select class="form-control"  name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="25">Siempre</option>
                    <option value="26">Algunas veces</option>
                    <option value="27">Nunca</option>
                    <option value="28">No Sabe</option>
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-9 innactive">
                <div class="col-lg-8">
                        <p>4. ¿Existen documentos de análisis institucionales
                        sobre los resultados de los estudios de identificación y caracterización estudiantil? </p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="29">Siempre</option>
                    <option value="30">Algunas veces</option>
                    <option value="31">Nunca</option>
                    <option value="32">No Sabe</option>
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-10 innactive">
                <div class="col-lg-8">
                    <div class="col-lg-12">ESTUDIANTES (INDICADORES 2.1 Y 2.2)</div> <hr>
                    <p>1. ¿La participación de los estudiantes en la institución está identificada de manera explícita <br>
                    en la política institucional?</p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="33">Existe y Se Implementa</option>
                    <option value="34">Existe y No Se Implementa</option>
                    <option value="35">No Existe</option>
                    <option value="36">No Sabe</option>
          
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-11 innactive">
                <div class="col-lg-8">
                    <p>2. ¿Desempeñan los estudiantes un rol activo en el desarrollo de la política institucional?</p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="37">Existe y Se Implementa</option>
                    <option value="38">Existe y No Se Implementa</option>
                    <option value="39">No Existe</option>
                    <option value="40">No Sabe</option>
          
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-12 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Existen mecanismos de participación para que los estudiantes
                        elijan los contenidos y las estrategias de enseñanza y aprendizaje en pro de la educación inclusiva?</p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="41">Existe y Se Implementa</option>
                    <option value="42">Existe y No Se Implementa</option>
                    <option value="43">No Existe</option>
                    <option value="44">No Sabe</option>
          
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-13 innactive">
                <div class="col-lg-8">
                        <p>4. ¿Garantiza la institución la participación de todos los estudiantes,
                        teniendo en cuenta sus particularidades sociales, económicas, políticas, culturales, lingüísticas, físicas <br>
                        y geográficas?</p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="45">Existe y Se Implementa</option>
                    <option value="46">Existe y No Se Implementa</option>
                    <option value="47">No Existe</option>
                    <option value="48">No Sabe</option>
          
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-14 innactive">
                <div class="col-lg-8">
                        <p>1. ¿Existen apoyos que garanticen la aplicación equitativa y transparente de los criterios para la admisión <br>
                        y permanencia de los estudiantes, especialmente aquellos que tienen una condición de vulnerabilidad?</p>
                </div>
                <select class="form-control"  name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="49">Existe y Se Implementa</option>
                    <option value="50">Existe y No Se Implementa</option>
                    <option value="51">No Existe</option>
                    <option value="52">No Sabe</option>
          
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-15 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Existen estrategias que garanticen la inclusión de los estudiantes a la institución sin importar su condición?</p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="53">Existe y Se Implementa</option>
                    <option value="54">Existe y No Se Implementa</option>
                    <option value="55">No Existe</option>
                    <option value="56">No Sabe</option>
          
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-16 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Existen análisis sobre la deserción de estudiantes, sus causas y posibles estrategias para garantizar su permanencia en condiciones de calidad?</p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="57">Existe y Se Implementa</option>
                    <option value="58">Existe y No Se Implementa</option>
                    <option value="59">No Existe</option>
                    <option value="60">No Sabe</option>
          
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-17 innactive">
                <div class="col-lg-8">
                        <p>4. ¿Se cuenta con una divulgación de los sistemas de crédito, subsidios, becas y estímulos?</p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="61">Existe y Se Implementa</option>
                    <option value="62">Existe y No Se Implementa</option>
                    <option value="63">No Existe</option>
                    <option value="64">No Sabe</option>
          
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-18 innactive">
                <div class="col-lg-8">
                        <p>5. ¿Existe un procedimiento claro de control para garantizar que los estudiantes beneficiados con los apoyos <br>
                        institucionales hagan buen uso de estos en los tiempos previstos para su graduación?</p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="65">Existe y Se Implementa</option>
                    <option value="66">Existe y No Se Implementa</option>
                    <option value="67">No Existe</option>
                    <option value="68">No Sabe</option>
          
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-19 innactive">
                <div class="col-lg-8">
                    <div class="col-lg-12">
                        3. PROFESORES (INDICADORES 3.1 Y 3.2)
                    </div><hr>
                    <p>1. ¿La participación de los docentes en la institución está identificada de manera explícita en la política institucional?</p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="69">Existe y Se Implementa</option>
                    <option value="70">Existe y No Se Implementa</option>
                    <option value="71">No Existe</option>
                    <option value="72">No Sabe</option>
          
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>




        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Existen mecanismos de participación para que los docentes elijan los contenidos y las estrategias
                        de enseñanza y aprendizaje en pro de la educación inclusiva?</p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="73">Existe y Se Implementa</option>
                    <option value="74">Existe y No Se Implementa</option>
                    <option value="75">No Existe</option>
                    <option value="76">No Sabe</option>
          
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>

        <div class="field-21 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Garantiza la institución la participación de todos los docentes, teniendo en cuenta sus particularidades <br>
                        sociales, económicas, políticas, culturales, lingüísticas, físicas y geográficas?</p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="77">Existe y Se Implementa</option>
                    <option value="78">Existe y No Se Implementa</option>
                    <option value="79">No Existe</option>
                    <option value="80">No Sabe</option>
          
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-22 innactive">
                <div class="col-lg-8">
                        <p>1. ¿Existen lineamientos institucionales que definan las cualidades del “docente inclusivo”?</p>
                </div>
                <select class="col-lg-6" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="81">Siempre</option>
                        <option value="82">Algunas Veces</option>
                        <option value="83">Nunca</option>
                        <option value="84">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-23 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Se comparten estrategias pedagógicas y metodológicas de educación inclusiva entre los docentes para ser aplicadas
                        en los procesos académicos, y promueve la institución la retroalimentación de estas estrategias?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="85">Siempre</option>
                        <option value="86">Algunas Veces</option>
                        <option value="87">Nunca</option>
                        <option value="88">No Sabe</option>
                </select>       
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-24 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Cuentan los docentes con procesos de formación permanente sobre educación inclusiva
                        y atención a la diversidad, independientemente de su tipo de vinculación y área del conocimiento?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="89">Siempre</option>
                        <option value="90">Algunas Veces</option>
                        <option value="91">Nunca</option>
                        <option value="92">No Sabe</option>
                </select>    
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-25 innactive">
                <div class="col-lg-8">
                        <p>4. ¿Los docentes evidencian y valoran en sus estrategias de enseñanza la diversidad de sus estudiantes?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="93">Siempre</option>
                        <option value="94">Algunas Veces</option>
                        <option value="95">Nunca</option>
                        <option value="96">No Sabe</option>
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-26 innactive">
                <div class="col-lg-8">
                    <div class="col-lg-12">
                        4. PROCESOS ACADÉMICOS (INDICADORES 4.1 Y 4.2)
                    </div><hr>
                    <p>1. ¿Contemplan los currículos metodologías flexibles en atención a la diversidad para la enseñanza y aprendizaje?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="97">Siempre</option>
                        <option value="98">Algunas Veces</option>
                        <option value="99">Nunca</option>
                        <option value="100">No Sabe</option>
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-27 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Implementan los planes de estudio didácticas innovadoras que tienen en cuenta las particularidades de los estudiantes en los procesos
                        de aprendizaje y desarrollo de sus capacidades?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="101">Siempre</option>
                        <option value="102">Algunas Veces</option>
                        <option value="103">Nunca</option>
                        <option value="104">No Sabe</option>
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-28 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Los currículos se flexibilizan de acuerdo con las particularidades del entorno y los 
                        contextos regionales, desde una perspectiva interdisciplinar?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="105">Siempre</option>
                        <option value="106">Algunas Veces</option>
                        <option value="107">Nunca</option>
                        <option value="108">No Sabe</option>
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-29 innactive">
                <div class="col-lg-8">
                        <p>4. ¿La utilización de las TIC en el desarrollo de los currículos permite facilitar el aprendizaje 
                        y la participación de todos los estudiantes?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="109">Siempre</option>
                        <option value="110">Algunas Veces</option>
                        <option value="111">Nunca</option>
                        <option value="112">No Sabe</option>
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-30 innactive">
                <div class="col-lg-8">
                        <p>5. ¿Existe un servicio de apoyo pedagógico reconocido –tutorías, cursos de nivelación, entre otros–
                        para todos los estudiantes que lo requieran?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="113">Siempre</option>
                        <option value="114">Algunas Veces</option>
                        <option value="115">Nunca</option>
                        <option value="116">No Sabe</option>
                </select>      
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-31 innactive">
                <div class="col-lg-8">
                        <p>1. ¿Los procesos de evaluación implementan estrategias y/o herramientas diferenciales de apoyo que 
                        permiten lograr la equidad entre los estudiantes?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                         <option value="117">Existe y Se Implementa</option>
                         <option value="118">Existe y No Se Implementa</option>
                         <option value="119">No Existe</option>
                         <option value="120">No Sabe</option>
            
                       </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-32 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Las herramientas de evaluación son socializadas y concertadas con estudiantes y docentes antes de ser
                        implementadas, con el fin de tener en cuenta la diversidad?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                         <option value="121">Existe y Se Implementa</option>
                         <option value="122">Existe y No Se Implementa</option>
                         <option value="123">No Existe</option>
                         <option value="124">No Sabe</option>
            
                     </select>    
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-33 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Se evidencia la importancia de la evaluación flexible en la política institucional?</p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="125">Existe y Se Implementa</option>
                    <option value="126">Existe y No Se Implementa</option>
                    <option value="127">No Existe</option>
                    <option value="128">No Sabe</option>
            
                </select>     
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-34 innactive">
                <div class="col-lg-8">
                        <p>4. ¿Existen lineamientos institucionales que orienten al docente sobre el diseño y la implementación de una evaluación flexible?</p>
                </div>
                <select class="form-control" name="prrespid">
                    <option value="">Seleccione</option>
                    <option value="129">Existe y Se Implementa</option>
                    <option value="130">Existe y No Se Implementa</option>
                    <option value="131">No Existe</option>
                    <option value="132">No Sabe</option>
            
                </select>     
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-35 innactive">
                <div class="col-lg-8">
                    <div class="col-lg-12">
                            5. VISIBILIDAD NACIONAL E INTERNACIONAL (INDICADORES 5.1 Y 5.2)
                    </div><hr>
                    <p>1. ¿Existe y aplica políticas institucionales en materia de referentes académicos externos, nacionales <br>
                        e internacionales, de reconocida calidad para la revisión y actualización de los planes de estudio?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="133">Si</option>
                        <option value="134">No</option>
                        <option value="135">No sabe</option>
          
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-36 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Existe análisis sistemático realizado por la institución frente a temas de inclusión con respecto a otras instituciones nacionales e <br>
                        internacionales para realizar acciones y planes de mejoramiento</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="136">Si</option>
                        <option value="137">No</option>
                        <option value="138">No sabe</option>
          
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-37 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Existen proyectos de investigación, innovación, creación artística y cultural y/o proyección –de acuerdo con la 
                        naturaleza de la institución– desarrollados como producto de la cooperación académica y profesional, realizada
                        por directivos, profesores y estudiantes de la institución, con miembros de comunidades
                        nacionales e internacionales de reconocido liderazgo en temas específicos de inclusión?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="139">Si</option>
                        <option value="140">No</option>
                        <option value="141">No sabe</option>
          
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>

        <div class="field-38 innactive">
                <div class="col-lg-8">
                        <p>4. ¿Se cuenta con evidencias del impacto social que ha generado la inserción de la institución en los contextos académicos
                        nacionales e internacionales en cuanto a temas de inclusión?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="142">Si</option>
                        <option value="143">No</option>
                        <option value="144">No sabe</option>
          
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-39 innactive">
                <div class="col-lg-8">
                        <p>5. ¿Existe alianzas interinstitucionales para compartir recursos, impulsar procesos misionales
                        y buenas prácticas de inclusión?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="145">Si</option>
                        <option value="146">No</option>
                        <option value="147">No sabe</option>
          
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-40 innactive">
                <div class="col-lg-8">
                        <p>1. ¿Existen convenios con enfoque de inclusión activos de intercambio con instituciones de educación superior nacionales y extranjeras de alta calidad y reconocimiento?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="148">Si</option>
                        <option value="149">No</option>
                        <option value="150">No sabe</option>
          
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-41 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Se cuenta con una RED académica, científica, técnica o tecnológica a nivel nacional e internacional, en la que se revisen temas de inclusión en la educación superior
                        por parte de profesores, estudiantes y directivos de la institución?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="151">Si</option>
                        <option value="152">No</option>
                        <option value="153">No sabe</option>
          
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-42 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Existen productos concretos, como publicaciones, en coautoría en revistas indexadas, con visibilidad e impacto, cofinanciación de proyectos, registros y patentes,
                        entre otros productos de las REDES?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="154">Si</option>
                        <option value="155">No</option>
                        <option value="156">No sabe</option>
          
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-43 innactive">
                <div class="col-lg-8">
                    <div class="col-lg-12">
                            6. ESPACIOS DE INVESTIGACIÓN, INNOVACIÓN Y CREACIÓN ARTÍSTICA
                            Y CULTURAL (INDICADORES 6.1 Y 6.2)</p>
                    </div><hr>
                    <p>1. ¿Existen centros o grupos de investigación en la IES que desarrollen temas relacionados con
                    educación inclusiva y promueven estrategias basadas en los principios institucionales?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="157">Si</option>
                        <option value="158">No</option>
                        <option value="159">No sabe</option>
          
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-44 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Se articulan estos centros, grupos y/o programas con los actores y contextos regionales?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="160">Si</option>
                        <option value="161">No</option>
                        <option value="162">No sabe</option>
          
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-45 innactive">
                <div class="col-lg-8">
                        <p>3. ¿La educación inclusiva está considerada como un eje transversal en los procesos de
                        investigación de la institución?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="163">Si</option>
                        <option value="164">No</option>
                        <option value="165">No sabe</option>
          
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-46 innactive">
                <div class="col-lg-8">
                        <p>4. ¿Los centros, grupos y/o programas promueven la participación de los estudiantes en los
                        procesos de investigación?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="166">Si</option>
                        <option value="167">No</option>
                        <option value="168">No sabe</option>
          
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-47 innactive">
                <div class="col-lg-8">
                        <p>1. ¿La investigación en educación inclusiva en la institución es entendida desde lo interdisciplinar y
                        el diálogo de saberes?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                         <option value="169">Siempre</option>
                         <option value="170">Algunas veces</option>
                         <option value="171">Nunca</option>
                         <option value="172">No Sabe</option>
                </select>  
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-48 innactive">
                <div class="col-lg-8">
                        <p>2. ¿La institución cuenta con el apoyo de expertos en educación inclusiva que le permiten
                        promover el tema de manera adecuada?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                         <option value="175">Siempre</option>
                         <option value="176">Algunas veces</option>
                         <option value="177">Nunca</option>
                         <option value="178">No Sabe</option>
                </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-49 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Los procesos académicos fomentan la creación de semilleros de investigación y líneas de
                        profundización desde un enfoque de educación inclusiva?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                         <option value="181">Siempre</option>
                         <option value="182">Algunas veces</option>
                         <option value="183">Nunca</option>
                         <option value="184">No Sabe</option>
                </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-50 innactive">
                <div class="col-lg-8">
                        <p>4. ¿Participa la IES en convenios interinstitucionales para el desarrollo de investigaciones en el
                        marco de la educación inclusiva?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                         <option value="187">Siempre</option>
                         <option value="188">Algunas veces</option>
                         <option value="189">Nunca</option>
                         <option value="190">No Sabe</option>
                </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-51 innactive">
                <div class="col-lg-8">
                    <div class="col-lg-12">
                            7. PERTINENCIA E IMPACTO SOCIAL (INDICADORES 7.1 Y 7.2)</p>
                    </div><hr>
                    <p>1. ¿Los programas de extensión permiten identificar las problemáticas regionales y articular las
                    actividades académicas con el contexto desde las dimensiones de la educación inclusiva?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="193">Si</option>
                        <option value="194">No</option>
                        <option value="195">No sabe</option>
          
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-52 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Existe en la IES un trabajo de intercambio de experiencias con las comunidades para
                        identificar sus necesidades y potencialidades?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="196">Si</option>
                        <option value="197">No</option>
                        <option value="198">No sabe</option>
          
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-53 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Existen actividades y proyectos sociales tendientes a procurar el bienestar general de la
                        comunidad, teniendo en cuenta sus necesidades regionales y poblacionales?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="199">Si</option>
                        <option value="200">No</option>
                        <option value="201">No sabe</option>
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-54 innactive">
                <div class="col-lg-8">
                        <p>4. ¿La institución promueve la participación de estudiantes y docentes en dichas actividades y
                        proyectos?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="202">Si</option>
                        <option value="203">No</option>
                        <option value="204">No sabe</option>
          
                    </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-55 innactive">
                <div class="col-lg-8">
                        <p>1. ¿La IES cuenta con un sistema de seguimiento a los egresados, a través del cual es posible
                        analizar las dificultades que se encuentran al vincularse al mundo laboral?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="205">Existe Y Se Implementa</option>
                        <option value="206">Existe Y No Se Implementa</option>
                        <option value="207">No Existe</option>
                        <option value="208">No Sabe</option>
                </select>  
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-56 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Este sistema contempla variables de análisis diferenciales por grupos poblaciones?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="209">Existe Y Se Implementa</option>
                        <option value="210">Existe Y No Se Implementa</option>
                        <option value="211">No Existe</option>
                        <option value="212">No Sabe</option>
                </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-57 innactive">
                <div class="col-lg-8">
                        <p>3. ¿La IES contempla, dentro de sus planes de trabajo, el apoyo a egresados que encuentran
                        dificultades para el ingreso al mundo laboral, en especial a los estudiantes indígenas, <br>
                        afrocolombianos, raizales y palenqueros, víctimas del conflicto, desmovilizados y/o en situación
                        de discapacidad?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="213">Existe Y Se Implementa</option>
                        <option value="214">Existe Y No Se Implementa</option>
                        <option value="215">No Existe</option>
                        <option value="216">No Sabe</option>
                </select>   
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-58 innactive">
                <div class="col-lg-8">
                        <p>4. ¿La institución desarrolla estrategias con el sector productivo para fomentar la vinculación
                        laboral de sus estudiantes?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="217">Existe Y Se Implementa</option>
                        <option value="218">Existe Y No Se Implementa</option>
                        <option value="219">No Existe</option>
                        <option value="220">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-59 innactive">
                <div class="col-lg-8">
                    <div class="col-lg-12">
                            8. AUTOEVALUACIÓN Y AUTORREGULACIÓN (INDICADORES 8.1 A 8.3)
                    </div><hr>
                    <p>1. ¿Los procesos de autoevaluación y autorregulación han sido construidos para tener en cuenta <br>
                    los avances y dificultades de la articulación del enfoque de educación inclusiva en la institución?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="221">Siempre</option>
                        <option value="222">Algunas Veces</option>
                        <option value="223">Nunca</option>
                        <option value="224">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-60 innactive">
                <div class="col-lg-8">
                        <p>2. ¿La institución cuenta con un sistema de autoevaluación y autorregulación institucional donde
                        participa toda la comunidad académica, y en especial los estudiantes?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="225">Siempre</option>
                        <option value="226">Algunas Veces</option>
                        <option value="227">Nunca</option>
                        <option value="228">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-1 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Se involucran los diferentes estamentos de la institución en la construcción de estrategias <br> de
                        autoevaluación y autorregulación?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="229">Siempre</option>
                        <option value="230">Algunas Veces</option>
                        <option value="231">Nunca</option>
                        <option value="232">No Sabe</option>
                </select> 
                <div class="button">
                    <button class="fa fa-arrow-right" type="submit"></button>
                </div>
        </div>


        <div class="field-2 innactive">
                <div class="col-lg-8">
                        <p>4. ¿El sistema de autoevaluación y autorregulación es accesible a toda la comunidad académica, y
                        en especial a las personas en situación de discapacidad visual y/o auditiva?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="233">Siempre</option>
                        <option value="234">Algunas Veces</option>
                        <option value="235">Nunca</option>
                        <option value="236">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-3 innactive">
                <div class="col-lg-8">
                        <p>1. ¿Los planes de mejoramiento institucionales surgen de los resultados de las autoevaluaciones y
                        evaluaciones?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="237">Siempre</option>
                        <option value="238">Algunas Veces</option>
                        <option value="239">Nunca</option>
                        <option value="240">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-4 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Los planes de mejoramiento se formulan con el objetivo de articular las prácticas
                        institucionales al enfoque de educación inclusiva?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="241">Siempre</option>
                        <option value="242">Algunas Veces</option>
                        <option value="243">Nunca</option>
                        <option value="244">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-5 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Existen espacios formales e informales en los que se compartan con toda la comunidad <br>
                        académica los resultados de las autoevaluaciones y evaluaciones, y las estrategias de
                        mejoramiento?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="245">Siempre</option>
                        <option value="246">Algunas Veces</option>
                        <option value="247">Nunca</option>
                        <option value="248">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-6 innactive">
                <div class="col-lg-8">
                        <p>1. ¿La información obtenida del sistema se utiliza como fundamento para mejorar los procesos de
                        educación inclusiva en la institución?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="249">Existe Y Se Implementa</option>
                        <option value="250">Existe Y No Se Implementa</option>
                        <option value="251">No Existe</option>
                        <option value="252">No Sabe</option>
                </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-7 innactive">
                <div class="col-lg-8">
                        <p>2. ¿La información institucional está disponible para todos?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="253">Existe Y Se Implementa</option>
                        <option value="254">Existe Y No Se Implementa</option>
                        <option value="255">No Existe</option>
                        <option value="256">No Sabe</option>
                </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-8 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Existen mecanismos de validación de la información y se dice quiénes participan en estos?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="257">Existe Y Se Implementa</option>
                        <option value="258">Existe Y No Se Implementa</option>
                        <option value="259">No Existe</option>
                        <option value="260">No Sabe</option>
                </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-9 innactive">
                <div class="col-lg-8">
                        <p>4. ¿Cumple este sistema con las condiciones de accesibilidad, en especial para los miembros de la
                        comunidad en situación de discapacidad?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="261">Existe Y Se Implementa</option>
                        <option value="262">Existe Y No Se Implementa</option>
                        <option value="263">No Existe</option>
                        <option value="264">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-10 innactive">
                <div class="col-lg-8">
                    <div class="col-lg-12">
                            9. BIENESTAR INSTITUCIONAL (INDICADORES 9.1 Y 9.2)
                    </div><hr>
                    <p>1. ¿El contenido de los programas de bienestar universitario tiene como base las características de
                    la educación inclusiva?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="265">Siempre</option>
                        <option value="266">Algunas Veces</option>
                        <option value="267">Nunca</option>
                        <option value="268">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-11 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Se implementan estrategias accesibles para que todos los estudiantes conozcan e identifiquen
                        los programas de bienestar universitario, <br> como parte central de la política institucional (y no
                        como algo complementario)?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="269">Siempre</option>
                        <option value="270">Algunas Veces</option>
                        <option value="271">Nunca</option>
                        <option value="272">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-12 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Existen acciones definidas enfocadas a mejorar la calidad de vida y la formación integral de los
                        estudiantes, teniendo como referente sus particularidades?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="273">Siempre</option>
                        <option value="274">Algunas Veces</option>
                        <option value="275">Nunca</option>
                        <option value="276">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-13 innactive">
                <div class="col-lg-8">
                        <p>1. ¿La IES cuenta con mecanismos de seguimiento académico de los estudiantes con el fin de
                        identificar los riesgos asociados a la deserción?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="277">Siempre</option>
                        <option value="278">Algunas Veces</option>
                        <option value="279">Nunca</option>
                        <option value="280">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-14 innactive">
                <div class="col-lg-8">
                        <p>2. ¿La IES diseña estrategias de nivelación académica de los estudiantes teniendo en cuenta sus
                        particularidades sociales, económicas, políticas, culturales, lingüísticas, físicas y geográficas?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="281">Siempre</option>
                        <option value="282">Algunas Veces</option>
                        <option value="283">Nunca</option>
                        <option value="284">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-15 innactive">
                <div class="col-lg-8">
                        <p>3. ¿La IES adelanta estrategias de orientación socio-ocupacional con los estudiantes?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="285">Siempre</option>
                        <option value="286">Algunas Veces</option>
                        <option value="287">Nunca</option>
                        <option value="288">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-16 innactive">
                <div class="col-lg-8">
                    <div class="col-lg-12">
                            10. ORGANIZACIÓN, GESTIÓN Y ADMINISTRACIÓN (INDICADORES 10.1 Y 10.2)
                    </div><hr>
                    <p>1. ¿Las procesos administrativos reflejan los objetivos de la política institucional evocada en
                            los indicadores del factor <br> “misión y proyecto institucional”?; es decir, ¿están articulados para
                            eliminar las barreras propias del sistema y atender las particularidades de los estudiantes?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="289">Siempre</option>
                        <option value="290">Algunas Veces</option>
                        <option value="291">Nunca</option>
                        <option value="292">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-17 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Existen mecanismos que garanticen la participación de la comunidad académica en la <br>
                        construcción y evaluación de estos procesos?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="293">Siempre</option>
                        <option value="294">Algunas Veces</option>
                        <option value="295">Nunca</option>
                        <option value="296">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-18 innactive">
                <div class="col-lg-8">
                        <p>3. ¿El personal administrativo encargado de llevar estos procesos tiene conocimiento de lo que
                        representa la educación inclusiva <br> para la institución y está cualificado para promoverla en su
                        trabajo?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="297">Siempre</option>
                        <option value="298">Algunas Veces</option>
                        <option value="299">Nunca</option>
                        <option value="300">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-19 innactive">
                <div class="col-lg-8">
                        <p>4. ¿El lenguaje institucional que se utiliza en estos procesos es coherente con los conceptos que
                        caracterizan la educación inclusiva?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="301">Siempre</option>
                        <option value="302">Algunas Veces</option>
                        <option value="303">Nunca</option>
                        <option value="304">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>5. ¿La institución realiza procesos de gestión, como convenios de cooperación, intercambios
                        estudiantiles, alianzas estratégicas, con organizaciones e instituciones <br> de educación superior
                        (nacionales o internacionales) para promover acciones de educación inclusiva? </p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="305">Siempre</option>
                        <option value="306">Algunas Veces</option>
                        <option value="307">Nunca</option>
                        <option value="308">No Sabe</option>
                </select> 
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>1. ¿La estructura organizacional permite la participación de toda la comunidad académica, en
                        especial la de los estudiantes?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="309">Si</option>
                        <option value="310">No</option>
                        <option value="311">No Sabe</option>
                </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Se tienen en cuenta las buenas prácticas de instituciones pares sobre educación inclusiva para
                        mejorar la estructura organizacional de la institución?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="312">Si</option>
                        <option value="313">No</option>
                        <option value="314">No Sabe</option>
                </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>3. ¿La institución adapta su estructura organizacional teniendo en cuenta la diversidad de su
                        comunidad académica?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="315">Si</option>
                        <option value="316">No</option>
                        <option value="317">No Sabe</option>
                </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>4. ¿La educación inclusiva se identifica como un eje transversal en la estructura organizacional?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="318">Si</option>
                        <option value="319">No</option>
                        <option value="320">No Sabe</option>
                </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-20 innactive">
                <div class="col-lg-8">
                    <div class="col-lg-12">11. RECURSOS DE APOYO ACADÉMICO E INFRAESTRUCTURA
                        FÍSICA (INDICADORES 11.1 Y 11.2)
                    </div><hr>
                    <p>1. ¿Se tienen en cuenta las opiniones y necesidades de la comunidad académica para la
                    adecuación de instalaciones, recursos académicos y físicos necesarios?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="321">Siempre</option>
                        <option value="322">Algunas Veces</option>
                        <option value="323">Nunca</option>
                        <option value="324">No Sabe</option>
                </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Existe un estudio que permita identificar si las adecuaciones físicas de la institución favorecen
                        el desarrollo de procesos académicos inclusivos?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="325">Siempre</option>
                        <option value="326">Algunas Veces</option>
                        <option value="327">Nunca</option>
                        <option value="328">No Sabe</option>
                </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Se desarrollan los acompañamientos requeridos para que todo estudiante pueda hacer uso de
                        los recursos, equipos y espacios de práctica?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="329">Siempre</option>
                        <option value="330">Algunas Veces</option>
                        <option value="331">Nunca</option>
                        <option value="332">No Sabe</option>
                </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>4. ¿La institución desarrolla programas de uso y apropiación de los equipos y medios educativos
                        con toda la comunidad académica <br> (y no exclusivamente con aquellas personas que requieren
                        estos equipos y medios)?</p>
                </div>
                <select class="form-control" name="prrespid">
                        <option value="">Seleccione</option>
                        <option value="333">Siempre</option>
                        <option value="334">Algunas Veces</option>
                        <option value="335">Nunca</option>
                        <option value="336">No Sabe</option>
                </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <div class="col-lg-12">
                            12. RECURSOS FINANCIEROS (INDICADORES 12.1 Y 12.2)
                        </div><hr>
                            <p>1. ¿Las estrategias de educación inclusiva y los recursos relacionados son una prioridad en la
                            agenda institucional?</p>
                </div>
                        <select class="form-control" name="prrespid">
                            <option value="">Seleccione</option>
                            <option value="337">Siempre</option>
                            <option value="338">Algunas Veces</option>
                            <option value="339">Nunca</option>
                            <option value="340">No Sabe</option>
                        </select>
                <div class="button">
                    <button class="fa fa-arrow-right" type="submit"></button>
                </div>
        </div>



        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>2. ¿En sus ejercicios de planeación, la institución contempla la destinación de recursos para
                        favorecer la educación inclusiva?</p>
                </div>
                    <select class="form-control" name="prrespid">
                            <option value="">Seleccione</option>
                            <option value="341">Siempre</option>
                            <option value="342">Algunas Veces</option>
                            <option value="343">Nunca</option>
                            <option value="344">No Sabe</option>
                    </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>3. ¿Concurren actores externos para el financiamiento de las estrategias institucionales de
                        educación inclusiva?</p>
                </div>
                    <select class="form-control" name="prrespid">
                            <option value="">Seleccione</option>
                            <option value="345">Siempre</option>
                            <option value="346">Algunas Veces</option>
                            <option value="347">Nunca</option>
                            <option value="348">No Sabe</option>
                    </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>4. ¿Existe un mecanismo que permita garantizar la implementación y la sostenibilidad financiera
                        de los programas, <br> estrategias y proyectos para promover la educación inclusiva en la
                        institución?</p>
                </div>
                    <select class="form-control" name="prrespid">
                            <option value="">Seleccione</option>
                            <option value="349">Siempre</option>
                            <option value="350">Algunas Veces</option>
                            <option value="351">Nunca</option>
                            <option value="352">No Sabe</option>
                    </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>1. ¿La institución desarrolla una caracterización para identificar las dificultades económicas de los
                        estudiantes?</p>
                </div>
                    <select class="form-control" name="prrespid">
                            <option value="">Seleccione</option>
                            <option value="353">Siempre</option>
                            <option value="354">Algunas Veces</option>
                            <option value="355">Nunca</option>
                            <option value="356">No Sabe</option>
                    </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>


        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>2. ¿Existen políticas institucionales que faciliten el acceso y la permanencia de los estudiantes en
                        términos financieros <br> para apoyar gastos de sostenimiento, fotocopias, libros, herramientas de
                        trabajo, entre otros?</p>
                </div>
                    <select class="form-control" name="prrespid">
                            <option value="">Seleccione</option>
                            <option value="357">Siempre</option>
                            <option value="358">Algunas Veces</option>
                            <option value="359">Nunca</option>
                            <option value="360">No Sabe</option>
                    </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>3. ¿La institución dispone de un fondo específico para este tipo de financiación?</p>
                </div>
                    <select class="form-control" name="prrespid">
                            <option value="">Seleccione</option>
                            <option value="361">Siempre</option>
                            <option value="362">Algunas Veces</option>
                            <option value="363">Nunca</option>
                            <option value="364">No Sabe</option>
                    </select>
            <div class="button">
                <button class="fa fa-arrow-right" type="submit"></button>
            </div>
        </div>



        <div class="field-20 innactive">
                <div class="col-lg-8">
                        <p>4. ¿La institución cuenta con profesionales de apoyo, como intérpretes, tutores, lectores y guías
                        que favorecen el acceso y la permanencia de los estudiantes que lo requieran?</p>
                </div>
                    <select class="form-control" name="prrespid">
                            <option value="">Seleccione</option>
                            <option value="365">Siempre</option>
                            <option value="366">Algunas Veces</option>
                            <option value="367">Nunca</option>
                            <option value="368">No Sabe</option>
                    </select>
                    <div>
                        <input class="btn btn-success form-control" type="submit" value="Guardar y Enviar">
                    </div>
        </div>


    {{-- </form> --}}

    <script src="{{asset("/js/validarencuesta.js")}}" type="text/javascript"></script>
</body>
</html>