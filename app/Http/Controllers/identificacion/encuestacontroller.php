<?php

namespace App\Http\Controllers\identificacion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\cabeceraencuesta;
use App\models\datogenerales;
use App\models\encuesta;
use App\models\usuario;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\ParameterBag;
use Illuminate\Support\Arr; //instancia la clase array

class encuestacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encuesta =DB::table('prresp')->join('cuerpoencuestadiligenciada','prresp.id','=','cuerpoencuestadiligenciada.prrespid')
        ->join('cabencuestadiligenciada','cuerpoencuestadiligenciada.cabEncuestaDilid','=','cabencuestadiligenciada.id')
        ->join('respuesta','prresp.respuestaid','=','respuesta.id')->join('pregunta','pregunta.id','=','prresp.preguntaid')
        ->select('cuerpoencuestadiligenciada.cabEncuestaDilid','pregunta.descrpPregunta','respuesta.descrpRespuesta')->get();
        return view('administracion.Encuesta.listar',compact('encuesta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $rol = usuario::create($request->all());
        $roles=$rol->rolid;
       $dato = datogenerales::create([
           'institucionid' => $request['institucionid'],
           'rolid' =>$roles,
           'edad' => $request['edad'],
           'generoid' =>$request['generoid'],
           'cargo' => $request['cargo'],
           'dependencia' =>$request['dependencia'],
           'antinst' => $request['antinst'],
           'antcargo' =>$request['antcargo'],
           'facultad' => $request['facultad'],
           'departamento' =>$request['departamento'],
           'vinculacion' => $request['vinculacion'],
           'horasemana' =>$request['horasemana'],
           'carrera' => $request['carrera'],
           'semestre' =>$request['semestre'],
           'semestreing' => $request['semestreing'],
           'ingreso' =>$request['ingreso'],
       ]);
       $datos = $dato->id;
       $cab = cabeceraencuesta::create([
           'dtoGnelid' =>$datos,
       ]);

        $idcab = $cab->id;
      
        
        for ($i=1;$i<96;$i++) { 

        
        $value =Arr::get($request, $i);
        
        DB::table('cuerpoencuestadiligenciada')->insert([
            'cabEncuestaDilid' =>$idcab,
            'prrespid'=>$value,
           ]);

        }
       
        
        



    //     }
    //    return view('inicio.inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }


    public function filtro()
    {
        $fem = DB::table('datogenerales')->select('generoid')->where('generoid','=','1')->count();
        $mas = DB::table('datogenerales')->select('generoid')->where('generoid','=','2')->count();
        $otro = DB::table('datogenerales')->select('generoid')->where('generoid','=','3')->count();
        $cab = DB::table('cabencuestadiligenciada')->select('id')->count();
        return view('administracion.Encuesta.filtrar',compact('cab','fem','mas','otro'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
