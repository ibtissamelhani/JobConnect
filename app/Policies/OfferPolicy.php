<?php

namespace App\Policies;

use App\Models\Offer;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class OfferPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Offer $offer)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->roles->whereIn('name', ['Agent', 'Recruiter'])->isNotEmpty();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Offer $offer)
    {
        return $user->id == $offer->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Offer $offer)
    {
        return $user->id == $offer->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Offer $offer)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Offer $offer)
    {
        //
    }
}
