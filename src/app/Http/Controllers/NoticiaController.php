<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\NoticiaStoreRequest;
use App\Http\Requests\NoticiaUpdateRequest;

use App\Models\Noticia;
use App\Models\Parametro;

class NoticiaController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Noticia::class);

        $search = $request->get('search', '');

        $noticias = Noticia::search($search)
            ->latest()
            ->paginate(3);

        return view('app.noticias.index', compact('noticias', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Noticia::class);

        return view('app.noticias.create');
    }

    /**
     * @param \App\Http\Requests\NoticiaStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticiaStoreRequest $request)
    {
        $this->authorize('create', Noticia::class);

        $validated = $request->validated();

        if ($request->hasfile('imagen')) {
            $validated['imagen'] = $request
            ->file('imagen')
            ->store('public/noticias/imagenes');
        }

        $noticia = Noticia::create($validated);

        return redirect()
            ->route('admin.noticias.edit', $noticia)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Noticia $noticia
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Noticia $noticia)
    {
        $this->authorize('view', $noticia);
        $BaseURL = '/files/';
        
        if(!$noticia->activo && !Auth::check()){
            return redirect()->route('index');
        }

        return view('app.slim.noticias.show',compact('noticia','BaseURL'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Noticia $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Noticia $noticia)
    {
        $this->authorize('update', $noticia);

        return view('app.noticias.edit', compact('noticia'));
    }

    /**
     * @param \App\Http\Requests\NoticiaUpdateRequest $request
     * @param \App\Models\Noticia $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(NoticiaUpdateRequest $request, Noticia $noticia)
    {
        $this->authorize('update', $noticia);

        // return $request['documentacion_obligatoria'];
        $validated = $request->validated();

        if ($request->hasfile('imagen')) {
            
            //Borro la vieja
            Storage::delete($noticia->imagen);

            //cargo la nueva
            $validated['imagen'] = $request ->file('imagen')->store('public/noticias/imagenes');

        }

        $noticia->update($validated);

        //rereturn $noticia;
        return redirect()
            ->route('admin.noticias.edit', $noticia)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Noticia $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Noticia $noticia)
    {
        $this->authorize('delete', $noticia);

        $noticia->delete();

        return redirect()
            ->route('admin.noticias.index')
            ->withSuccess(__('crud.common.removed'));
    }

    public function cambiarEstado(Request $request, Noticia $noticia) {
        $noticia->active = $request->active ? true:false;
        $noticia->save();
        return $noticia;
    }
}
