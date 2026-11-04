<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProgramasInstitucionalesStoreRequest;
use App\Http\Requests\ProgramasInstitucionalesUpdateRequest;

use App\Models\ProgramasInstitucionales;

class ProgramasInstitucionalesController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', ProgramasInstitucionales::class);

        $search = $request->get('search', '');

        $programas = ProgramasInstitucionales::search($search)
            ->latest()
            ->paginate(5);

        return view('app.programas.index', compact('programas', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', ProgramasInstitucionales::class);

        return view(
            'app.programas.create'
        );
    }

    /**
     * @param \App\Http\Requests\ProgramasInstitucionalesStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramasInstitucionalesStoreRequest $request)
    {   
        //return $request;
        $this->authorize('create', ProgramasInstitucionales::class);

        $validated = $request->validated();
        
        if ($request->hasfile('imagen')) {
            $validated['imagen'] = $request->file('imagen')->store('public/programas/imagenes');
        }

        $programa = ProgramasInstitucionales::create($validated);

        return redirect()
            ->route('admin.programas.edit', $programa)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProgramasInstitucionales $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ProgramasInstitucionales $programa)
    {
        $this->authorize('view', $programa);

        return view('app.programas.show', compact('programa'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProgramasInstitucionales $programa
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ProgramasInstitucionales $programa)
    {
        $this->authorize('update', $programa);

        return view(
            'app.programas.edit',
            compact('programa')
        );
    }

    /**
     * @param \App\Http\Requests\ProgramasInstitucionalesUpdateRequest $request
     * @param \App\Models\ProgramasInstitucionales $programa
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramasInstitucionalesUpdateRequest $request, ProgramasInstitucionales $programa)
    {
        $this->authorize('update', $programa);

        $validated = $request->validated();

        if ($request->hasfile('imagen')) {

            if( $programa->imagen ){
                Storage::delete($programa->imagen);
            }

            $validated['imagen'] = $request->file('imagen')->store('public/eventos/imagenes');
        }
        $programa->update($validated);

        return redirect()
            ->route('admin.programas.edit', $programa)
            ->withSuccess(__('crud.common.saved'));
    }


    public function cambiarEstado(Request $request, ProgramasInstitucionales $programa) {

        $programa->active = $request->active > 0 ? true:false;
        $programa->save();

        return $programa;
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProgramasInstitucionales $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ProgramasInstitucionales $programa)
    {
        $this->authorize('delete', $programa);

        $programa->delete();

        return redirect()
            ->route('admin.programas.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
