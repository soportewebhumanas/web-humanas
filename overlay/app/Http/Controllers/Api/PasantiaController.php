<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasantiaController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Pasantia::class);

        $search = $request->get('search', '');

        $pasantias = Pasantia::search($search)
            ->latest()
            ->paginate();

        return new PasantiaCollection($pasantias);
    }
}
