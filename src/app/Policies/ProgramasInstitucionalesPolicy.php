<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ProgramasInstitucionales;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProgramasInstitucionalesPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the ProgramasInstitucionales can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list programas');
    }

    /**
     * Determine whether the ProgramasInstitucionales can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ProgramasInstitucionales  $model
     * @return mixed
     */
    public function view(User $user, ProgramasInstitucionales $model)
    {
        return $user->hasPermissionTo('view programas');

    }

    /**
     * Determine whether the ProgramasInstitucionales can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create programas');

    }

    /**
     * Determine whether the ProgramasInstitucionales can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ProgramasInstitucionales  $model
     * @return mixed
     */
    public function update(User $user, ProgramasInstitucionales $model)
    {
        return $user->hasPermissionTo('update programas');
    }

    /**
     * Determine whether the ProgramasInstitucionales can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ProgramasInstitucionales  $model
     * @return mixed
     */
    public function delete(User $user, ProgramasInstitucionales $model)
    {
        return $user->hasPermissionTo('delete programas');
    }

    /**
     * Determine whether the ProgramasInstitucionales can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ProgramasInstitucionales $model
     * @return mixed
     */
    public function restore(User $user, ProgramasInstitucionales $model)
    {
        return false;
    }

    /**
     * Determine whether the ProgramasInstitucionales can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ProgramasInstitucionales  $model
     * @return mixed
     */
    public function forceDelete(User $user, ProgramasInstitucionales $model)
    {
        return false;
    }
}
