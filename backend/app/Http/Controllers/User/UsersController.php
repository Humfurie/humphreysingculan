<?php

namespace App\Http\Controllers\User;

use Domain\Users\Models\User;
use Illuminate\Support\Collection;

class UsersController
{
    public function index(): User|Collection
    {
        return User::all();
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function softDelete()
    {

    }

    public function forceDelete()
    {

    }

    public function restore()
    {

    }
}
