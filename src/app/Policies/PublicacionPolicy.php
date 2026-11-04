<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Publicacion;
use Illuminate\Auth\Access\HandlesAuthorization;

class PublicacionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the publicacion can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list publicacion');
    }

    /**
     * Determine whether the publicacion can view the model.
     *
     * @param  App\Models\publicacion  $publicacion
     * @param  App\Models\publicacion  $model
     * @return mixed
     */
    public function view(User $user, Publicacion $model)
    {
        return $user->hasPermissionTo('view publicacion');
    }

    /**
     * Determine whether the publicacion can create models.
     *
     * @param  App\Models\publicacion  $publicacion
     * @return mixed
     */
    public function create(User $user, Publicacion $model)
    {
        return $user->hasPermissionTo('create publicacion');
    }

    /**
     * Determine whether the publicacion can update the model.
     *
     * @param  App\Models\publicacion  $publicacion
     * @param  App\Models\publicacion  $model
     * @return mixed
     */
    public function update(User $user, Publicacion $model)
    {
        return $user->hasPermissionTo('update publicacion');
    }

    /**
     * Determine whether the publicacion can delete the model.
     *
     * @param  App\Models\publicacion  $publicacion
     * @param  App\Models\publicacion  $model
     * @return mixed
     */
    public function delete(User $user, Publicacion $model)
    {
        return $user->hasPermissionTo('delete publicacion');
    }

    /**
     * Determine whether the publicacion can restore the model.
     *
     * @param  App\Models\publicacion  $publicacion
     * @param  App\Models\publicacion  $model
     * @return mixed
     */
    public function restore(User $user, Publicacion $model)
    {
        return false;
    }

    /**
     * Determine whether the publicacion can permanently delete the model.
     *
     * @param  App\Models\publicacion  $publicacion
     * @param  App\Models\publicacion  $model
     * @return mixed
     */
    public function forceDelete(User $user, Publicacion $model)
    {
        return false;
    }
}
