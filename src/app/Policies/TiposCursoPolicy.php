<?php

namespace App\Policies;

use App\Models\User;
use App\Models\TiposCurso;
use Illuminate\Auth\Access\HandlesAuthorization;

class TiposCursoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the tiposCurso can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list tiposcursos');
    }

    /**
     * Determine whether the tiposCurso can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TiposCurso  $model
     * @return mixed
     */
    public function view(User $user, TiposCurso $model)
    {
        return $user->hasPermissionTo('view tiposcursos');
    }

    /**
     * Determine whether the tiposCurso can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create tiposcursos');
    }

    /**
     * Determine whether the tiposCurso can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TiposCurso  $model
     * @return mixed
     */
    public function update(User $user, TiposCurso $model)
    {
        return $user->hasPermissionTo('update tiposcursos');
    }

    /**
     * Determine whether the tiposCurso can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TiposCurso  $model
     * @return mixed
     */
    public function delete(User $user, TiposCurso $model)
    {
        return $user->hasPermissionTo('delete tiposcursos');
    }

    /**
     * Determine whether the tiposCurso can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TiposCurso  $model
     * @return mixed
     */
    public function restore(User $user, TiposCurso $model)
    {
        return false;
    }

    /**
     * Determine whether the tiposCurso can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\TiposCurso  $model
     * @return mixed
     */
    public function forceDelete(User $user, TiposCurso $model)
    {
        return false;
    }
}
