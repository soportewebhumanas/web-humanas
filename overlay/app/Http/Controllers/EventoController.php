<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use App\Models\Lugar;
use App\Models\Evento;
use App\Models\Modalidad;
use App\Models\ProgramasInstitucionales;
use App\Models\TiposEvento;
use Illuminate\Http\Request;
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
            ->paginate(5);

        return view('app.eventos.index', compact('eventos', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Evento::class);

        $lugares = Lugar::pluck('nombre', 'id');
        $modalidades = Modalidad::pluck('nombre', 'id');
        $tiposEventos = TiposEvento::pluck('nombre', 'id');
        $programas = ProgramasInstitucionales::pluck('nombre', 'id');

        return view(
            'app.eventos.create',
            compact('lugares', 'modalidades', 'tiposEventos','programas')
        );
    }

    /**
     * @param \App\Http\Requests\EventoStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventoStoreRequest $request)
    {   
        //return $request;
        $this->authorize('create', Evento::class);

        $validated = $request->validated();
        
        if ($request->hasfile('resolucion')) {
            $validated['resolucion'] = $request->file('resolucion')->store('public/eventos/resoluciones');
        }

        if ($request->hasfile('imagen')) {
            $validated['imagen'] = $request->file('imagen')->store('public/eventos/imagenes');
        }

        $evento = Evento::create($validated);

        return redirect()
            ->route('admin.eventos.edit', $evento)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Evento $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Evento $evento)
    {
        $this->authorize('view', $evento);

        return view('app.eventos.show', compact('evento'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Evento $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Evento $evento)
    {
        $this->authorize('update', $evento);
        $lugares = Lugar::pluck('nombre', 'id');
        $modalidades = Modalidad::pluck('nombre', 'id');
        $tiposEventos = TiposEvento::pluck('nombre', 'id');
        $programas = ProgramasInstitucionales::pluck('nombre', 'id');

        return view(
            'app.eventos.edit',
            compact('evento', 'lugares', 'modalidades', 'tiposEventos','programas')
        );
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

        if ($request->hasfile('resolucion')) {
            //primero elimino los archivos existentes si hubiese
            if( $evento->resolucion ){
                Storage::delete($evento->resolucion);
            }
            $validated['resolucion'] = $request->file('resolucion')->store('public/eventos/resoluciones');
        }

        if ($request->hasfile('imagen')) {
            if( $evento->imagen ){
                Storage::delete($evento->imagen);
            }
            $validated['imagen'] = $request->file('imagen')->store('public/eventos/imagenes');
        }

        $evento->update($validated);

        return redirect()
            ->route('admin.eventos.edit', $evento)
            ->withSuccess(__('crud.common.saved'));
    }


    public function cambiarEstado(Request $request, Evento $evento) {
        
        $evento->active = $request->active > 0 ? true:false;
        $evento->save();

        return $evento;

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

        return redirect()
            ->route('admin.eventos.index')
            ->withSuccess(__('crud.common.removed'));
    }


    /*SLIM*/

     //buscamos todos los seminarios y los pasamos a la vista para listar.
    public function seminarios(Request $request, Response $response){

        $tipoSeminiario = TiposEvento::where('nombre','like','%seminario%')->first();

        $eventos = $tipoSeminiario->eventos;

        $BaseURL = Parametro::where('clave','ADMIN_SITE_URL')->FirstOrFail()->valor;

        return view($response, 'eventos.seminarios',['eventos' => $eventos, 'BaseURL' => $BaseURL]);
    }

    //funcion para cargar en el calendario los eventos
    public function eventosCalendar(Request $request, Response $response){
        
        $eventos = Evento::where('active',1)->get();

        $resp = array();
        
        foreach($eventos as $evento) {
            $aux = array();

            $aux['title'] = $evento->titulo;
            $aux['id'] = $evento->id;
            $aux['start'] = $evento->fecha_inicio;
            if(isset($evento->fecha_fin))
                $aux['end'] = $evento->fecha_fin;
            $aux['backgroundColor'] = 'green';
            $aux['links'] = array('show' => route('admin.SLIMeventos.show', ['actividad' => $evento->id]));

            array_push($resp, $aux);
        }

        $payload = json_encode($resp);
        $response->getBody()->write($payload);
        return $response
            ->withHeader('Content-Type', 'application/json');
    }

    //renderizamos la vista, que muestra la información de un evento en particular, dando opciones de acciones sobre el.
    // se me ocurre opcion de cancelar evento, editar informacion (que llevaria al metodo edit.)
    public function SLIMshow(Request $request, Response $response, $args){

        $id = $args['actividad'];
        $BaseURL = Parametro::where('clave','ADMIN_SITE_URL')->FirstOrFail()->valor;
        
        $evento = Evento::findOrFail($id);

        return view($response, 'eventos.show', compact('evento','BaseURL'));
    }
}
