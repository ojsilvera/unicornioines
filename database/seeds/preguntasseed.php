<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class preguntasseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Contemplan la misión y el proyecto de la institución las seis características de la educación inclusiva pensando en la eliminación de estas barreras?',
            'factorid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Existe en la institución una instancia responsable de examinar cuáles son estas barreras?',
            'factorid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => 'Si estas barreras han sido identificadas, ¿se han implementado estrategias concretas para su eliminación?',
            'factorid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Cuenta la institución con un acto administrativo o una resolución que priorice las particularidades sociales, económicas, políticas, culturales, lingüísticas, físicas y geográficas de sus estudiantes, con el fin de facilitar el acceso y la permanencia?',
            'factorid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]); 
        
        

        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Cuenta la institución con estudios sobre las condiciones de su población estudiantil (sociales, económicas, políticas, culturales, lingüísticas, físicas y geográficas) y usa esta información para desarrollar estrategias de educación inclusiva?',
            'factorid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿La identificación y caracterización estudiantil es una prioridad para determinar a los estudiantes más proclives a ser excluidos del sistema?',
            'factorid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Recoge y sistematiza la institución, en los procesos de matrícula, información sobre las condiciones particulares de sus estudiantes?',
            'factorid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Existen documentos de análisis institucionales sobre los resultados de los estudios de identificación y caracterización estudiantil?',
            'factorid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿La participación de los estudiantes en la institución está identificada de manera explícita en la política institucional?',
            'factorid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Desempeñan los estudiantes un rol activo en el desarrollo de la política institucional?',
            'factorid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Existen mecanismos de participación para que los estudiantes elijan los contenidos y las estrategias de enseñanza y aprendizaje en pro de la educación inclusiva?',
            'factorid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Garantiza la institución la participación de todos los estudiantes, teniendo en cuenta sus particularidades sociales, económicas, políticas, culturales, lingüísticas, físicas y geográficas?',
            'factorid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Existen apoyos que garanticen la aplicación equitativa y transparente de los criterios para la admisión y permanencia de los estudiantes, especialmente aquellos que tienen una condición de vulnerabilidad?',
            'factorid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Existen  estrategias  que garanticen  la inclusión de los estudiantes  a la institución  sin importar   su condición?',
            'factorid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Existen análisis sobre la deserción de estudiantes, sus causas y posibles estrategias para garantizar su permanencia en condiciones de calidad?',
            'factorid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Se cuenta con una divulgación de los sistemas de crédito, subsidios, becas y estímulos?',
            'factorid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Existe un procedimiento claro de control para garantizar que los estudiantes beneficiados con los apoyos institucionales hagan buen uso de estos en los tiempos previstos para su graduación?',
            'factorid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
        

        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿La participación de los docentes en la institución está identificada de manera explícita en la política institucional?',
            'factorid' => '3',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Existen mecanismos de participación para que los docentes elijan los contenidos y las estrategias de enseñanza y aprendizaje en pro de la educación inclusiva?',
            'factorid' => '3',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Garantiza la institución la participación de todos los docentes, teniendo en cuenta sus particularidades sociales, económicas, políticas, culturales, lingüísticas, físicas y geográficas?',
            'factorid' => '3',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Existen lineamientos institucionales que definan las cualidades del “docente inclusivo”?',
            'factorid' => '3',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Se comparten estrategias pedagógicas y metodológicas de educación inclusiva entre  los docentes para ser aplicadas en los procesos académicos, y promueve la institución la retroalimentación de estas estrategias?',
            'factorid' => '3',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Cuentan los docentes con procesos de formación permanente sobre educación inclusiva  y atención a la diversidad, independientemente de su tipo de vinculación y área del conocimiento?',
            'factorid' => '3',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Los docentes evidencian y valoran en sus estrategias de enseñanza la diversidad de sus estudiantes?',
            'factorid' => '3',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Contemplan los currículos metodologías flexibles en atención a la diversidad para la enseñanza y aprendizaje?',
            'factorid' => '4',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Implementan los planes de estudio didácticas innovadoras que tienen en cuenta las particularidades de los estudiantes en los procesos de aprendizaje y desarrollo de sus capacidades?',
            'factorid' => '4',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>   '¿Los currículos se flexibilizan de acuerdo con las particularidades del entorno y los contextos regionales, desde una perspectiva interdisciplinar?',
            'factorid' => '4',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿La utilización de las TIC en el desarrollo de los currículos permite facilitar el aprendizaje y la participación de todos los estudiantes?',
            'factorid' => '4',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Existe un servicio de apoyo pedagógico reconocido –tutorías, cursos de nivelación, entre otros– para todos los estudiantes que lo requieran?',
            'factorid' => '4',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Los procesos de evaluación implementan estrategias y/o herramientas diferenciales  de apoyo  que permiten lograr la equidad entre los estudiantes?',
            'factorid' => '4',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Las herramientas de evaluación son socializadas y concertadas con estudiantes y docentes antes de ser implementadas, con el fin de tener en cuenta la diversidad?',
            'factorid' => '4',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Se evidencia la importancia de la evaluación flexible en la política institucional?',
            'factorid' => '4',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' =>  '¿Existen lineamientos institucionales que orienten al docente sobre el diseño y la implementación de una evaluación flexible?',
            'factorid' => '4',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Existe y aplica políticas institucionales  en  materia  de  referentes  académicos  externos, nacionales e internacionales, de reconocida calidad para la revisión y actualización  de los planes  de estudio?',
            'factorid' => '5',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Existe análisis sistemático realizado por la institución frente a temas de inclusión con respecto a otras instituciones nacionales e internacionales para realizar acciones y planes de mejora',
            'factorid' => '5',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Existen proyectos de investigación, innovación, creación artística y cultural y/o proyección –de acuerdo con la naturaleza de la institución– desarrollados como producto de la cooperación académica y profesional, realizada por directivos, profesores y estudiantes de la institución
            con miembros de comunidades nacionales e internacionales de reconocido liderazgo en temas específicos de inclusión?',
            'factorid' => '5',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Se cuenta con evidencias del impacto social que ha generado la inserción de la institución en los contextos académicos nacionales e internacionales en cuanto a temas de inclusión?',
            'factorid' => '5',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Existe alianzas interinstitucionales para compartir recursos, impulsar procesos misionales y buenas prácticas de inclusión?',
            'factorid' => '5',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Existen convenios con enfoque de inclusión activos de intercambio con instituciones de educación superior nacionales y extranjeras de alta calidad y reconocimiento?',
            'factorid' => '5',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Se cuenta con una RED académica, científica, técnica o tecnológica a nivel nacional e internacional, en la que se revisen temas de inclusión en la educación superior por parte de profesores, estudiantes y directivos de la institución?',
            'factorid' => '5',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Existen productos concretos, como publicaciones, en coautoría en revistas indexadas, con visibilidad e impacto, cofinanciación de proyectos, registros y patentes, entre otros productos de las REDES?',
            'factorid' => '5',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Existen centros o grupos de investigación en la IES que desarrollen temas relacionados con educación inclusiva y promueven estrategias basadas en los principios institucionales?',
            'factorid' => '6',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Se articulan estos centros, grupos y/o programas con los actores y contextos regionales?',
            'factorid' => '6',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
