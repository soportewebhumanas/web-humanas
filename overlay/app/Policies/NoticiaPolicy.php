<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Noticia;
use Illuminate\Auth\Access\HandlesAuthorization;

class NoticiaPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the Noticia can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        
        return $user->hasPermissionTo('list noticias');
    }

    /**
     * Determine whether the Noticia can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Noticia  $model
     * @return mixed
     */
    public function view(User $user, Noticia $model)
    {
        return $user->hasPermissionTo('view noticias');
    }

    /**
     * Determine whether the Noticia can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create noticias');
    }

    /**
     * Determine whether the Noticia can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Noticia  $model
     * @return mixed
     */
    public function update(User $user, Noticia $model)
    {
        return $user->hasPermissionTo('update noticias');
    }

    /**
     * Determine whether the Noticia can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Noticia  $model
     * @return mixed
     */
    public function delete(User $user, Noticia $model)
    {
        return $user->hasPermissionTo('delete noticias');
    }

    /**
     * Determine whether the Noticia can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Noticia $model
     * @return mixed
     */
    public function restore(User $user, Noticia $model)
    {
        return false;
    }

    /**
     * Determine whether the Noticia can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Noticia  $model
     * @return mixed
     */
    public function forceDelete(User $user, Noticia $model)
    {
        return false;
    }
}
