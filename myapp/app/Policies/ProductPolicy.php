<?php

namespace App\Policies;

use App\Models\User;

class ProductPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function index(User $user) {
        return $user->role === 'admin';
    }

    public function store(User $user) {
        return $user->role === 'admin';
    }

    public function update($user) {
        return $user->role === 'admin';
    }

    public function destroy(User $user) {
        return $user->role === 'admin';
    }
}