// 43


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿La educación inclusiva está considerada como un eje transversal en los procesos de investigación de la institución?',
            'factorid' => '6',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        
        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Los centros, grupos y/o programas promueven la participación de los estudiantes en los procesos de investigación?',
            'factorid' => '6',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿La investigación  en educación inclusiva en la institución  es entendida desde lo interdisciplinar  y  el diálogo de saberes?',
            'factorid' => '6',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿La institución cuenta con el apoyo de expertos en educación inclusiva que le permiten promover el tema de manera adecuada?',
            'factorid' => '6',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
        


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Los procesos académicos fomentan la creación de semilleros de investigación y líneas de profundización desde un enfoque de educación inclusiva?',
            'factorid' => '6',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Participa la IES en convenios interinstitucionales para el desarrollo de investigaciones en el marco de la educación inclusiva?',
            'factorid' => '6',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Los programas de extensión permiten identificar las problemáticas regionales y articular las actividades académicas con el contexto desde las dimensiones de la educación inclusiva?',
            'factorid' => '7',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Existe en la IES un trabajo de intercambio de experiencias con las comunidades para identificar sus necesidades y potencialidades?',
            'factorid' => '7',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Existen actividades y proyectos sociales tendientes a procurar el bienestar general de la comunidad, teniendo en cuenta sus necesidades regionales y poblacionales?',
            'factorid' => '7',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿La institución promueve la participación de estudiantes y docentes en dichas actividades y proyectos?',
            'factorid' => '7',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿La IES cuenta con un sistema de seguimiento a los egresados, a través del cual es posible analizar las dificultades que se encuentran al vincularse al mundo laboral?',
            'factorid' => '7',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Este sistema contempla variables de análisis diferenciales por grupos poblaciones?',
            'factorid' => '7',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿La IES contempla, dentro de sus planes de trabajo, el apoyo a egresados que encuentran dificultades para el ingreso al mundo laboral, en especial a los estudiantes indígenas, afrocolombianos, raizales y palenqueros, víctimas del conflicto, desmovilizados y/o en situación  de discapacidad?',
            'factorid' => '7',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿La institución desarrolla estrategias con el sector productivo para fomentar la vinculación laboral de sus estudiantes?',
            'factorid' => '7',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Los procesos de autoevaluación y  autorregulación  han  sido  construidos  para  tener  en  cuenta los avances y dificultades de la articulación del enfoque de educación inclusiva en la institución?',
            'factorid' => '8',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
