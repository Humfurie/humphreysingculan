<?php

namespace App\Http\Controllers\Auth;

use App\Domain\Auth\Requests\LoginFormRequest;
use App\Domain\Users\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login(LoginFormRequest $request): JsonResponse
    {
        if (!Auth::attempt(['password' => $request->password, 'email' => Str::lower($request->email)])) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $user = User::whereEmail($request->email)->first();

        $user->update([
            'last_login' => now()
        ]);

        $user = $request->remember_me === 1 ? $user->update([
            'remember_token' => Str::random(10),
        ]) : $user;

        $user->tokens()->delete();

        $token = $user->createToken($user->username, ['*'], $user->remember_token !== null ? now()->addDecade(1) : now()->addDay(1))->plainTextToken;

        return response()->json([
            'message' => 'Logged in Successfully',
            'user' => $user,
            'token' => $token,
        ], 200);
    }

    public function logout(Request $request): JsonResponse
    {
        $user = Auth::user();

        $user->update([
            'remember_token' => null,
        ]);

        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();

        return response()->json(['message' => 'Successfully logged out']);
    }
}
