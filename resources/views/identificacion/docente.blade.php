<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('/css/estilo.css')}}">
        <script src="{{asset("/js/jquery.js")}}"></script>
        <script src="{{asset("/js/multipasos.js")}}"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Docente</title>
    </head>
<body>

    @include('theme.navEnc')

    <form method="POST" id="test" class="form-group">
        <div class="col-lg-3"></div>

      <fieldset id="first" class="col-lg-12 estilo">
        <legend class="text-center alert-success">Datos generales</legend>
         <div class="col-lg6"><h3>Facultad</h3></div>
         <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" placeholder="Digita tu facultad" id="facultad">
                    </div>
                    <div class="col-md-3"></div>
                </div>
          <input class="next_btn btn btn-info form-control espacio" type="button" value="Siguiente" />
    </fieldset>

    <fieldset class="col-lg-12 estilo">
        <legend class="text-center alert-success">Datos generales</legend>
         <div class="col-lg6"><h3>Departamento</h3></div>
         <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" placeholder="Digita el departamento" id="departamento">
                    </div>
                    <div class="col-md-3"></div>
                </div>
          <input class="next_btn btn btn-info form-control espacio" type="button" value="Siguiente" />
    </fieldset>

    <fieldset class="col-lg-12 estilo">
        <legend class="text-center alert-success">Datos generales</legend>
         <div class="col-lg6"><h3>Tipo de vinculacion</h3></div>
         <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" placeholder="Tipo de vinculacion" id="vinculacion">
                    </div>
                    <div class="col-md-3"></div>
                </div>
          <input class="next_btn btn btn-info form-control espacio" type="button" value="Siguiente" />
    </fieldset>

    <fieldset class="col-lg-12 estilo">
        <legend class="text-center alert-success">Datos generales</legend>
         <div class="col-lg6"><h3>Horas a la semana</h3></div>
         <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" placeholder="Ingresa las horas laboradas" id="horaslab">
                    </div>
                    <div class="col-md-3"></div>
                </div>
          <input class="next_btn btn btn-info form-control espacio" type="button" value="Siguiente" />
    </fieldset>



    <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">Encuesta</legend>
             <div class="col-lg6">
               <p>La primera parte de la encuesta hace referencia al factor identificado como
                1. MISIÓN Y PROYECTO INSTITUCIONAL (INDICADORES 1.1 Y 1.2)</p>
             </div>
             <input class="next_btn btn btn-info form-control espacio" type="button" value="Siguiente" />
        </fieldset>


        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">1.1. BARRERAS PARA EL APRENDIZAJE Y LA PARTICIPACIÓN</legend>
           <div class="col-lg6">
             <p>1. ¿Contemplan la misión y el proyecto de la institución las seis características de la educación inclusiva
                pensando en la eliminación de estas barreras? </p>
           </div>
           <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Existe y Se Implementa</option>
               <option value="2">Existe y No Se Implementa</option>
               <option value="3">No Existe</option>
               <option value="4">No Sabe</option>

             </select>
      </fieldset>


      <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">1.1. BARRERAS PARA EL APRENDIZAJE Y LA PARTICIPACIÓN</legend>
           <div class="col-lg6">
             <p>2. ¿Existe en la institución una instancia responsable de examinar cuáles son estas barreras? </p>
           </div>
           <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Existe y Se Implementa</option>
               <option value="2">Existe y No Se Implementa</option>
               <option value="3">No Existe</option>
               <option value="4">No Sabe</option>

             </select>
      </fieldset>


      <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">1.1. BARRERAS PARA EL APRENDIZAJE Y LA PARTICIPACIÓN</legend>
           <div class="col-lg6">
             <p>3. Si estas barreras han sido identificadas, <br>
               ¿se han implementado estrategias concretas para su eliminación </p>
           </div>
           <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Existe y Se Implementa</option>
               <option value="2">Existe y No Se Implementa</option>
               <option value="3">No Existe</option>
               <option value="4">No Sabe</option>

             </select>
      </fieldset>


      <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">1.1. BARRERAS PARA EL APRENDIZAJE Y LA PARTICIPACIÓN</legend>
           <div class="col-lg6">
             <p>4. ¿Cuenta la institución con un acto administrativo o una resolución que priorice las particularidades
               sociales, económicas, políticas, culturales, lingüísticas, físicas y geográficas de sus estudiantes,
              con el fin de facilitar el acceso y la permanencia? </p>
           </div>
           <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Existe y Se Implementa</option>
               <option value="2">Existe y No Se Implementa</option>
               <option value="3">No Existe</option>
               <option value="4">No Sabe</option>

             </select>
      </fieldset>


      <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">1.2. IDENTIFICACIÓN Y CARACTERIZACIÓN DE ESTUDIANTES DESDE LA EDUCACIÓN INCLUSIVA</legend>
           <div class="col-lg6">
             <p>1. ¿Cuenta la institución con estudios sobre las condiciones de su población estudiantil <br>
               (sociales, económicas, políticas, culturales, lingüísticas, físicas y geográficas) <br>
               y usa esta información para desarrollar estrategias de educación inclusiva? </p>
           </div>
           <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Siempre</option>
               <option value="2">Algunas veces</option>
               <option value="3">Nunca</option>
               <option value="4">No Sabe</option>

             </select>
      </fieldset>



      <fieldset class="col-lg-12 estilo">
        <legend class="text-center alert-success">1.2. IDENTIFICACIÓN Y CARACTERIZACIÓN DE ESTUDIANTES DESDE LA EDUCACIÓN INCLUSIVA</legend>
         <div class="col-lg6">
             <p>2. ¿La identificación y caracterización estudiantil es una prioridad para determinar <br>
               a los estudiantes más proclives a ser excluidos del sistema? </p>
           </div>
           <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Siempre</option>
               <option value="2">Algunas veces</option>
               <option value="3">Nunca</option>
               <option value="4">No Sabe</option>

             </select>
      </fieldset>


      <fieldset class="col-lg-12 estilo">
        <legend class="text-center alert-success">1.2. IDENTIFICACIÓN Y CARACTERIZACIÓN DE ESTUDIANTES DESDE LA EDUCACIÓN INCLUSIVA</legend>
         <div class="col-lg6">
             <p>3. ¿Recoge y sistematiza la institución, en los procesos de matrícula, <br>
               información sobre las condiciones particulares de sus estudiantes? </p>
           </div>
           <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Siempre</option>
               <option value="2">Algunas veces</option>
               <option value="3">Nunca</option>
               <option value="4">No Sabe</option>

             </select>
      </fieldset>


      <fieldset class="col-lg-12 estilo">
        <legend class="text-center alert-success">1.2. IDENTIFICACIÓN Y CARACTERIZACIÓN DE ESTUDIANTES DESDE LA EDUCACIÓN INCLUSIVA</legend>
         <div class="col-lg6">
             <p>4. ¿Existen documentos de análisis institucionales <br>
               sobre los resultados de los estudios de identificación y caracterización estudiantil? </p>
           </div>
           <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Siempre</option>
               <option value="2">Algunas veces</option>
               <option value="3">Nunca</option>
               <option value="4">No Sabe</option>

             </select>
      </fieldset>


      <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">Encuesta</legend>
           <div class="col-lg6">
             <p>La segunda parte de la encuesta hace referencia al factor identificado como <br>
                2. ESTUDIANTES (INDICADORES 2.1 Y 2.2)
           </div>
           <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
      </fieldset>


      <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">2.1. PARTICIPACIÓN DE ESTUDIANTES</legend>
           <div class="col-lg6">
             <p>1. ¿La participación de los estudiantes en la institución está identificada de manera explícita <br>
                en la política institucional?</p>
           </div>
           <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Existe y Se Implementa</option>
               <option value="2">Existe y No Se Implementa</option>
               <option value="3">No Existe</option>
               <option value="4">No Sabe</option>

             </select>
      </fieldset>


      <fieldset class="col-lg-12 estilo">
        <legend class="text-center alert-success">2.1. PARTICIPACIÓN DE ESTUDIANTES</legend>
         <div class="col-lg6">
           <p>2. ¿Desempeñan los estudiantes un rol activo en el desarrollo de la política institucional?</p>
         </div>
         <select class="form-control col-lg-6 next">
            <option value="">Seleccione</option>
             <option value="1">Existe y Se Implementa</option>
             <option value="2">Existe y No Se Implementa</option>
             <option value="3">No Existe</option>
             <option value="4">No Sabe</option>

           </select>
    </fieldset>


          <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">2.1. PARTICIPACIÓN DE ESTUDIANTES</legend>
            <div class="col-lg6">
              <p>3. ¿Existen mecanismos de participación para que los estudiantes <br>
                elijan los contenidos y las estrategias de enseñanza y aprendizaje en pro de la educación inclusiva?</p>
            </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                 <option value="1">Existe y Se Implementa</option>
                 <option value="2">Existe y No Se Implementa</option>
                 <option value="3">No Existe</option>
                 <option value="4">No Sabe</option>

               </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">2.1. PARTICIPACIÓN DE ESTUDIANTES</legend>
          <div class="col-lg6">
            <p>4. ¿Garantiza la institución la participación de todos los estudiantes, <br>
              teniendo en cuenta sus particularidades sociales, económicas, políticas, culturales, lingüísticas, físicas <br>
                y geográficas?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Existe y Se Implementa</option>
               <option value="2">Existe y No Se Implementa</option>
               <option value="3">No Existe</option>
               <option value="4">No Sabe</option>

             </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">2.2. ADMISIÓN, PERMANENCIA Y SISTEMAS DE ESTÍMULOS Y CRÉDITOS PARA ESTUDIANTES</legend>
          <div class="col-lg6">
            <p>1. ¿Existen apoyos que garanticen la aplicación equitativa y transparente de los criterios para la admisión <br>
              y permanencia de los estudiantes, especialmente aquellos que tienen una condición de vulnerabilidad?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Existe y Se Implementa</option>
               <option value="2">Existe y No Se Implementa</option>
               <option value="3">No Existe</option>
               <option value="4">No Sabe</option>

             </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">2.2. ADMISIÓN, PERMANENCIA Y SISTEMAS DE ESTÍMULOS Y CRÉDITOS PARA ESTUDIANTES</legend>
          <div class="col-lg6">
            <p>2. ¿Existen estrategias que garanticen la inclusión de los estudiantes a la institución sin importar su condición?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Existe y Se Implementa</option>
               <option value="2">Existe y No Se Implementa</option>
               <option value="3">No Existe</option>
               <option value="4">No Sabe</option>

             </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">2.2. ADMISIÓN, PERMANENCIA Y SISTEMAS DE ESTÍMULOS Y CRÉDITOS PARA ESTUDIANTES</legend>
          <div class="col-lg6">
            <p>3. ¿Existen análisis sobre la deserción de estudiantes, sus causas y posibles estrategias para garantizar su permanencia en condiciones de calidad?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Existe y Se Implementa</option>
               <option value="2">Existe y No Se Implementa</option>
               <option value="3">No Existe</option>
               <option value="4">No Sabe</option>

             </select>
        </fieldset>



        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">2.2. ADMISIÓN, PERMANENCIA Y SISTEMAS DE ESTÍMULOS Y CRÉDITOS PARA ESTUDIANTES</legend>
          <div class="col-lg6">
            <p>4. ¿Se cuenta con una divulgación de los sistemas de crédito, subsidios, becas y estímulos?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Existe y Se Implementa</option>
               <option value="2">Existe y No Se Implementa</option>
               <option value="3">No Existe</option>
               <option value="4">No Sabe</option>

             </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">2.2. ADMISIÓN, PERMANENCIA Y SISTEMAS DE ESTÍMULOS Y CRÉDITOS PARA ESTUDIANTES</legend>
          <div class="col-lg6">
            <p>5. ¿Existe un procedimiento claro de control para garantizar que los estudiantes beneficiados con los apoyos <br>
              institucionales hagan buen uso de estos en los tiempos previstos para su graduación?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Existe y Se Implementa</option>
               <option value="2">Existe y No Se Implementa</option>
               <option value="3">No Existe</option>
               <option value="4">No Sabe</option>

             </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">Encuesta</legend>
          <div class="col-lg6">
            <p>La tercera parte de la encuesta hace referencia al factor identificado como <br>
              3. PROFESORES (INDICADORES 3.1 Y 3.2)
          </div>
          <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>



        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">3.1. PARTICIPACIÓN DE DOCENTES</legend>
          <div class="col-lg6">
            <p>1. ¿La participación de los docentes en la institución está identificada de manera explícita en la política institucional?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Existe y Se Implementa</option>
               <option value="2">Existe y No Se Implementa</option>
               <option value="3">No Existe</option>
               <option value="4">No Sabe</option>

             </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">3.1. PARTICIPACIÓN DE DOCENTES</legend>
          <div class="col-lg6">
            <p>2. ¿Existen mecanismos de participación para que los docentes elijan los contenidos y las estrategias <br>
              de enseñanza y aprendizaje en pro de la educación inclusiva?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Existe y Se Implementa</option>
               <option value="2">Existe y No Se Implementa</option>
               <option value="3">No Existe</option>
               <option value="4">No Sabe</option>

             </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">3.1. PARTICIPACIÓN DE DOCENTES</legend>
          <div class="col-lg6">
            <p>3. ¿Garantiza la institución la participación de todos los docentes, teniendo en cuenta sus particularidades <br>
              sociales, económicas, políticas, culturales, lingüísticas, físicas y geográficas?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
               <option value="1">Existe y Se Implementa</option>
               <option value="2">Existe y No Se Implementa</option>
               <option value="3">No Existe</option>
               <option value="4">No Sabe</option>

             </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">3.2. DOCENTES INCLUSIVOS</legend>
          <div class="col-lg6">
            <p>1. ¿Existen lineamientos institucionales que definan las cualidades del “docente inclusivo”?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Siempre</option>
              <option value="2">Algunas Veces</option>
              <option value="3">Nunca</option>
              <option value="4">No Sabe</option>
      </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">3.2. DOCENTES INCLUSIVOS</legend>
          <div class="col-lg6">
            <p>2. ¿Se comparten estrategias pedagógicas y metodológicas de educación inclusiva entre los docentes para ser aplicadas <br>
              en los procesos académicos, y promueve la institución la retroalimentación de estas estrategias?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Siempre</option>
              <option value="2">Algunas Veces</option>
              <option value="3">Nunca</option>
              <option value="4">No Sabe</option>
      </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">3.2. DOCENTES INCLUSIVOS</legend>
          <div class="col-lg6">
            <p>3. ¿Cuentan los docentes con procesos de formación permanente sobre educación inclusiva <br>
              y atención a la diversidad, independientemente de su tipo de vinculación y área del conocimiento?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Siempre</option>
              <option value="2">Algunas Veces</option>
              <option value="3">Nunca</option>
              <option value="4">No Sabe</option>
      </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">3.2. DOCENTES INCLUSIVOS</legend>
          <div class="col-lg6">
            <p>4. ¿Los docentes evidencian y valoran en sus estrategias de enseñanza la diversidad de sus estudiantes?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Siempre</option>
              <option value="2">Algunas Veces</option>
              <option value="3">Nunca</option>
              <option value="4">No Sabe</option>
      </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">Encuesta</legend>
          <div class="col-lg6">
            <p>La cuarta parte de la encuesta hace referencia al factor identificado como <br>
              4. PROCESOS ACADÉMICOS (INDICADORES 4.1 Y 4.2)
          </div>
          <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>



        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">4.1. INTERDISCIPLINARIEDAD Y FLEXIBILIDAD CURRICULAR</legend>
          <div class="col-lg6">
            <p>1. ¿Contemplan los currículos metodologías flexibles en atención a la diversidad para la enseñanza y aprendizaje?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Siempre</option>
              <option value="2">Algunas Veces</option>
              <option value="3">Nunca</option>
              <option value="4">No Sabe</option>
      </select>
        </fieldset>



        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">4.1. INTERDISCIPLINARIEDAD Y FLEXIBILIDAD CURRICULAR</legend>
          <div class="col-lg6">
            <p>2. ¿Implementan los planes de estudio didácticas innovadoras que tienen en cuenta las particularidades de los estudiantes en los procesos <br>
              de aprendizaje y desarrollo de sus capacidades?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Siempre</option>
              <option value="2">Algunas Veces</option>
              <option value="3">Nunca</option>
              <option value="4">No Sabe</option>
      </select>
        </fieldset>



        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">4.1. INTERDISCIPLINARIEDAD Y FLEXIBILIDAD CURRICULAR</legend>
          <div class="col-lg6">
            <p>3. ¿Los currículos se flexibilizan de acuerdo con las particularidades del entorno y los <br>
              contextos regionales, desde una perspectiva interdisciplinar?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Siempre</option>
              <option value="2">Algunas Veces</option>
              <option value="3">Nunca</option>
              <option value="4">No Sabe</option>
      </select>
        </fieldset>



        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">4.1. INTERDISCIPLINARIEDAD Y FLEXIBILIDAD CURRICULAR</legend>
          <div class="col-lg6">
            <p>4. ¿La utilización de las TIC en el desarrollo de los currículos permite facilitar el aprendizaje <br>
              y la participación de todos los estudiantes?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Siempre</option>
              <option value="2">Algunas Veces</option>
              <option value="3">Nunca</option>
              <option value="4">No Sabe</option>
      </select>
        </fieldset>



        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">4.1. INTERDISCIPLINARIEDAD Y FLEXIBILIDAD CURRICULAR</legend>
          <div class="col-lg6">
            <p>5. ¿Existe un servicio de apoyo pedagógico reconocido –tutorías, cursos de nivelación, entre otros– <br>
              para todos los estudiantes que lo requieran?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Siempre</option>
              <option value="2">Algunas Veces</option>
              <option value="3">Nunca</option>
              <option value="4">No Sabe</option>
      </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">4.2. EVALUACIÓN FLEXIBLE</legend>
          <div class="col-lg6">
            <p>1. ¿Los procesos de evaluación implementan estrategias y/o herramientas diferenciales de apoyo que <br>
              permiten lograr la equidad entre los estudiantes?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Siempre</option>
              <option value="2">Algunas Veces</option>
              <option value="3">Nunca</option>
              <option value="4">No Sabe</option>
      </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">4.2. EVALUACIÓN FLEXIBLE</legend>
          <div class="col-lg6">
            <p>2. ¿Las herramientas de evaluación son socializadas y concertadas con estudiantes y docentes antes de ser <br>
              implementadas, con el fin de tener en cuenta la diversidad?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Existe Y Se Implementa</option>
              <option value="2">Existe Y No Se Implementa</option>
              <option value="3">No Existe</option>
              <option value="4">No Sabe</option>
          </select>
        </fieldset>



        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">4.2. EVALUACIÓN FLEXIBLE</legend>
          <div class="col-lg6">
            <p>3. ¿Se evidencia la importancia de la evaluación flexible en la política institucional?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Existe Y Se Implementa</option>
              <option value="2">Existe Y No Se Implementa</option>
              <option value="3">No Existe</option>
              <option value="4">No Sabe</option>
          </select>
        </fieldset>



        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">4.2. EVALUACIÓN FLEXIBLE</legend>
          <div class="col-lg6">
            <p>4. ¿Existen lineamientos institucionales que orienten al docente sobre el diseño y la implementación de una evaluación flexible?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Existe Y Se Implementa</option>
              <option value="2">Existe Y No Se Implementa</option>
              <option value="3">No Existe</option>
              <option value="4">No Sabe</option>
          </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">Encuesta</legend>
          <div class="col-lg6">
            <p>La quinta parte de la encuesta hace referencia al factor identificado como <br>
              5. VISIBILIDAD NACIONAL E INTERNACIONAL (INDICADORES 5.1 Y 5.2)
          </div>
          <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>


        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">5.1. INSERCIÓN DE LA INSTITUCIÓN EN CONTEXTOS ACADÉMICOS NACIONALES E INTERNACIONALE</legend>
          <div class="col-lg6">
            <p>1. ¿Existe y aplica políticas institucionales en materia de referentes académicos externos, nacionales <br>
              e internacionales, de reconocida calidad para la revisión y actualización de los planes de estudio?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Si</option>
              <option value="2">No</option>
              <option value="3">No sabe</option>

            </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">5.1. INSERCIÓN DE LA INSTITUCIÓN EN CONTEXTOS ACADÉMICOS NACIONALES E INTERNACIONALE</legend>
          <div class="col-lg6">
            <p>2. ¿Existe análisis sistemático realizado por la institución frente a temas de inclusión con respecto a otras instituciones nacionales e <br>
              internacionales para realizar acciones y planes de mejoramiento</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Si</option>
              <option value="2">No</option>
              <option value="3">No sabe</option>

            </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">5.1. INSERCIÓN DE LA INSTITUCIÓN EN CONTEXTOS ACADÉMICOS NACIONALES E INTERNACIONALE</legend>
          <div class="col-lg6">
            <p>3. ¿Existen proyectos de investigación, innovación, creación artística y cultural y/o proyección –de acuerdo con la <br>
              naturaleza de la institución– desarrollados como producto de la cooperación académica y profesional, realizada <br>
              por directivos, profesores y estudiantes de la institución, con miembros de comunidades <br>
              nacionales e internacionales de reconocido liderazgo en temas específicos de inclusión?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Si</option>
              <option value="2">No</option>
              <option value="3">No sabe</option>

            </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">5.1. INSERCIÓN DE LA INSTITUCIÓN EN CONTEXTOS ACADÉMICOS NACIONALES E INTERNACIONALE</legend>
          <div class="col-lg6">
            <p>4. ¿Se cuenta con evidencias del impacto social que ha generado la inserción de la institución en los contextos académicos <br>
              nacionales e internacionales en cuanto a temas de inclusión?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Si</option>
              <option value="2">No</option>
              <option value="3">No sabe</option>

            </select>
        </fieldset>


        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">5.1. INSERCIÓN DE LA INSTITUCIÓN EN CONTEXTOS ACADÉMICOS NACIONALES E INTERNACIONALE</legend>
          <div class="col-lg6">
            <p>5. ¿Existe alianzas interinstitucionales para compartir recursos, impulsar procesos misionales <br>
              y buenas prácticas de inclusión?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Si</option>
              <option value="2">No</option>
              <option value="3">No sabe</option>

            </select>
        </fieldset>



        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">5.2. RELACIONES EXTERNAS DE PROFESORES Y ESTUDIANTES</legend>
          <div class="col-lg6">
            <p>1. ¿Existen convenios con enfoque de inclusión activos de intercambio con instituciones de educación superior nacionales y extranjeras de alta calidad y reconocimiento?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Si</option>
              <option value="2">No</option>
              <option value="3">No sabe</option>

            </select>
        </fieldset>



        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">5.2. RELACIONES EXTERNAS DE PROFESORES Y ESTUDIANTES</legend>
          <div class="col-lg6">
            <p>2. ¿Se cuenta con una RED académica, científica, técnica o tecnológica a nivel nacional e internacional, en la que se revisen temas de inclusión en la educación superior <br>
              por parte de profesores, estudiantes y directivos de la institución?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Si</option>
              <option value="2">No</option>
              <option value="3">No sabe</option>

            </select>
        </fieldset>



        <fieldset class="col-lg-12 estilo">
          <legend class="text-center alert-success">5.2. RELACIONES EXTERNAS DE PROFESORES Y ESTUDIANTES</legend>
          <div class="col-lg6">
            <p>3. ¿Existen productos concretos, como publicaciones, en coautoría en revistas indexadas, con visibilidad e impacto, cofinanciación de proyectos, registros y patentes, <br>
              entre otros productos de las REDES?</p>
          </div>
          <select class="form-control col-lg-6 next">
              <option value="">Seleccione</option>
              <option value="1">Si</option>
              <option value="2">No</option>
              <option value="3">No sabe</option>

            </select>
        </fieldset>




        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">ENCUESTA</legend>
             <div class="col-lg6">
                 <p>La sexta parte de la encuesta hace referencia al factor identificado como
                    6. ESPACIOS DE INVESTIGACIÓN, INNOVACIÓN Y CREACIÓN ARTÍSTICA
                    Y CULTURAL (INDICADORES 6.1 Y 6.2)</p>
             </div>
             <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">6.1. INVESTIGACIÓN, INNOVACIÓN Y CREACIÓN ARTÍSTICA Y CULTURAL EN EDUCACIÓN INCLUSIVA</legend>
             <div class="col-lg6">
                 <p>1. ¿Existen centros o grupos de investigación en la IES que desarrollen temas relacionados con
                        educación inclusiva y promueven estrategias basadas en los principios institucionales?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Siempre</option>
                <option value="2">Algunas Veces</option>
                <option value="3">Nunca</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">6.1. INVESTIGACIÓN, INNOVACIÓN Y CREACIÓN ARTÍSTICA Y CULTURAL EN EDUCACIÓN INCLUSIVA</legend>
             <div class="col-lg6">
                 <p>2. ¿Se articulan estos centros, grupos y/o programas con los actores y contextos regionales?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Siempre</option>
                <option value="2">Algunas Veces</option>
                <option value="3">Nunca</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">6.1. INVESTIGACIÓN, INNOVACIÓN Y CREACIÓN ARTÍSTICA Y CULTURAL EN EDUCACIÓN INCLUSIVA</legend>
             <div class="col-lg6">
                 <p>3. ¿La educación inclusiva está considerada como un eje transversal en los procesos de
                    investigación de la institución?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Siempre</option>
                <option value="2">Algunas Veces</option>
                <option value="3">Nunca</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">6.1. INVESTIGACIÓN, INNOVACIÓN Y CREACIÓN ARTÍSTICA Y CULTURAL EN EDUCACIÓN INCLUSIVA</legend>
             <div class="col-lg6">
                 <p>4. ¿Los centros, grupos y/o programas promueven la participación de los estudiantes en los
                    procesos de investigación?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Siempre</option>
                <option value="2">Algunas Veces</option>
                <option value="3">Nunca</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">6.2. ARTICULACIÓN DE LA EDUCACIÓN INCLUSIVA CON LOS PROCESOS DE INVESTIGACIÓN, INNOVACIÓN Y CREACIÓN ARTÍSTICA Y CULTURAL</legend>
             <div class="col-lg6">
                 <p>1. ¿La investigación en educación inclusiva en la institución es entendida desde lo interdisciplinar y
                    el diálogo de saberes?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">6.2. ARTICULACIÓN DE LA EDUCACIÓN INCLUSIVA CON LOS PROCESOS DE INVESTIGACIÓN, INNOVACIÓN Y CREACIÓN ARTÍSTICA Y CULTURAL</legend>
             <div class="col-lg6">
                 <p>2. ¿La institución cuenta con el apoyo de expertos en educación inclusiva que le permiten
                    promover el tema de manera adecuada?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">6.2. ARTICULACIÓN DE LA EDUCACIÓN INCLUSIVA CON LOS PROCESOS DE INVESTIGACIÓN, INNOVACIÓN Y CREACIÓN ARTÍSTICA Y CULTURAL</legend>
             <div class="col-lg6">
                 <p>3. ¿Los procesos académicos fomentan la creación de semilleros de investigación y líneas de
                    profundización desde un enfoque de educación inclusiva?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">6.2. ARTICULACIÓN DE LA EDUCACIÓN INCLUSIVA CON LOS PROCESOS DE INVESTIGACIÓN, INNOVACIÓN Y CREACIÓN ARTÍSTICA Y CULTURAL</legend>
             <div class="col-lg6">
                 <p>4. ¿Participa la IES en convenios interinstitucionales para el desarrollo de investigaciones en el
                    marco de la educación inclusiva?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">ENCUESTA</legend>
             <div class="col-lg6">
                 <p>La septima parte de la encuesta hace referencia al factor identificado como
                    7. PERTINENCIA E IMPACTO SOCIAL (INDICADORES 7.1 Y 7.2)</p>
             </div>
             <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">7.1. EXTENSIÓN, PROYECCIÓN SOCIAL Y CONTEXTO REGIONAL</legend>
             <div class="col-lg6">
                 <p>1. ¿Los programas de extensión permiten identificar las problemáticas regionales y articular las
                    actividades académicas con el contexto desde las dimensiones de la educación inclusiva?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Siempre</option>
                <option value="2">Algunas Veces</option>
                <option value="3">Nunca</option>
                <option value="4">No Sabe</option>
        </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">7.1. EXTENSIÓN, PROYECCIÓN SOCIAL Y CONTEXTO REGIONAL</legend>
             <div class="col-lg6">
                 <p>2. ¿Existe en la IES un trabajo de intercambio de experiencias con las comunidades para
                    identificar sus necesidades y potencialidades?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Siempre</option>
                <option value="2">Algunas Veces</option>
                <option value="3">Nunca</option>
                <option value="4">No Sabe</option>
        </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">7.1. EXTENSIÓN, PROYECCIÓN SOCIAL Y CONTEXTO REGIONAL</legend>
             <div class="col-lg6">
                 <p>3. ¿Existen actividades y proyectos sociales tendientes a procurar el bienestar general de la
                    comunidad, teniendo en cuenta sus necesidades regionales y poblacionales?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Siempre</option>
                <option value="2">Algunas Veces</option>
                <option value="3">Nunca</option>
                <option value="4">No Sabe</option>
        </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">7.1. EXTENSIÓN, PROYECCIÓN SOCIAL Y CONTEXTO REGIONAL</legend>
             <div class="col-lg6">
                 <p>4. ¿La institución promueve la participación de estudiantes y docentes en dichas actividades y
                    proyectos?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Siempre</option>
                <option value="2">Algunas Veces</option>
                <option value="3">Nunca</option>
                <option value="4">No Sabe</option>
        </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">7.2. SEGUIMIENTO Y APOYO A VINCULACIÓN LABORAL</legend>
             <div class="col-lg6">
                 <p>1. ¿La IES cuenta con un sistema de seguimiento a los egresados, a través del cual es posible
                    analizar las dificultades que se encuentran al vincularse al mundo laboral?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Existe Y Se Implementa</option>
                <option value="2">Existe Y No Se Implementa</option>
                <option value="3">No Existe</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">7.2. SEGUIMIENTO Y APOYO A VINCULACIÓN LABORAL</legend>
             <div class="col-lg6">
                 <p>2. ¿Este sistema contempla variables de análisis diferenciales por grupos poblaciones?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Existe Y Se Implementa</option>
                <option value="2">Existe Y No Se Implementa</option>
                <option value="3">No Existe</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">7.2. SEGUIMIENTO Y APOYO A VINCULACIÓN LABORAL</legend>
             <div class="col-lg6">
                 <p>3. ¿La IES contempla, dentro de sus planes de trabajo, el apoyo a egresados que encuentran
                    dificultades para el ingreso al mundo laboral, en especial a los estudiantes indígenas,
                    afrocolombianos, raizales y palenqueros, víctimas del conflicto, desmovilizados y/o en situación
                    de discapacidad?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Existe Y Se Implementa</option>
                <option value="2">Existe Y No Se Implementa</option>
                <option value="3">No Existe</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">7.2. SEGUIMIENTO Y APOYO A VINCULACIÓN LABORAL</legend>
             <div class="col-lg6">
                 <p>4. ¿La institución desarrolla estrategias con el sector productivo para fomentar la vinculación
                    laboral de sus estudiantes?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Existe Y Se Implementa</option>
                <option value="2">Existe Y No Se Implementa</option>
                <option value="3">No Existe</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">ENCUESTA</legend>
             <div class="col-lg6">
                 <p>La octava parte de la encuesta hace referencia al factor identificado como
                    8. AUTOEVALUACIÓN Y AUTORREGULACIÓN (INDICADORES 8.1 A 8.3)</p>
             </div>
             <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">8.1. PROCESOS DE AUTOEVALUACIÓN Y AUTORREGULACIÓN CON ENFOQUE DE EDUCACIÓN INCLUSIVA </legend>
             <div class="col-lg6">
                 <p>1. ¿Los procesos de autoevaluación y autorregulación han sido construidos para tener en cuenta
                    los avances y dificultades de la articulación del enfoque de educación inclusiva en la institución?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">8.1. PROCESOS DE AUTOEVALUACIÓN Y AUTORREGULACIÓN CON ENFOQUE DE EDUCACIÓN INCLUSIVA </legend>
             <div class="col-lg6">
                 <p>2. ¿La institución cuenta con un sistema de autoevaluación y autorregulación institucional donde
                    participa toda la comunidad académica, y en especial los estudiantes?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">8.1. PROCESOS DE AUTOEVALUACIÓN Y AUTORREGULACIÓN CON ENFOQUE DE EDUCACIÓN INCLUSIVA </legend>
             <div class="col-lg6">
                 <p>3. ¿Se involucran los diferentes estamentos de la institución en la construcción de estrategias de
                    autoevaluación y autorregulación?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">8.1. PROCESOS DE AUTOEVALUACIÓN Y AUTORREGULACIÓN CON ENFOQUE DE EDUCACIÓN INCLUSIVA </legend>
             <div class="col-lg6">
                 <p>4. ¿El sistema de autoevaluación y autorregulación es accesible a toda la comunidad académica, y
                    en especial a las personas en situación de discapacidad visual y/o auditiva?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">8.2. ESTRATEGIAS DE MEJORAMIENTO</legend>
             <div class="col-lg6">
                 <p>1. ¿Los planes de mejoramiento institucionales surgen de los resultados de las autoevaluaciones y
                    evaluaciones?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">8.2. ESTRATEGIAS DE MEJORAMIENTO</legend>
             <div class="col-lg6">
                 <p>2. ¿Los planes de mejoramiento se formulan con el objetivo de articular las prácticas
                    institucionales al enfoque de educación inclusiva?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">8.2. ESTRATEGIAS DE MEJORAMIENTO</legend>
             <div class="col-lg6">
                 <p>3. ¿Existen espacios formales e informales en los que se compartan con toda la comunidad
                    académica los resultados de las autoevaluaciones y evaluaciones, y las estrategias de
                    mejoramiento?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">8.3. SISTEMA DE INFORMACIÓN INCLUSIVO</legend>
             <div class="col-lg6">
                 <p>1. ¿La información obtenida del sistema se utiliza como fundamento para mejorar los procesos de
                    educación inclusiva en la institución?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Existe Y Se Implementa</option>
                <option value="2">Existe Y No Se Implementa</option>
                <option value="3">No Existe</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">8.3. SISTEMA DE INFORMACIÓN INCLUSIVO</legend>
             <div class="col-lg6">
                 <p>2. ¿La información institucional está disponible para todos?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Existe Y Se Implementa</option>
                <option value="2">Existe Y No Se Implementa</option>
                <option value="3">No Existe</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">8.3. SISTEMA DE INFORMACIÓN INCLUSIVO</legend>
             <div class="col-lg6">
                 <p>3. ¿Existen mecanismos de validación de la información y se dice quiénes participan en estos?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Existe Y Se Implementa</option>
                <option value="2">Existe Y No Se Implementa</option>
                <option value="3">No Existe</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">8.3. SISTEMA DE INFORMACIÓN INCLUSIVO</legend>
             <div class="col-lg6">
                 <p>4. ¿Cumple este sistema con las condiciones de accesibilidad, en especial para los miembros de la
                    comunidad en situación de discapacidad?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Existe Y Se Implementa</option>
                <option value="2">Existe Y No Se Implementa</option>
                <option value="3">No Existe</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">ENCUESTA</legend>
             <div class="col-lg6">
                 <p>La novena parte de la encuesta hace referencia al factor identificado como
                    9. BIENESTAR INSTITUCIONAL (INDICADORES 9.1 Y 9.2)</p>
             </div>
             <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">9.1. PROGRAMAS DE BIENESTAR UNIVERSITARIO</legend>
             <div class="col-lg6">
                 <p>1. ¿El contenido de los programas de bienestar universitario tiene como base las características de
                    la educación inclusiva?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">9.1. PROGRAMAS DE BIENESTAR UNIVERSITARIO</legend>
             <div class="col-lg6">
                 <p>2. ¿Se implementan estrategias accesibles para que todos los estudiantes conozcan e identifiquen
                    los programas de bienestar universitario, como parte central de la política institucional (y no
                    como algo complementario)?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">9.1. PROGRAMAS DE BIENESTAR UNIVERSITARIO</legend>
             <div class="col-lg6">
                 <p>3. ¿Existen acciones definidas enfocadas a mejorar la calidad de vida y la formación integral de los
                    estudiantes, teniendo como referente sus particularidades?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">9.2. PERMANENCIA ESTUDIANTIL</legend>
             <div class="col-lg6">
                 <p>1. ¿La IES cuenta con mecanismos de seguimiento académico de los estudiantes con el fin de
                    identificar los riesgos asociados a la deserción?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">9.2. PERMANENCIA ESTUDIANTIL</legend>
             <div class="col-lg6">
                 <p>2. ¿La IES diseña estrategias de nivelación académica de los estudiantes teniendo en cuenta sus
                    particularidades sociales, económicas, políticas, culturales, lingüísticas, físicas y geográficas?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">9.2. PERMANENCIA ESTUDIANTIL</legend>
             <div class="col-lg6">
                 <p>3. ¿La IES adelanta estrategias de orientación socio-ocupacional con los estudiantes?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">ENCUESTA</legend>
             <div class="col-lg6">
                 <p>La decima parte de la encuesta hace referencia al factor identificado como
                    10. ORGANIZACIÓN, GESTIÓN Y ADMINISTRACIÓN (INDICADORES 10.1 Y 10.2)</p>
             </div>
             <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">10.1. PROCESOS ADMINISTRATIVOS Y DE GESTIÓN FLEXIBLES</legend>
             <div class="col-lg6">
                 <p>1. ¿Las procesos administrativos reflejan los objetivos de la política institucional evocada en
                    los indicadores del factor “misión y proyecto institucional”?; es decir, ¿están articulados para
                    eliminar las barreras propias del sistema y atender las particularidades de los estudiantes?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">10.1. PROCESOS ADMINISTRATIVOS Y DE GESTIÓN FLEXIBLES</legend>
             <div class="col-lg6">
                 <p>2. ¿Existen mecanismos que garanticen la participación de la comunidad académica en la
                    construcción y evaluación de estos procesos?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">10.1. PROCESOS ADMINISTRATIVOS Y DE GESTIÓN FLEXIBLES</legend>
             <div class="col-lg6">
                 <p>3. ¿El personal administrativo encargado de llevar estos procesos tiene conocimiento de lo que
                    representa la educación inclusiva para la institución y está cualificado para promoverla en su
                    trabajo?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">10.1. PROCESOS ADMINISTRATIVOS Y DE GESTIÓN FLEXIBLES</legend>
             <div class="col-lg6">
                 <p>4. ¿El lenguaje institucional que se utiliza en estos procesos es coherente con los conceptos que
                    caracterizan la educación inclusiva?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">10.1. PROCESOS ADMINISTRATIVOS Y DE GESTIÓN FLEXIBLES</legend>
             <div class="col-lg6">
                 <p>5. ¿La institución realiza procesos de gestión, como convenios de cooperación, intercambios
                    estudiantiles, alianzas estratégicas, con organizaciones e instituciones de educación superior
                    (nacionales o internacionales) para promover acciones de educación inclusiva? </p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">10.2. ESTRUCTURA ORGANIZACIONAL </legend>
             <div class="col-lg6">
                 <p>1. ¿La estructura organizacional permite la participación de toda la comunidad académica, en
                    especial la de los estudiantes?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Siempre</option>
                <option value="2">Algunas Veces</option>
                <option value="3">Nunca</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">10.2. ESTRUCTURA ORGANIZACIONAL </legend>
             <div class="col-lg6">
                 <p>2. ¿Se tienen en cuenta las buenas prácticas de instituciones pares sobre educación inclusiva para
                    mejorar la estructura organizacional de la institución?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Siempre</option>
                <option value="2">Algunas Veces</option>
                <option value="3">Nunca</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">10.2. ESTRUCTURA ORGANIZACIONAL </legend>
             <div class="col-lg6">
                 <p>3. ¿La institución adapta su estructura organizacional teniendo en cuenta la diversidad de su
                    comunidad académica?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Siempre</option>
                <option value="2">Algunas Veces</option>
                <option value="3">Nunca</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">10.2. ESTRUCTURA ORGANIZACIONAL </legend>
             <div class="col-lg6">
                 <p>4. ¿La educación inclusiva se identifica como un eje transversal en la estructura organizacional?</p>
             </div>
            <select class="form-control col-lg-6 next">
                <option value="">Seleccione</option>
                <option value="1">Siempre</option>
                <option value="2">Algunas Veces</option>
                <option value="3">Nunca</option>
                <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">ENCUESTA</legend>
             <div class="col-lg6">
                 <p>La onceava parte de la encuesta hace referencia al factor identificado como
                    11. RECURSOS DE APOYO ACADÉMICO E INFRAESTRUCTURA
                    FÍSICA (INDICADORES 11.1 Y 11.2)</p>
             </div>
             <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">11.1 RECURSOS, EQUIPOS Y ESPACIOS DE PRÁCTICA</legend>
             <div class="col-lg6">
                 <p>1. ¿Se tienen en cuenta las opiniones y necesidades de la comunidad académica para la
                    adecuación de instalaciones, recursos académicos y físicos necesarios?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">11.1 RECURSOS, EQUIPOS Y ESPACIOS DE PRÁCTICA</legend>
             <div class="col-lg6">
                 <p>2. ¿Existe un estudio que permita identificar si las adecuaciones físicas de la institución favorecen
                    el desarrollo de procesos académicos inclusivos?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">11.1 RECURSOS, EQUIPOS Y ESPACIOS DE PRÁCTICA</legend>
             <div class="col-lg6">
                 <p>3. ¿Se desarrollan los acompañamientos requeridos para que todo estudiante pueda hacer uso de
                    los recursos, equipos y espacios de práctica?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">11.1 RECURSOS, EQUIPOS Y ESPACIOS DE PRÁCTICA</legend>
             <div class="col-lg6">
                 <p>4. ¿La institución desarrolla programas de uso y apropiación de los equipos y medios educativos
                    con toda la comunidad académica (y no exclusivamente con aquellas personas que requieren
                    estos equipos y medios)?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        {{-- <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">11.2 INSTALACIONES E INFRAESTRUCTURA</legend>
             <div class="col-lg6">
                 <p>1. ¿La institución conoce y aplica la normatividad de accesibilidad y diseño universal para la
                    participación de toda la comunidad académica?</p>
             </div>
            <select class="form-control col-lg-3 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">11.2 INSTALACIONES E INFRAESTRUCTURA</legend>
             <div class="col-lg6">
                 <p>2. ¿Dentro de los planes institucionales existe una línea específica para el mejoramiento y
                    accesibilidad de la infraestructura?</p>
             </div>
            <select class="form-control col-lg-3 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">11.2 INSTALACIONES E INFRAESTRUCTURA</legend>
             <div class="col-lg6">
                 <p>3. ¿Se cuenta con un plan de mejoramiento orientado a eliminar específicamente las barreras de
                    acceso de la infraestructura institucional?</p>
             </div>
            <select class="form-control col-lg-3 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">11.2 INSTALACIONES E INFRAESTRUCTURA</legend>
             <div class="col-lg6">
                 <p>4. ¿Se tiene en cuenta la necesidad de la comunidad académica para el diseño de la política
                    encaminada a reducir las barreras de acceso?</p>
             </div>
            <select class="form-control col-lg-3 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset> --}}

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">ENCUESTA</legend>
             <div class="col-lg6">
                 <p>La doceava parte de la encuesta hace referencia al factor identificado como
                    12. RECURSOS FINANCIEROS (INDICADORES 12.1 Y 12.2)</p>
             </div>
             <input class="next_btn btn btn-info form-control" type="button" value="Siguiente" />
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">12.1. PROGRAMAS DE EDUCACIÓN INCLUSIVA SOSTENIBLES</legend>
             <div class="col-lg6">
                 <p>1. ¿Las estrategias de educación inclusiva y los recursos relacionados son una prioridad en la
                    agenda institucional?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">12.1. PROGRAMAS DE EDUCACIÓN INCLUSIVA SOSTENIBLES</legend>
             <div class="col-lg6">
                 <p>2. ¿En sus ejercicios de planeación, la institución contempla la destinación de recursos para
                    favorecer la educación inclusiva?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">12.1. PROGRAMAS DE EDUCACIÓN INCLUSIVA SOSTENIBLES</legend>
             <div class="col-lg6">
                 <p>3. ¿Concurren actores externos para el financiamiento de las estrategias institucionales de
                    educación inclusiva?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">12.1. PROGRAMAS DE EDUCACIÓN INCLUSIVA SOSTENIBLES</legend>
             <div class="col-lg6">
                 <p>4. ¿Existe un mecanismo que permita garantizar la implementación y la sostenibilidad financiera
                    de los programas, estrategias y proyectos para promover la educación inclusiva en la
                    institución?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">12.2. APOYO FINANCIERO A ESTUDIANTES</legend>
             <div class="col-lg6">
                 <p>1. ¿La institución desarrolla una caracterización para identificar las dificultades económicas de los
                    estudiantes?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">12.2. APOYO FINANCIERO A ESTUDIANTES</legend>
             <div class="col-lg6">
                 <p>2. ¿Existen políticas institucionales que faciliten el acceso y la permanencia de los estudiantes en
                    términos financieros para apoyar gastos de sostenimiento, fotocopias, libros, herramientas de
                    trabajo, entre otros?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">12.2. APOYO FINANCIERO A ESTUDIANTES</legend>
             <div class="col-lg6">
                 <p>3. ¿La institución dispone de un fondo específico para este tipo de financiación?</p>
             </div>
            <select class="form-control col-lg-6 next">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
        </fieldset>

        <fieldset class="col-lg-12 estilo">
            <legend class="text-center alert-success">12.2. APOYO FINANCIERO A ESTUDIANTES</legend>
             <div class="col-lg6">
                 <p>4. ¿La institución cuenta con profesionales de apoyo, como intérpretes, tutores, lectores y guías
                    que favorecen el acceso y la permanencia de los estudiantes que lo requieran?</p>
             </div>
            <select class="form-control col-lg-6">
                    <option value="">Seleccione</option>
                    <option value="1">Siempre</option>
                    <option value="2">Algunas Veces</option>
                    <option value="3">Nunca</option>
                    <option value="4">No Sabe</option>
            </select>
            <input class="submit_btn btn btn-success form-control espacio" type="submit" value="Guardar y Enviar">
        </fieldset>

    </form>

</body>
</html>