// 58

        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿La institución cuenta con un sistema de autoevaluación y autorregulación institucional donde participa toda la comunidad académica, y en especial los estudiantes?',
            'factorid' => '8',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Se involucran los diferentes estamentos de la institución en la construcción de estrategias de autoevaluación y autorregulación?',
            'factorid' => '8',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿El sistema de autoevaluación y autorregulación es accesible a toda la comunidad académica, y en especial a las personas en situación de discapacidad visual y/o auditiva?',
            'factorid' => '8',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Los planes de mejoramiento institucionales surgen de los resultados de las autoevaluaciones y evaluaciones?',
            'factorid' => '8',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Los planes de mejoramiento se formulan con el objetivo de articular las prácticas institucionales al enfoque de educación inclusiva?',
            'factorid' => '8',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Existen espacios formales e informales en los que se compartan con toda la comunidad académica los resultados de las autoevaluaciones y evaluaciones, y las estrategias de mejoramiento?',
            'factorid' => '8',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿La información obtenida del sistema se utiliza como fundamento para mejorar los procesos de educación inclusiva en la institución?',
            'factorid' => '8',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿La información institucional está disponible para todos?',
            'factorid' => '8',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>' ¿Existen mecanismos de validación de la información y se dice quiénes participan en estos?',
            'factorid' => '8',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
// 67

        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Cumple este sistema con las condiciones de accesibilidad, en especial para los miembros de la comunidad en situación de discapacidad?',
            'factorid' => '8',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿El contenido de los programas  de bienestar  universitario  tiene como  base las características  de  la educación inclusiva?',
            'factorid' => '9',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' =>'¿Se implementan estrategias accesibles para que todos  los estudiantes  conozcan  e identifiquen los programas de bienestar universitario, como parte central de  la  política  institucional  (y  no como algo complementario)?',
            'factorid' => '9',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Existen acciones definidas enfocadas a mejorar la calidad de vida y la formación integral de los estudiantes, teniendo como referente sus particularidades?',
            'factorid' => '9',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿La IES cuenta con mecanismos de seguimiento académico de los estudiantes con el fin de identificar los riesgos asociados a la deserción?',
            'factorid' => '9',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿La IES diseña estrategias de nivelación académica de los estudiantes teniendo en cuenta sus particularidades sociales, económicas, políticas, culturales, lingüísticas, físicas y geográficas?',
            'factorid' => '9',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
