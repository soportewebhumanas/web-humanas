<?php
namespace App\Http\Controllers;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    /**
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request) 
    {
        $this->authorize('view-any', User::class);

        $search = $request->get('search', '');

        $users = User::search($search)
            ->latest()
            ->paginate(5);

        return view('app.users.index', compact('users', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', User::class);
        $roles = Role::pluck('name', 'id');
        return view('app.users.create',
    		compact('roles')
    	);
    }

    /**
     * @param \App\Http\Requests\UserStoreRequest $request
     * @return \Illuminate\Http\Response
     */

    public function store(UserStoreRequest $request)
    {
        $this->authorize('create', User::class);
       
	    $validated = $request->validated();

        $user = User::create($validated);
        
        DB::table('model_has_roles')->insertOrIgnore([
            ['role_id' => $validated['rol'], 'model_type' => User::class, 'model_id' => $user->id],
        ]);


        return redirect()
            ->route('admin.users.index', $user)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        $this->authorize('view', $user);

        return view('app.users.show', compact('user'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, User $user)
    {
        $this->authorize('update', $user);
       	$roles = Role::pluck('name', 'id');
        return view('app.users.edit',
    		compact('user','roles')
    	);
    }

    /**
     * @param \App\Http\Requests\UserUpdateRequest $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
       	$this->authorize('update', $user);
        $validated = $request->validated();

        $user->update($validated);

        DB::table('model_has_roles')->where('model_id', $user->id)->delete();

        DB::table('model_has_roles')->insertOrIgnore([
            ['role_id' => $validated['rol'], 'model_type' => User::class, 'model_id' => $user->id],
        ]);

        return redirect()
            ->route('admin.users.index')
            ->withSuccess(__('crud.common.saved'));
    }
    /*Eliminar Usuario*/
    public function destroy(Request $request, User $user)
    {
        $this->authorize('delete', $user);

        $user->delete();

        return redirect()
            ->route('admin.users.index')
            ->withSuccess(__('crud.common.removed'));
    }
    /*Eliminar Usuario*/

    public function updateDatosPersonales(Request $request) {
        $user = USER::where('id',$request['id']) ->first();
        abort_unless($user && auth()->check() && (auth()->id() === $user->id || auth()->user()->can('update', $user)), 403);
        if (USER::where('email',$request['email'])->where('id', '<>', $request['id'])->count() == 0){
            $user->update(['name'=>$request['name'],'email'=>$request['email']]);
             return redirect()->route('profile.show') ->withSuccess("Datos personales modificados.");
        }else{
            return redirect()->route('profile.show') ->withSuccess('El correo electrónico ya está en uso.');
        }
    }

    public function updatePassword(Request $request) {
        $user = USER::where('id',$request['id']) ->first();
        abort_unless($user && auth()->check() && (auth()->id() === $user->id || auth()->user()->can('update', $user)), 403);
        $user->update(['password'=>\Hash::make($request['password'])]);
        return redirect(route($request['redirect']))->withSuccess("Contraseña modificada.");
   }

    public function restorePassword(Request $request, int $UserId) {
        $user = USER::where('id',$UserId) ->first();
        $this->authorize('update', $user);
        $roles = Role::pluck('name', 'id');
       return view('app.users.restore',
            compact('user','roles')
        );
   }
}
