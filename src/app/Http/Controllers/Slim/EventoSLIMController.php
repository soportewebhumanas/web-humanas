<?php

namespace App\Http\Controllers\Slim;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;


use App\Http\Resources\calendarResource;

use App\Models\Parametro;
use App\Models\Evento;
use App\Models\TiposEvento;

class EventoSLIMController extends Controller
{
    //buscamos todos los eventos y los pasamos a la vista para listar.
    public function index(Request $request){

        $eventos = Evento::where('active',1)->orderByDesc('fecha_inicio')->get();

        return view('app.slim.eventos.index',['eventos' => $eventos]);
    }

     //buscamos todos los seminarios y los pasamos a la vista para listar.
    public function seminarios(Request $request){

        $tipoSeminiario = TiposEvento::where('nombre','=','Seminario')->first();

        $eventos = Evento::where('active','=',1)->where('tipo_id','=',$tipoSeminiario->id)->orderBy('fecha_inicio', 'desc')->get();

        return view('app.slim.eventos.seminarios',compact('eventos'));
    }

    //funcion para cargar en el calendario los eventos
    public function eventosCalendar(Request $request, Response $response){
        
        $start = new \DateTime($request->start);
        $end = new \DateTime($request->end);
        $eventos = Evento::whereBetween('fecha_inicio',[$start->format('Y-m-d\TH:i:s'), $end->format('Y-m-d\TH:i:s')])->where('active',1)->get();

        //header('Content-Type: application/json');
        calendarResource::withoutWrapping();
        return calendarResource::collection($eventos);
    }

    public function show(Request $request, Evento $actividad){

        $BaseURL = "/files/";

        if(!$actividad->active && !Auth::check()){
            return redirect()->route('index');
        }
        
        return view('app.slim.eventos.show', ['evento' => $actividad,'BaseURL' => $BaseURL]);
    }
}
