<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Lugar;
use Illuminate\Auth\Access\HandlesAuthorization;

class LugarPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the lugar can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list lugares');
    }

    /**
     * Determine whether the lugar can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Lugar  $model
     * @return mixed
     */
    public function view(User $user, Lugar $model)
    {
        return $user->hasPermissionTo('view lugares');
    }

    /**
     * Determine whether the lugar can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create lugares');
    }

    /**
     * Determine whether the lugar can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Lugar  $model
     * @return mixed
     */
    public function update(User $user, Lugar $model)
    {
        return $user->hasPermissionTo('update lugares');
    }

    /**
     * Determine whether the lugar can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Lugar  $model
     * @return mixed
     */
    public function delete(User $user, Lugar $model)
    {
        return $user->hasPermissionTo('delete lugares');
    }

    /**
     * Determine whether the lugar can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Lugar  $model
     * @return mixed
     */
    public function restore(User $user, Lugar $model)
    {
        return false;
    }

    /**
     * Determine whether the lugar can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Lugar  $model
     * @return mixed
     */
    public function forceDelete(User $user, Lugar $model)
    {
        return false;
    }
}
