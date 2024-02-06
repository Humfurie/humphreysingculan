<?php

namespace App\Http\Controllers\Frontend\User;

use Domain\Users\Models\User;

class UsersController
{
    /**
     * @return mixed
     */
    public function index()
    {
        return User::whereStatus('active')->get();
    }

    /**
     * @param User $user
     * @return User
     */
    public function show(User $user): User
    {
        return $user;
    }

    /**
     * @param User $user
     * @return User
     */
    public function edit(User $user): User
    {
        return $user;
    }

    /**
     * @param User $user
     * @return void
     */
    public function update(User $user)
    {

    }

    /**
     * @param User $user
     * @return void
     */
    public function delete(User $user)
    {
    }
}
