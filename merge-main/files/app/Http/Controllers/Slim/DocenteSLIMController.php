<?php
namespace App\Http\Controllers\Slim;

use Illuminate\Support\Facades\Storage;
use App\Models\Docente;
use App\Models\Parametro;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventoStoreRequest;
use App\Http\Requests\EventoUpdateRequest;

class DocenteSLIMController extends Controller{
    
    public function index(Request $request){
        $itemsInPage = 12;
        $docentes = Docente::orderBy('apellido')->orderBy('Nombre')->take($itemsInPage)->get();
        $pages = Docente::count('id');
        $pages = ceil($pages / $itemsInPage );
       
        $currentPage = 1;
        return view('app/slim/docentes/docentes.index',compact('docentes','pages','currentPage')); 
    }
/*
    public function pagination(Request $request, Response $response, $args){
        $currentPage = $args['page'];
        $itemsInPage = 8;
        $skip = $itemsInPage * ($currentPage -1 );

        $docentes = Docente::orderBy('apellido')->orderBy('Nombre')->skip($skip)->take($itemsInPage)->get();
        $pages = Docente::count('id');
        $pages = ceil($pages / $itemsInPage );
        
        $docentes = Docente::orderBy('apellido')->orderBy('Nombre')->get();
        $BaseURL = Parametro::where('clave','ADMIN_SITE_URL')->FirstOrFail();

        $BaseURL = $BaseURL['valor'];
        return view($response,'docentes/docentes.index',compact('docentes','BaseURL','pages','currentPage')); 
    }
*/

    public function filtrar(){
        $apellido = $_POST['apellido'];
        $nombre =   $_POST['nombre'];
        $asignatura = $_POST['asignatura'];
        $pag = $_POST['page'];

        $currentPage = $pag;
        $itemsInPage = 12;
        $skip = $itemsInPage * ($currentPage -1 );

       
        $docentes = Docente::where('nombre','like',"%".$nombre."%")
            ->where('apellido','like',"%".$apellido."%")
            ->where('asignaturas','like',"%".$asignatura."%")
            ->orderBy('apellido')
            ->orderBy('Nombre')
            ->skip($skip)
            ->take($itemsInPage)
            ->get();

        $pages = Docente::where('nombre','like',"%".$nombre."%")
            ->where('apellido','like',"%".$apellido."%")
            ->where('asignaturas','like',"%".$asignatura."%")
            ->count();
        $pages = ceil($pages / $itemsInPage );
        
        $BaseURL = '/files/';
        
        $respuesta = array("docentes" => $docentes , "pages" => $pages, "currentPage" => $currentPage);
        return json_encode($respuesta);
    }



    public function show(Request $request, $id){
        $docente = Docente::findOrFail($id);

        $BaseURL = "/files/";
        $URLImagen = $BaseURL.$docente->imagen;
        if ($docente->CVFile == ""){
            $URLCV = "";
        }else{
            $URLCV = $BaseURL.$docente->CVFile;
        }

        return view('app/slim/docentes/docentes.show',compact('docente','URLImagen','URLCV'));
    }

   
}