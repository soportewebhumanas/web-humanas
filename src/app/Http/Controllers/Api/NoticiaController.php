<?php

namespace App\Http\Controllers\Api;

use App\Models\Noticias;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\NoticiasResource;
use App\Http\Resources\NoticiasCollection;
use App\Http\Requests\NoticiasStoreRequest;
use App\Http\Requests\NoticiasUpdateRequest;

class NoticiaController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Noticias::class);

        $search = $request->get('search', '');

        $noticias = Noticias::search($search)
            ->latest()
            ->paginate();

        return new NoticiasCollection($noticias);
    }

    /**
     * @param \App\Http\Requests\NoticiasStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticiasStoreRequest $request)
    {
        $this->authorize('create', Noticias::class);

        $validated = $request->validated();
        $validated['content'] = json_decode($validated['content'], true);

        $noticias = Noticias::create($validated);

        return new NoticiasResource($noticias);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Noticias $noticias
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Noticias $noticias)
    {
        $this->authorize('view', $noticias);

        return new NoticiasResource($noticias);
    }

    /**
     * @param \App\Http\Requests\NoticiasUpdateRequest $request
     * @param \App\Models\Noticias $noticias
     * @return \Illuminate\Http\Response
     */
    public function update(NoticiasUpdateRequest $request, Noticias $noticias)
    {
        $this->authorize('update', $noticias);

        $validated = $request->validated();

        $validated['content'] = json_decode($validated['content'], true);

        $noticias->update($validated);

        return new NoticiasResource($noticias);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Noticias $noticias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Noticias $noticias)
    {
        $this->authorize('delete', $noticias);

        $noticias->delete();

        return response()->noContent();
    }
}
