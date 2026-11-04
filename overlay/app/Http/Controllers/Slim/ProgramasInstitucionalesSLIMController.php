<?php

namespace App\Http\Controllers\Slim;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use Illuminate\Pagination\Paginator;

use App\Models\ProgramasInstitucionales;
use App\Models\Parametro;
use Carbon\Carbon;



class ProgramasInstitucionalesSLIMController extends Controller{
    public function index(Request $request, $args){
        $pasantias = Pasantia::all();
        return view('app.slim.programas.index',compact('pasantias'));
    }

    public function show(Request $request, $id){
        $item = ProgramasInstitucionales::findOrFail($id);
        return view('app.slim.programas.show',compact('item'));
    }

}