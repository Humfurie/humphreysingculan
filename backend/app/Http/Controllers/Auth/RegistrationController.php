<?php

namespace App\Http\Controllers\Auth;

use App\Domain\Auth\Requests\RegistrationFormRequest;
use App\Domain\Users\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{
    public function register(RegistrationFormRequest $request): \Illuminate\Http\JsonResponse
    {
        $user = User::create([
            'username' => Str::lower($request->username),
            'email' => Str::lower($request->email),
            'password' => $request->password,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'bio' => $request->bio,
            'remember_token' => $request->remember_me ? Str::random(10) : null,
        ]);

        event(new Registered($user));

        Auth::login($user);

        $token = $user->createToken($user->password, ['*'], now()->addDay(1))->plainTextToken;

        return response()->json([
            'message' => "Registration Successful",
            'token' => $token,
        ], 200);
    }
}
