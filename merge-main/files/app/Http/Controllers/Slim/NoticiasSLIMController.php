<?php

namespace App\Http\Controllers\Slim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Noticia;

class NoticiasSLIMController extends Controller
{
    //
    public function index(Request $request){
      
        $noticias = Noticia::where('active',true)->orderByDesc('updated_at')->get();
        
        return view('app.slim.noticias.index',compact('noticias'));
    }

    public function show(Request $request, Noticia $noticia){
        
        
        If(!$noticia->active && !Auth::check()){
            return redirect()->route('index');
        }

        return view('app.slim.noticias.show',compact('noticia'));
    }
}
