<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Evento;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the evento can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list eventos');
        // return true;

    }

    /**
     * Determine whether the evento can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Evento  $model
     * @return mixed
     */
    public function view(User $user, Evento $model)
    {
        return $user->hasPermissionTo('view eventos');
        // return true;
    }

    /**
     * Determine whether the evento can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create eventos');
        // return true;
    }

    /**
     * Determine whether the evento can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Evento  $model
     * @return mixed
     */
    public function update(User $user, Evento $model)
    {
        return $user->hasPermissionTo('update eventos');
    }

    /**
     * Determine whether the evento can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Evento  $model
     * @return mixed
     */
    public function delete(User $user, Evento $model)
    {
        return $user->hasPermissionTo('delete eventos');
    }

    /**
     * Determine whether the evento can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Evento  $model
     * @return mixed
     */
    public function restore(User $user, Evento $model)
    {
        return false;
    }

    /**
     * Determine whether the evento can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Evento  $model
     * @return mixed
     */
    public function forceDelete(User $user, Evento $model)
    {
        return false;
    }
}
