<?php
namespace App\Http\Controllers;
use App\Models\Docente;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\DocenteStoreRequest;
use App\Http\Requests\DocenteUpdateRequest;
use Carbon\Carbon;

class DocenteController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Docente::class);

        $search = $request->get('search', '');

        $docentes = Docente::search($search)
            ->latest()
            ->paginate(5);
    
        return view('app.docentes.index', compact('docentes', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
   public function create(Request $request)
    {
    	$this->authorize('create', Docente::class);
        return view('app.docentes.create');
    }

    /**
     * @param \App\Http\Requests\DocenteStoreRequest $request
     * @return \Illuminate\Http\Response
     */

    public function store(DocenteStoreRequest $request)
    {
        $this->authorize('create', Docente::class);
        $validated = $request->validated();
        
        if ($request->hasFile('imagen')) {
            $validated['imagen'] = $request
                ->file('imagen')
                ->store('public/docentes/imagenes');
        }

         if ($request->hasFile('CVFile')) {
            $validated['CVFile'] = $request
                ->file('CVFile')
                ->store('public/docentes/CV');
        }
    

        $docente = Docente::create($validated);

        return redirect()
            ->route('admin.docentes.edit',$docente)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Docente $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Docente $docente)
    {
        $this->authorize('view', $docente);

        $BaseURL = "/files/";
        $URLImagen = $BaseURL.$docente->imagen;
        if ($docente->CVFile == ""){
            $URLCV = "";
        }else{
            $URLCV = $BaseURL.$docente->CVFile;
        }

        return view('app/slim/docentes/docentes.show',compact('docente','URLImagen','URLCV'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Docente $docente
     * @return \Illuminate\Http\Response
     */


    public function edit(Request $request, Docente $docente){
        $this->authorize('update', $docente);
        return view('app.docentes.edit',
            compact('docente')
        );
    }

    /**
     * @param \App\Http\Requests\DocenteUpdateRequest $request
     * @param \App\Models\Docente $docente
     * @return \Illuminate\Http\Response
     */
    public function update(DocenteUpdateRequest $request, Docente $docente)
    {
        $this->authorize('update', $docente);
        $validated = $request->validated();
             
        if ($request->hasFile('imagen')) {
             //Borro la vieja
            Storage::delete($docente->imagen);

            //cargo la nueva
            $validated['imagen'] = $request
                ->file('imagen')
                ->store('public/docentes/imagenes');

            $docente->imagen = $request->imagen;
        }

        if ($request->hasFile('CVFile')) {
             //Borro la vieja
            Storage::delete($docente->CVFile);

            //cargo la nueva
            $validated['CVFile'] = $request
                ->file('CVFile')
                ->store('public/docentes/CV');

            $docente->CVFile = $request->CVFile;
        }

        $docente->update($validated);

        return redirect()
            ->route('admin.docentes.index')
            ->withSuccess(__('crud.common.saved'));
    }


     /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Docente $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Docente $docente)
    {
        Storage::delete($docente->imagen);

        Storage::delete($docente->CVFile);

        $this->authorize('delete', $docente);

        $docente->delete();

        return redirect()
            ->route('admin.docentes.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
