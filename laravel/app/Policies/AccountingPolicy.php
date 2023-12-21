<?php

namespace App\Policies;

use App\Models\Accounting;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AccountingPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(?User $user): bool
    {
        if($user === null)
        {
            return false;
        }
        elseif($user->role == "superadmin")
        {
            return true;
        }
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Accounting $accounting): bool
    {
        if($user->id == $accounting->creator_user_id)
        {
            return true;
        }
        elseif ($user->role == "superadmin" or $user->role == "editor")
        {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(?User $user, Accounting $accounting): bool
    {
        if ($user->role == "superadmin")
        {
            return true;
        }
        elseif($user->id == $accounting->creator_user_id)
        {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user): bool
    {
        return false;
    }
}
