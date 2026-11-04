<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Modalidad;
use Illuminate\Auth\Access\HandlesAuthorization;

class ModalidadPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the modalidad can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list modalidades');
    }

    /**
     * Determine whether the modalidad can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Modalidad  $model
     * @return mixed
     */
    public function view(User $user, Modalidad $model)
    {
        return $user->hasPermissionTo('view modalidades');
    }

    /**
     * Determine whether the modalidad can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create modalidades');
    }

    /**
     * Determine whether the modalidad can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Modalidad  $model
     * @return mixed
     */
    public function update(User $user, Modalidad $model)
    {
        return $user->hasPermissionTo('update modalidades');
    }

    /**
     * Determine whether the modalidad can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Modalidad  $model
     * @return mixed
     */
    public function delete(User $user, Modalidad $model)
    {
        return $user->hasPermissionTo('delete modalidades');
    }

    /**
     * Determine whether the modalidad can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Modalidad  $model
     * @return mixed
     */
    public function restore(User $user, Modalidad $model)
    {
        return false;
    }

    /**
     * Determine whether the modalidad can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Modalidad  $model
     * @return mixed
     */
    public function forceDelete(User $user, Modalidad $model)
    {
        return false;
    }
}
