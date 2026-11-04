<?php

namespace App\Http\Controllers\Slim;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Auth;

use Illuminate\Pagination\Paginator;

use App\Controllers\BaseController;
use App\Models\LlamadoSeleccion;
use App\Models\Parametro;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;



class LlamadoSeleccionSLIMController extends Controller{
    
    public function index(Request $request){
        $hoy = Carbon::now(); //Aquí se obtiene la fecha de hoy
        $llamadosSeleccionVigentes = LlamadoSeleccion::where('fin_inscripcion','>', $hoy)->where('activo',true)->orderBy('fin_inscripcion')->get();
        $cantVigentes = $llamadosSeleccionVigentes->count();
        $llamadosSeleccionFinalizados = LlamadoSeleccion::where('fin_inscripcion','<=', $hoy)->where('activo',true)->orderByDesc('fin_inscripcion')->get();
        $cantFinalizados = $llamadosSeleccionFinalizados->count();
        return view('app.slim.docentes.llamadosSeleccion.index',compact('llamadosSeleccionVigentes','llamadosSeleccionFinalizados','cantVigentes','cantFinalizados'));
    }

    public function show(Request $request, $id ){
        $hoy = Carbon::now(); //Aquí se obtiene la fecha de hoy
       
        $llamadoSeleccion = LlamadoSeleccion::findOrFail($id);
        if ($llamadoSeleccion->fin_inscripcion > $hoy){
            $vencido = false;
        }else{
            $vencido = true;
        }
        $URLResolucion = '/files/'.$llamadoSeleccion->resolucion;
        $URLActa = '/files/'.$llamadoSeleccion->acta_final;

        If(!$llamadoSeleccion->activo && !Auth::check()){
            return redirect()->route('index');
        }

        return view('app.slim.docentes.llamadosSeleccion.show',compact('llamadoSeleccion','vencido','URLResolucion','URLActa'));
    }

}