// 73

        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿La IES adelanta estrategias de orientación socio-ocupacional con los estudiantes?',
            'factorid' => '9',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Las procesos administrativos reflejan  los objetivos  de la política institucional evocada en los indicadores del factor “misión y proyecto institucional”?; es decir, ¿están articulados para eliminar las barreras propias del sistema y atender las particularidades de los estudiantes?',
            'factorid' => '10',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Existen mecanismos que garanticen la participación de la comunidad académica en la construcción y evaluación de estos procesos?',
            'factorid' => '10',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿El personal administrativo encargado de llevar estos procesos tiene conocimiento de lo que representa la educación inclusiva para la institución y está cualificado para promoverla en su trabajo?',
            'factorid' => '10',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿El lenguaje institucional que se utiliza en estos procesos es coherente con los conceptos que caracterizan la educación inclusiva?',
            'factorid' => '10',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿La institución realiza procesos de gestión, como convenios de cooperación, intercambios estudiantiles, alianzas estratégicas, con organizaciones e instituciones de educación superior (nacionales o internacionales) para promover acciones de educación inclusiva?',
            'factorid' => '10',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿La estructura organizacional permite la participación de toda la comunidad académica, en especial la de los estudiantes?',
            'factorid' => '10',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
// 80

        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Se tienen en cuenta las buenas prácticas de instituciones pares sobre educación inclusiva para mejorar la estructura organizacional de la institución?',
            'factorid' => '10',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿La institución adapta su estructura organizacional teniendo en cuenta la diversidad de su comunidad académica?',
            'factorid' => '10',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿La educación inclusiva se identifica como un eje transversal en la estructura organizacional?',
            'factorid' => '10',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Se tienen en cuenta las opiniones y necesidades de la comunidad académica para la adecuación de instalaciones, recursos académicos y físicos necesarios?',
            'factorid' => '11',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Existe un estudio que permita identificar si las adecuaciones físicas de la institución favorecen el desarrollo de procesos académicos inclusivos?',
            'factorid' => '11',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

// 85

        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Se desarrollan los acompañamientos requeridos para que todo estudiante pueda hacer uso de los recursos, equipos y espacios de práctica?',
            'factorid' => '11',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿La institución desarrolla programas de uso y apropiación de los equipos y medios educativos con toda la comunidad académica (y no exclusivamente con aquellas personas que requieren estos equipos y medios)',
            'factorid' => '11',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿La institución conoce y aplica la normatividad de accesibilidad y diseño universal para la participación de toda la comunidad académica',
            'factorid' => '11',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Dentro de los planes institucionales existe una línea específica para el mejoramiento y accesibilidad de la infraestructura?',
            'factorid' => '11',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Se cuenta con un plan de mejoramiento orientado a eliminar específicamente las barreras de acceso de la infraestructura institucional?',
            'factorid' => '11',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Se tiene en cuenta la necesidad de la comunidad académica para el diseño de la política encaminada a reducir las barreras de acceso?',
            'factorid' => '11',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Las estrategias de educación inclusiva y los recursos relacionados son una prioridad en la agenda institucional?',
            'factorid' => '12',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿En sus ejercicios de planeación, la institución contempla la destinación de recursos para favorecer la educación inclusiva?',
            'factorid' => '12',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Concurren actores externos para el financiamiento de las estrategias institucionales de educación inclusiva?',
            'factorid' => '12',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Existe un mecanismo que permita  garantizar  la implementación  y la sostenibilidad financiera de los programas, estrategias y proyectos para promover la  educación  inclusiva  en  la institución?',
            'factorid' => '12',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿La institución desarrolla una caracterización para identificar las dificultades económicas de los estudiantes?',
            'factorid' => '12',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿Existen políticas institucionales que faciliten el acceso y la permanencia de los estudiantes en términos financieros para apoyar gastos de sostenimiento, fotocopias, libros, herramientas de trabajo, entre otros?',
            'factorid' => '12',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿La institución dispone de un fondo específico para este tipo de financiación?',
            'factorid' => '12',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('pregunta')->insert([
            'descrpPregunta' => '¿La institución cuenta con profesionales de apoyo, como intérpretes, tutores,  lectores  y guías que favorecen el acceso y la permanencia de los estudiantes que lo requieran?',
            'factorid' => '12',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        
    }
}

