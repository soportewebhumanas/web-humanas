<?php

namespace App\Http\Controllers\Api;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\EventoResource;
use App\Http\Resources\EventoCollection;
use App\Http\Requests\EventoStoreRequest;
use App\Http\Requests\EventoUpdateRequest;

class EventoController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Evento::class);

        $search = $request->get('search', '');

        $eventos = Evento::search($search)
            ->latest()
            ->paginate();

        return new EventoCollection($eventos);
    }

    /**
     * @param \App\Http\Requests\EventoStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventoStoreRequest $request)
    {
        $this->authorize('create', Evento::class);

        $validated = $request->validated();
        $validated['content'] = json_decode($validated['content'], true);

        $evento = Evento::create($validated);

        return new EventoResource($evento);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Evento $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Evento $evento)
    {
        $this->authorize('view', $evento);

        return new EventoResource($evento);
    }

    /**
     * @param \App\Http\Requests\EventoUpdateRequest $request
     * @param \App\Models\Evento $evento
     * @return \Illuminate\Http\Response
     */
    public function update(EventoUpdateRequest $request, Evento $evento)
    {
        $this->authorize('update', $evento);

        $validated = $request->validated();

        $validated['content'] = json_decode($validated['content'], true);

        $evento->update($validated);

        return new EventoResource($evento);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Evento $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Evento $evento)
    {
        $this->authorize('delete', $evento);

        $evento->delete();

        return response()->noContent();
    }
}
