<?php

namespace App\Policies;

use App\Models\Inspection;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InspectionPolicy
{
    use HandlesAuthorization;

    public function before(?User $user = null, $ability)
    {
        if ($user && $user->is_admin /*&& $ability === 'update'*/) {
            return true;
        }
    }

    public function viewAny(?User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Inspection  $inspection
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(?User $user, Inspection $inspection)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Inspection  $inspection
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Inspection $inspection)
    {
        return $user->id === $inspection->by_user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Inspection  $inspection
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Inspection $inspection)
    {
        $user->id === $inspection->by_user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Inspection  $inspection
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Inspection $inspection)
    {
        return $user->id === $inspection->by_user_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Inspection  $inspection
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Inspection $inspection)
    {
        $user->id === $inspection->by_user_id;
    }
}