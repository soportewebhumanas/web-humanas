<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pasantia;

use App\Http\Requests\PasantiaStoreRequest;
use App\Http\Requests\PasantiaUpdateRequest;


class PasantiaController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Pasantia::class);

        $search = $request->get('search', '');

        $pasantias = Pasantia::search($search)
            ->latest()
            ->paginate(5);

        return view('app.pasantias.index', compact('pasantias', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Pasantia::class);

        return view('app.pasantias.create');
    }

    /**
     * @param \App\Http\Requests\PasantiaStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasantiaStoreRequest $request)
    {
        $this->authorize('create', Pasantia::class);

        
        $validated = $request->validated();

        if ($request->hasfile('documentacion_obligatoria')) {
            //cargo los nuevos
            foreach( $request['documentacion_obligatoria']  as $key => $file ){
                $validated['documentacion_obligatoria'][$key] = $file->store('public/pasantias/documentacion_obligatoria');
            }
        }


        $pasantia = Pasantia::create($validated);

        return redirect()
            ->route('admin.pasantias.edit', $pasantia)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Pasantia $pasantia
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Pasantia $pasantia)
    {
        $this->authorize('view', $pasantia);
        $BaseURL = '/files/';
        
        If(!$pasantia->active && !Auth::check()){
            return redirect()->route('index');
        }

        return view('app.slim.pasantias.show',compact('pasantia','BaseURL'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Pasantia $pasantia
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Pasantia $pasantia)
    {
        $this->authorize('update', $pasantia);

        return view('app.pasantias.edit', compact('pasantia'));
    }

    /**
     * @param \App\Http\Requests\PasantiaUpdateRequest $request
     * @param \App\Models\Pasantia $pasantia
     * @return \Illuminate\Http\Response
     */
    public function update(PasantiaUpdateRequest $request, Pasantia $pasantia)
    {
        $this->authorize('update', $pasantia);

        // return $request['documentacion_obligatoria'];
        $validated = $request->validated();

        if ($request->hasfile('documentacion_obligatoria')) {

            //primero elimino los archivos existentes si hubiese
            foreach( $pasantia->documentacion_obligatoria  as $key => $file ){
                Storage::delete($file);
            }

            //cargo los nuevos
            foreach( $request['documentacion_obligatoria']  as $key => $file ){
                $validated['documentacion_obligatoria'][$key] = $file->store('public/pasantias/documentacion_obligatoria');
            }
        }
        $pasantia->update($validated);

        //rereturn $pasantia;
        return redirect()
            ->route('admin.pasantias.edit', $pasantia)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Pasantia $pasantia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Pasantia $pasantia)
    {
        $this->authorize('delete', $pasantia);

        $pasantia->delete();

        return redirect()
            ->route('admin.pasantias.index')
            ->withSuccess(__('crud.common.removed'));
    }

    public function cambiarEstado(Request $request, Pasantia $pasantia) {
        $pasantia->active = $request->active ? true:false;
        $pasantia->save();
        return $pasantia;
    }
}
