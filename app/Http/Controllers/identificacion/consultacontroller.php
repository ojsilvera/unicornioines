<?php

namespace App\Http\Controllers\identificacion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\genero;
use App\models\inst;
use App\models\rol;
use App\models\tpdoc;
use App\models\usuario;

class consultacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $doc = tpdoc::all();
        $rol = rol::all();
        $genero = genero::all();
        $inst = inst::all();
        $user = usuario::buscar($request->documento)->orderBy('documento', 'DESC')->get()->count();
        if($request->documento == ''){
            echo('');
        }elseif($user>=1){
            echo ('el usuario ya existe');
        }else{
            return view('identificacion.datos generales', compact('doc','rol','genero','inst','user'));
        }
        return view('identificacion.consultar', compact('doc','rol','genero','inst','user'));
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
        //
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
