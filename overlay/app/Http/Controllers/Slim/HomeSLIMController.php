<?php

namespace App\Http\Controllers\Slim;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Parametro;
use App\Models\ProgramasInstitucionales;
use App\Http\Controllers\Controller;
use App\Models\Eventos;
use Carbon\Carbon;

class HomeSLIMController extends Controller{ 
    public function getIndex(Request $request, $args){

        $programas_institucionales = ProgramasInstitucionales::where('tipo','=','Programa institucional')->where('active',true)->get();
        $catedras = ProgramasInstitucionales::where('tipo','=','Cátedra libre')->where('active',true)->get();
        $eventos = Eventos::where('fecha_inicio','>=',new Date())->orderBy('fecha_inicio')->take(3)->get();
        $BaseURL = "/files/";
        return view('index', [
            'catedras' => $catedras, 
            'programas_institucionales' => $programas_institucionales,
            'BaseURL' => $BaseURL,
            'eventos' => $eventos
        ],
        );
    }

    public function getInstitutes(Request $request){
        $user = array();
        
        return view('app.slim.research-institutes',compact('user'));
    }

    public function getAboutUs(Request $request){
        $user = array();
        
        return view('app.slim.about_us',compact('user'));
    }
    public function getCiencias_educacion(Request $request){
        $user = array();
        
        return view('app.slim.departamentos.ciencias_educacion',compact('user'));
    }
    public function getEducacion_inicial(Request $request){
        $user = array();
        
        return view('app.slim.departamentos.educacion_inicial',compact('user'));
    }
    public function getEducacion_primaria(Request $request){
        $user = array();
        
        return view('app.slim.departamentos.educacion_primaria',compact('user'));
    }
    

}




