<?php
namespace App\Http\Controllers;
use App\Models\Parametro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ParametrosStoreRequest;
use App\Http\Requests\ParametrosUpdateRequest;

class ParametroController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Parametro::class);

        $search = $request->get('search', '');

        $parametros = Parametro::search($search)
            ->latest()
            ->paginate(5);

        return view('app.parametros.index', compact('parametros', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
   public function create(Request $request)
    {
    	$this->authorize('create', Parametro::class);
        return view('app.parametros.create');
    }

    /**
     * @param \App\Http\Requests\ParametrosStoreRequest $request
     * @return \Illuminate\Http\Response
     */

    public function store(ParametrosStoreRequest $request)
    {
        $this->authorize('create', Parametro::class);

        $validated = $request->validated();

        $parametro = Parametro::create($validated);

        return redirect()
            ->route('parametros.edit',$parametro)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Parametro $parametro
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Parametro $parametro){
        $this->authorize('update', $parametro);
        return view('app.parametros.edit',
            compact('parametro')
        );
    }

    /**
     * @param \App\Http\Requests\ParametrosUpdateRequest $request
     * @param \App\Models\Parametro $parametro
     * @return \Illuminate\Http\Response
     */
    public function update(ParametrosUpdateRequest $request, Parametro $parametro)
    {
        $this->authorize('update', $parametro);
        $validated = $request->validated();

        $parametro->update($validated);

        return redirect()
            ->route('parametros.index')
            ->withSuccess(__('crud.common.saved'));
    }

}
