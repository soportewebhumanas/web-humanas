<?php

namespace App\Http\Controllers\Slim;

use Auth;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;

use App\Controllers\BaseController;

use App\Models\Pasantia;
use App\Models\Parametro;
use Carbon\Carbon;



class PasantiaSLIMController extends Controller{
    
    public function index(Request $request){
      
        $pasantias = Pasantia::where('active',true)->get();
        $cantPasantias = Pasantia::where('active',true)->count();

        return view('app.slim.pasantias.index',compact('pasantias','cantPasantias'));
    }

    public function show(Request $request, $id){
        $BaseURL = '/files/';
        $pasantia = Pasantia::findOrFail($id);

        If(!$pasantia->active && !Auth::check()){
            return redirect()->route('index');
        }

        return view('app.slim.pasantias.show',compact('pasantia','BaseURL'));
    }

}