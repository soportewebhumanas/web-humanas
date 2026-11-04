<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Pasantia;
use Illuminate\Auth\Access\HandlesAuthorization;

class PasantiaPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the pasantia can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        
        return $user->hasPermissionTo('list pasantias');
    }

    /**
     * Determine whether the pasantia can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Pasantia  $model
     * @return mixed
     */
    public function view(User $user, Pasantia $model)
    {
        return $user->hasPermissionTo('view pasantias');
    }

    /**
     * Determine whether the pasantia can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create pasantias');

    }

    /**
     * Determine whether the pasantia can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Pasantia  $model
     * @return mixed
     */
    public function update(User $user, Pasantia $model)
    {
        return $user->hasPermissionTo('update pasantias');
    }

    /**
     * Determine whether the pasantia can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Pasantia  $model
     * @return mixed
     */
    public function delete(User $user, Pasantia $model)
    {
        return $user->hasPermissionTo('delete pasantias');
    }

    /**
     * Determine whether the pasantia can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Pasantia $model
     * @return mixed
     */
    public function restore(User $user, Pasantia $model)
    {
        return false;
    }

    /**
     * Determine whether the pasantia can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Pasantia  $model
     * @return mixed
     */
    public function forceDelete(User $user, Pasantia $model)
    {
        return false;
    }
}
