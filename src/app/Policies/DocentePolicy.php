<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Docente;
use Illuminate\Auth\Access\HandlesAuthorization;

class DocentePolicy
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
        return $user->hasPermissionTo('list docente');
    }

    /**
     * Determine whether the pasantia can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Docente  $model
     * @return mixed
     */
    public function view(User $user, Docente $model)
    {
        return $user->hasPermissionTo('view docente');

    }

    /**
     * Determine whether the pasantia can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create docente');

    }

    /**
     * Determine whether the pasantia can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Docente  $model
     * @return mixed
     */
    public function update(User $user, Docente $model)
    {
        return $user->hasPermissionTo('update docente');
    }

    /**
     * Determine whether the pasantia can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Docente  $model
     * @return mixed
     */
    public function delete(User $user, Docente $model)
    {
        return $user->hasPermissionTo('delete docente');
    }

    /**
     * Determine whether the pasantia can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Docente $model
     * @return mixed
     */
    public function restore(User $user, Docente $model)
    {
        return false;
    }

    /**
     * Determine whether the pasantia can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Docente  $model
     * @return mixed
     */
    public function forceDelete(User $user, Docente $model)
    {
        return false;
    }
}
