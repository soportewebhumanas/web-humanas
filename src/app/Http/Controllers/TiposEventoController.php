<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TiposEventoStoreRequest;
use App\Http\Requests\TiposEventoUpdateRequest;

use App\Models\TiposEvento;

class TiposEventoController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', TiposEvento::class);

        $search = $request->get('search', '');

        $tiposEvento = TiposEvento::search($search)
            ->latest()
            ->paginate(5);

        return view('app.tiposEvento.index', compact('tiposEvento', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', TiposEvento::class);

        return view(
            'app.tiposEvento.create'
        );
    }

    /**
     * @param \App\Http\Requests\TiposEventoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TiposEventoStoreRequest $request)
    {   
        //return $request;
        $this->authorize('create', TiposEvento::class);

        $validated = $request->validated();

        $tiposEvento = TiposEvento::create($validated);

        return redirect()
            ->route('admin.tiposEvento.edit', $tiposEvento)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\TiposEvento $tiposEvento
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, TiposEvento $tiposEvento)
    {
        $this->authorize('view', $tiposEvento);

        return view('app.tiposEvento.show', compact('tiposEvento'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\TiposEvento $tiposEvento
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, TiposEvento $tiposEvento)
    {
        $this->authorize('update', $tiposEvento);

        return view(
            'app.tiposEvento.edit',
            compact('tiposEvento')
        );
    }

    /**
     * @param \App\Http\Requests\TiposEventoRequest $request
     * @param \App\Models\TiposEvento $tiposEvento
     * @return \Illuminate\Http\Response
     */
    public function update(TiposEventoUpdateRequest $request, TiposEvento $tiposEvento)
    {
        $this->authorize('update', $tiposEvento);

        $validated = $request->validated();
        $tiposEvento->update($validated);

        return redirect()
            ->route('admin.tiposEvento.edit', $tiposEvento)
            ->withSuccess(__('crud.common.saved'));
    }

     /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\TiposEvento $tiposEvento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, TiposEvento $tiposEvento)
    {
        $this->authorize('delete', $tiposEvento);

        $tiposEvento->delete();

        return redirect()
            ->route('admin.tiposEvento.index')
            ->withSuccess(__('crud.common.removed'));
    }

    public function storePopup(TiposEventoStoreRequest $request)
    {   
        $this->authorize('create', TiposEvento::class);

        $validated = $request->validated();

        $tiposEvento = TiposEvento::create($validated);

        return $tiposEvento->id; 
    }

    
}
