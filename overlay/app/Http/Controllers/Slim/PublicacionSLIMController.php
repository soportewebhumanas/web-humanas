<?php

namespace App\Http\Controllers\Slim;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use Illuminate\Pagination\Paginator;
use App\Models\Publicacion;
use App\Models\Parametro;
use Illuminate\Support\Facades\DB;



class PublicacionSLIMController extends Controller{
    
    public function index(Request $request){
        $publicacionesPeriodicas = Publicacion::where('activo',true)->where('esPeriodica','SI')->orderBy('created_at')->get();
        $publicacionesNOPeriodicas = Publicacion::where('activo',true)->where('esPeriodica','NO')->orderBy('created_at','desc')->get();
        $BaseURL = '/files/';
        return view('app.slim.publicaciones.index',compact('publicacionesPeriodicas','publicacionesNOPeriodicas','BaseURL'));
    }

    public function show(Request $request, $id){
        $publicacion = Publicacion::findOrFail($id);
        $BaseURL = '/files/';
        $URL = $BaseURL->valor.$publicacion->resolucion;
        return view('app.slim.publicaciones.show',compact('publicacion','URL'));
    }

    public function datosPublicacion(){
        $publicacion = Publicacion::where('id',$_POST['id'])->first();
        return json_encode($publicacion);
        
    }

}