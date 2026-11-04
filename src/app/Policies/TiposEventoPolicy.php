<?php

namespace App\Policies;

use App\Models\User;
use App\Models\TiposEvento;
use Illuminate\Auth\Access\HandlesAuthorization;

class TiposEventoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the tiposEvento can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list tiposeventos');
    }

    /**
     * Determine whether the tiposEvento can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TiposEvento  $model
     * @return mixed
     */
    public function view(User $user, TiposEvento $model)
    {
        return $user->hasPermissionTo('view tiposeventos');
    }

    /**
     * Determine whether the tiposEvento can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create tiposeventos');
    }

    /**
     * Determine whether the tiposEvento can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TiposEvento  $model
     * @return mixed
     */
    public function update(User $user, TiposEvento $model)
    {
        return $user->hasPermissionTo('update tiposeventos');
    }

    /**
     * Determine whether the tiposEvento can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TiposEvento  $model
     * @return mixed
     */
    public function delete(User $user, TiposEvento $model)
    {
        return $user->hasPermissionTo('delete tiposeventos');
    }

    /**
     * Determine whether the tiposEvento can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TiposEvento  $model
     * @return mixed
     */
    public function restore(User $user, TiposEvento $model)
    {
        return false;
    }

    /**
     * Determine whether the tiposEvento can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TiposEvento  $model
     * @return mixed
     */
    public function forceDelete(User $user, TiposEvento $model)
    {
        return false;
    }
}
