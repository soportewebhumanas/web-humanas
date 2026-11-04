<?php
namespace App\Http\Controllers;
use App\Models\Publicacion;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PublicacionStoreRequest;
use App\Http\Requests\PublicacionUpdateRequest;
use Carbon\Carbon;

class PublicacionController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Publicacion::class);

        $search = $request->get('search', '');

        $publicaciones = Publicacion::search($search)
            ->latest()
            ->paginate(5);
        $hoy = Carbon::now();
        return view('app.publicaciones.index', compact('publicaciones', 'search', 'hoy'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
   public function create(Request $request)
    {
    	$this->authorize('create', Publicacion::class);
        return view('app.publicaciones.create');
    }

    /**
     * @param \App\Http\Requests\PublicacionStoreRequest $request
     * @return \Illuminate\Http\Response
     */

    public function store(PublicacionStoreRequest $request)
    {
        echo "<script>console.log('Bandera 1' );</script>";
         if ($request['esPeriodica'] == 'SI' ){
            $request['tipoDePublicacion'] = "";
            $request['editorial'] = "";
        }

        $this->authorize('create', Publicacion::class);
        $validated = $request->validated();

        if ($request->hasFile('imagen')) {
            $validated['imagen'] = $request
                ->file('imagen')
                ->store('public/publicaciones/imagenes');
        }

        if($validated['esPeriodica'] == 'SI'){
            $validated['autor'] = [];
            $validated['compilador'] = [];
            $validated['coordinador'] = [];
            $validated['editor'] = [];
        }else{
            if($request['autor'] == null){
                $validated['autor'] = [];  
            }
            if($request['compilador'] == null){
                $validated['compilador'] = [];   
            }
            if($request['coordinador'] == null){
                $validated['coordinador'] = [];   
            }
            if($request['editor'] == null){
                $validated['editor'] = [];   
            }
        }
       
        $publicacion = Publicacion::create($validated);

        echo "<script>console.log('Bandera 2' );</script>";

        return redirect()
            ->route('admin.publicaciones.edit',$publicacion)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Publicacion $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Publicacion $publicacion)
    {
        $this->authorize('view', $publicacion);

        return view('app.publicaciones.show', compact('publicacion'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Publicacion $publicacion
     * @return \Illuminate\Http\Response
     */


    public function edit(Request $request, Publicacion $publicacion){
        $this->authorize('update', $publicacion);
        return view('app.publicaciones.edit',
            compact('publicacion')
        );
    }

    /**
     * @param \App\Http\Requests\PublicacionUpdateRequest $request
     * @param \App\Models\Publicacion $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(PublicacionUpdateRequest $request, Publicacion $publicacion)
    {
        $this->authorize('update', $publicacion);
        if ($request['esPeriodica'] === 'SI' ){
            $request['tipoDePublicacion'] = "";
            $request['editorial'] = "";
        }

        $validated = $request->validated();
             

        if ($request->hasfile('imagen')) {
            
            //Borro la vieja
            Storage::delete($publicacion->imagen);

            //cargo la nueva
            $validated['imagen'] = $request ->file('imagen')->store('public/publicaciones/imagenes');
            $publicacion->imagen = $request->imagen;

        }

        if($validated['esPeriodica'] == 'SI'){
            $validated['autor'] = [];
            $validated['compilador'] = [];
            $validated['coordinador'] = [];
            $validated['editor'] = [];
        }else{
            if($request['autor'] == null){
                $validated['autor'] = [];  
            }
            if($request['compilador'] == null){
                $validated['compilador'] = [];   
            }
            if($request['coordinador'] == null){
                $validated['coordinador'] = [];   
            }
            if($request['editor'] == null){
                $validated['editor'] = [];   
            }
        }

        $publicacion->update($validated);

        return redirect()
            ->route('admin.publicaciones.index')
            ->withSuccess(__('crud.common.saved'));
    }

    public function cambiarEstado(Request $request, Publicacion $publicacion) {

        $publicacion->activo = $request->active ? true:false;
        $publicacion->save();

        return $publicacion;

    }
    
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Evento $publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Publicacion $publicacion)
    {
        Storage::delete($publicacion->imagen);
        
        $this->authorize('delete', $publicacion);

        $publicacion->delete();

        return redirect()
            ->route('admin.publicaciones.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
