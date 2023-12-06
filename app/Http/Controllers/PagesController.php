<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estudiante1;

class PagesController extends Controller
{
    //
    public function fnIndex(){
        return view('welcome');
    }
    public function fnlista (){
        $xAlumnos = Estudiante1::all(); //Datos de BD 
        return view('paglista', compact('xAlumnos'));
    }

    public function fnEstDetalle($id){
        $xDetAlumnos = Estudiante1::findOrFail($id); //Datos de BD por Id
        return view('Estudiante.pagDetalle', compact('xDetAlumnos'));
    }
    public function fnGaleria ($numero=0) {
        $valor = $numero;
        $otro = 25;

        //return view('pagGaleria' ,['valor'=>$numero, 'otro'=>25]);
        return view('pagGaleria', compact('valor','otro'));
    }
}
