<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class indicadorseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('indicador')->insert([
            'descrpIndicador' => 'BARRERAS PARA EL APRENDIZAJE Y LA PARTICIPACIÓN',
            'factorId' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('indicador')->insert([
            'descrpIndicador' => 'IDENTIFICACIÓN Y CARACTERIZACIÓN DE ESTUDIANTES DESDE LA EDUCACIÓN INCLUSIVA',
            'factorId' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('indicador')->insert([
            'descrpIndicador' => 'PARTICIPACIÓN DE ESTUDIANTES',
            'factorId' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('indicador')->insert([
            'descrpIndicador' => 'ADMISIÓN, PERMANENCIA Y SISTEMAS DE ESTÍMULOS Y CRÉDITOS PARA ESTUDIANTES',
            'factorId' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('indicador')->insert([
            'descrpIndicador' => 'PARTICIPACIÓN DE DOCENTES',
            'factorId' => '3',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('indicador')->insert([
            'descrpIndicador' => 'DOCENTES INCLUSIVOS',
            'factorId' => '3',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('indicador')->insert([
            'descrpIndicador' => 'INTERDISCIPLINARIEDAD Y FLEXIBILIDAD CURRICULAR',
            'factorId' => '4',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('indicador')->insert([
            'descrpIndicador' => 'EVALUACIÓN FLEXIBLE',
            'factorId' => '4',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('indicador')->insert([
            'descrpIndicador' => 'INSERCIÓN DE LA INSTITUCIÓN EN CONTEXTOS ACADÉMICOS NACIONALES E INTERNACIONALES',
            'factorId' => '5',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('indicador')->insert([
            'descrpIndicador' => 'RELACIONES EXTERNAS DE PROFESORES Y ESTUDIANTES.',
            'factorId' => '5',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('indicador')->insert([
            'descrpIndicador' => 'INVESTIGACIÓN, INNOVACIÓN Y CREACIÓN ARTÍSTICA Y CULTURAL EN EDUCACIÓN INCLUSIVA',
            'factorId' => '6',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('indicador')->insert([
            'descrpIndicador' => 'ARTICULACIÓN DE LA EDUCACIÓN INCLUSIVA CON LOS PROCESOS DE INVESTIGACIÓN, INNOVACIÓN Y CREACIÓN ARTÍSTICA Y CULTURAL',
            'factorId' => '6',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('indicador')->insert([
            'descrpIndicador' => 'EXTENSIÓN, PROYECCIÓN SOCIAL Y CONTEXTO REGIONAL',
            'factorId' => '7',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('indicador')->insert([
            'descrpIndicador' => 'SEGUIMIENTO Y APOYO A VINCULACIÓN LABORAL',
            'factorId' => '7',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('indicador')->insert([
            'descrpIndicador' => 'PROCESOS DE AUTOEVALUACIÓN Y AUTORREGULACIÓN CON ENFOQUE DE EDUCACIÓN INCLUSIVA',
            'factorId' => '8',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('indicador')->insert([
            'descrpIndicador' => 'ESTRATEGIAS DE MEJORAMIENTO',
            'factorId' => '8',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('indicador')->insert([
            'descrpIndicador' => 'SISTEMA DE INFORMACIÓN INCLUSIVO',
            'factorId' => '8',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('indicador')->insert([
            'descrpIndicador' => 'PROCESOS ADMINISTRATIVOS Y DE GESTIÓN FLEXIBLES',
            'factorId' => '9',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('indicador')->insert([
            'descrpIndicador' => 'ESTRUCTURA ORGANIZACIONAL',
            'factorId' => '9',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('indicador')->insert([
            'descrpIndicador' => 'RECURSOS, EQUIPOS Y ESPACIOS DE PRÁCTICA',
            'factorId' => '10',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('indicador')->insert([
            'descrpIndicador' => 'INSTALACIONES E INFRAESTRUCTURA',
            'factorId' => '10',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('indicador')->insert([
            'descrpIndicador' => 'PROGRAMAS DE BIENESTAR UNIVERSITARIO',
            'factorId' => '11',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('indicador')->insert([
            'descrpIndicador' => 'PERMANENCIA ESTUDIANTIL',
            'factorId' => '11',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);




        DB::table('indicador')->insert([
            'descrpIndicador' => 'PROGRAMAS DE EDUCACIÓN INCLUSIVA SOSTENIBLES',
            'factorId' => '12',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('indicador')->insert([
            'descrpIndicador' => 'APOYO FINANCIERO A ESTUDIANTES',
            'factorId' => '12',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}

