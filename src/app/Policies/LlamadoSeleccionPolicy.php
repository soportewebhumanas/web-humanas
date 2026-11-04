<?php

namespace App\Policies;

use app\models\User;
use App\Models\LlamadoSeleccion;
use Illuminate\Auth\Access\HandlesAuthorization;

class llamadoSeleccionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the llamadoSeleccion can view any models.
     *
     * @param  App\Models\llamadoSeleccion  $llamadoSeleccion
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list llamadosSeleccion');
    }

    /**
     * Determine whether the llamadoSeleccion can view the model.
     *
     * @param  App\Models\llamadoSeleccion  $llamadoSeleccion
     * @param  App\Models\llamadoSeleccion  $model
     * @return mixed
     */
    public function view(User $user, LlamadoSeleccion $model)
    {
        return $user->hasPermissionTo('view llamadosSeleccion');
    }

    /**
     * Determine whether the llamadoSeleccion can create models.
     *
     * @param  App\Models\llamadoSeleccion  $llamadoSeleccion
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create llamadosSeleccion');
    }

    /**
     * Determine whether the llamadoSeleccion can update the model.
     *
     * @param  App\Models\llamadoSeleccion  $llamadoSeleccion
     * @param  App\Models\llamadoSeleccion  $model
     * @return mixed
     */
    public function update(User $user, LlamadoSeleccion $model)
    {
        return $user->hasPermissionTo('update llamadosSeleccion');
    }

    /**
     * Determine whether the llamadoSeleccion can delete the model.
     *
     * @param  App\Models\llamadoSeleccion  $llamadoSeleccion
     * @param  App\Models\llamadoSeleccion  $model
     * @return mixed
     */
    public function delete(User $user, LlamadoSeleccion $model)
    {
        return $user->hasPermissionTo('delete llamadosSeleccion');
    }

    /**
     * Determine whether the llamadoSeleccion can restore the model.
     *
     * @param  App\Models\llamadoSeleccion  $llamadoSeleccion
     * @param  App\Models\llamadoSeleccion  $model
     * @return mixed
     */
    public function restore(User $user, LlamadoSeleccion $model)
    {
        return false;
    }

    /**
     * Determine whether the llamadoSeleccion can permanently delete the model.
     *
     * @param  App\Models\llamadoSeleccion  $llamadoSeleccion
     * @param  App\Models\llamadoSeleccion  $model
     * @return mixed
     */
    public function forceDelete(User $user, LlamadoSeleccion $model)
    {
        return false;
    }
}
