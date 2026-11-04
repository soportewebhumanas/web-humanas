<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ModalidadStoreRequest;
use App\Http\Requests\ModalidadUpdateRequest;
use App\Models\Modalidad;

class ModalidadController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Modalidad::class);

        $search = $request->get('search', '');

        $modalidades = Modalidad::search($search)
            ->latest()
            ->paginate(5);

        return view('app.modalidades.index', compact('modalidades', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Modalidad::class);

        return view('app.modalidades.create');
    }

    /**
     * @param \App\Http\Requests\ModalidadStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModalidadStoreRequest $request)
    {   
        $this->authorize('create', Modalidad::class);

        $validated = $request->validated();

        $modalidades = Modalidad::create($validated);

        return redirect()
            ->route('admin.modalidades.edit', $modalidades)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Modalidad $modalidades
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Modalidad $modalidades)
    {
        $this->authorize('view', $modalidades);

        return view('app.modalidades.show', compact('modalidades'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Modalidad $modalidades
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Modalidad $modalidades)
    {
        $this->authorize('update', $modalidades);

        return view(
            'app.modalidades.edit',
            compact('modalidades')
        );
    }

    /**
     * @param \App\Http\Requests\ModalidadUpdateRequest $request
     * @param \App\Models\Modalidad $modalidades
     * @return \Illuminate\Http\Response
     */
    public function update(ModalidadUpdateRequest $request, Modalidad $modalidades)
    {
        $this->authorize('update', $modalidades);

        $validated = $request->validated();
        $modalidades->update($validated);

        return redirect()
            ->route('admin.modalidades.edit', $modalidades)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Modalidad $modalidades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Modalidad $modalidades)
    {
        $this->authorize('delete', $modalidades);

        $modalidades->delete();

        return redirect()
            ->route('admin.modalidades.index')
            ->withSuccess(__('crud.common.removed'));
    }

    /**
     * @param \App\Http\Requests\ModalidadStoreRequest $request
     * @return mixed
     */
    public function storePopup(ModalidadStoreRequest $request)
    {   
        $this->authorize('create', Modalidad::class);

        $validated = $request->validated();

        $modalidades = Modalidad::create($validated);

        return $modalidades->id;
    }
}