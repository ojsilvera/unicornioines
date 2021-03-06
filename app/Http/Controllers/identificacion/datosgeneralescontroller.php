<?php

namespace App\Http\Controllers\identificacion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\validardatogeneral;
use App\Http\Requests\validarusuario;
use App\models\cabeceraencuesta;
use App\models\datogenerales;
use App\models\genero;
use App\models\inst;
use App\models\rol;
use App\models\tpdoc;
use App\models\usuario;

class datosgeneralescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rol = rol::all();
        return view('identificacion.datos generales', compact('rol'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inst = inst::all();
        return view('identificacion.datos generales', compact('inst'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=$request->doc;
        $rol = $request->rolid;
        $inst = inst::all();
        $doc = tpdoc::all();
        $genero = genero::all();
        $rol = rol::all();
        
         if($request->rolid == 1){
            return view('identificacion.docente', compact('inst','doc','genero','rol','user'));
         }elseif($request->rolid == 2){
            return view('identificacion.estudiante', compact('inst','doc','genero','rol','user'));
         }elseif($request->rolid == 3){
            return view('identificacion.administrativo', compact('inst','doc','genero','rol','user'));
         }
        //  return redirect('estudiante/identificacion');
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
