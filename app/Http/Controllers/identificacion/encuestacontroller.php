<?php

namespace App\Http\Controllers\identificacion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\cabeceraencuesta;
use App\models\datogenerales;
use App\models\encuesta;
use App\models\usuario;

class encuestacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
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
           'fechaNacimiento' => $request['fechaNacimiento'],
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
       encuesta::create([
           'cabEncuestaDilid' =>$idcab,
           'prrespid' =>$request['prrespid'],
       ]);


       return view('inicio.inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
