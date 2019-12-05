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
        $doc = usuario::create($request->all());
       $dato = datogenerales::create($request->all());
       $datos = $dato->id;
       $cab = cabeceraencuesta::create([
           'dtoGnelid' =>$datos,
       ]);

       $idcab = $cab->id;
       encuesta::create([
           'cabEncuestaDilid' =>$idcab,
           'prrespid' =>$request['prrespid'],
           'prresp2id' =>$request['prresp2id'],
           'prresp3id' =>$request['prresp3id'],
           'prresp4id' =>$request['prresp4id'],
       ]);
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
