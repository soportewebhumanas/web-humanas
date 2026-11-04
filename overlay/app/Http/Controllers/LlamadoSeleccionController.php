<?php
namespace App\Http\Controllers;
use Auth;
use App\Models\LlamadoSeleccion;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\LlamadoSeleccionStoreRequest;
use App\Http\Requests\LlamadoSeleccionUpdateRequest;
use Carbon\Carbon;

class LlamadoSeleccionController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', LlamadoSeleccion::class);

        $search = $request->get('search', '');

        $llamadosSeleccion = LlamadoSeleccion::search($search)
            ->latest()
            ->paginate(5);
        $hoy = Carbon::now();
        return view('app.llamadosSeleccion.index', compact('llamadosSeleccion', 'search', 'hoy'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
   public function create(Request $request)
    {
    	$this->authorize('create', LlamadoSeleccion::class);
        return view('app.llamadosSeleccion.create');
    }

    /**
     * @param \App\Http\Requests\LlamadoSeleccionStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    
    /*Método nuevo, permite guardar el acta con un nombre más representativo */
    public function store(LlamadoSeleccionStoreRequest $request)
    {
        $this->authorize('create', LlamadoSeleccion::class);
    
        $validated = $request->validated();
    
        if ($request->hasFile('resolucion')) {
            $validated['resolucion'] = $request
                ->file('resolucion')
                ->store('public/llamadosSeleccion/resoluciones');
        }
    
        if ($request->hasFile('acta_final')) {
            $file = $request->file('acta_final');
            $randomString = \Str::random(10);
            $extension = $file->getClientOriginalExtension();
            $fileName = 'Acta_inscripciones_registradas_' . $randomString . '.' . $extension;
    
            $validated['acta_final'] = $file->storeAs('public/llamadosSeleccion/actasFinales', $fileName);
        }
    
        $llamadoSeleccion = LlamadoSeleccion::create($validated);
    
        return redirect()
            ->route('admin.llamadosSeleccion.edit', $llamadoSeleccion)
            ->withSuccess(__('crud.common.created'));
    }
    

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\LlamadoSeleccion $llamadoSeleccion
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, LlamadoSeleccion $llamadoSeleccion)
    {
        $this->authorize('view', $llamadoSeleccion);
        $hoy = Carbon::now(); //Aquí se obtiene la fecha de hoy
       
        if ($llamadoSeleccion->fin_inscripcion > $hoy){
            $vencido = false;
        }else{
            $vencido = true;
        }
        $URLResolucion = '/storage/'.$llamadoSeleccion->resolucion;
        $URLActa = '/storage/'.$llamadoSeleccion->acta_final;

        If(!$llamadoSeleccion->activo && !Auth::check()){
            return redirect()->route('index');
        }

        return view('app.slim.docentes.llamadosSeleccion.show',compact('llamadoSeleccion','vencido','URLResolucion','URLActa'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\LlamadoSeleccion $llamadoSeleccion
     * @return \Illuminate\Http\Response
     */


    public function edit(Request $request, LlamadoSeleccion $llamadoSeleccion){
        $this->authorize('update', $llamadoSeleccion);
        return view('app.llamadosSeleccion.edit',
            compact('llamadoSeleccion')
        );
    }

    /**
     * @param \App\Http\Requests\LlamadoSeleccionUpdateRequest $request
     * @param \App\Models\LlamadoSeleccion $llamadoSeleccion
     * @return \Illuminate\Http\Response
     */
    
    /*Método nuevo 21/04/2025 */
    public function update(LlamadoSeleccionUpdateRequest $request, LlamadoSeleccion $llamadoSeleccion)
    {
        $this->authorize('update', $llamadoSeleccion);
        $validated = $request->validated();
    
        if ($request->hasFile('resolucion')) {
            $validated['resolucion'] = $request
                ->file('resolucion')
                ->store('public/llamadosSeleccion/resoluciones');
            $llamadoSeleccion->resolucion = $request->resolucion;
        }
    
        if ($request->hasFile('acta_final')) {
            $file = $request->file('acta_final');
            $randomString = \Str::random(10);
            $extension = $file->getClientOriginalExtension();
            $fileName = 'Acta_inscripciones_registradas_' . $randomString . '.' . $extension;
    
            $validated['acta_final'] = $file->storeAs('public/llamadosSeleccion/actasFinales', $fileName);
            $llamadoSeleccion->acta_final = $request->acta_final;
        }
    
        $llamadoSeleccion->update($validated);
    
        return redirect()
            ->route('admin.llamadosSeleccion.index')
            ->withSuccess(__('crud.common.saved'));
    }
    
    public function cambiarEstado(Request $request, LlamadoSeleccion $llamadoSeleccion) {

        $llamadoSeleccion->activo = $request->active ? true:false;
        $llamadoSeleccion->save();

        return $llamadoSeleccion;

    }
     public function destroy(Request $request, LlamadoSeleccion $llamadoSeleccion)
    {
        Storage::delete($llamadoSeleccion->acta_final);
        Storage::delete($llamadoSeleccion->resolucion);
        
        $this->authorize('delete', $llamadoSeleccion);

        $llamadoSeleccion->delete();
        
        return redirect()
            ->route('admin.llamadosSeleccion.index')
            ->withSuccess(__('crud.common.removed'));
    }
    public function eliminarActa(Request $request, LlamadoSeleccion $llamadoSeleccion)
    {
        Storage::delete($llamadoSeleccion->acta_final);
        $llamadoSeleccion->acta_final = "";
        $this->authorize('update', $llamadoSeleccion);

        $llamadoSeleccion->update();
        
        return redirect()
            ->route('admin.llamadosSeleccion.index')
            ->withSuccess(__('Acta eliminada correctamente'));
    }

}
