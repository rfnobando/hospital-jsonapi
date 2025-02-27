<?php

namespace App\Policies;

use App\Models\Locality;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LocalityPolicy
{

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(?User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(?User $user, Locality $locality)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user != null;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Locality $locality)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Locality $locality)
    {
        //
    }

}
