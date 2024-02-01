<?php

namespace App\Http\Controllers\frontend\Role;

use App\Http\Controllers\Controller;
use Domain\Roles\Models\Role;

class RolesController extends Controller
{
    public function index()
    {
        return Role::query()->get();
    }

    public function store()
    {

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

    public function delete()
    {

    }
}
