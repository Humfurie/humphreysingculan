<?php

namespace App\Http\Controllers\frontend\Role;

use App\Domain\Roles\Models\Role;
use App\Domain\Roles\Requests\RoleFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class RolesController extends Controller
{
    public function index(): JsonResponse
    {
        $roles = Role::query()->get();

        return response()->json([
            'roles' => $roles
        ], 200);
    }

    public function store(RoleFormRequest $request): JsonResponse
    {
        Role::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
        ]);

        return response()->json([
            'message' => 'Role Saved Successfully'
        ], 200);
    }

    public function show(Role $role): JsonResponse
    {
        return response()->json([
            'role' => $role
        ], 200);
    }

    public function edit(Role $role): JsonResponse
    {
        return response()->json([
            'role' => $role,
        ], 200);
    }

    public function update(Role $role, RoleFormRequest $request): JsonResponse
    {
        if ($role->id === 1) {
            return response()->json([
                'message' => 'Unable to edit specific Role'
            ], 404);
        }

        $role->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
        ]);

        return response()->json([
            'message' => 'Role Updated Successfully',
        ], 200);
    }

    public function delete(Role $role): JsonResponse
    {
        if ($role->id === 1) {
            return response()->json([
                'message' => 'Unable to delete specific Role'
            ], 404);
        }

        $role->delete();
        return response()->json([
            'message' => 'Role Deleted Successfully',
        ]);
    }
}
