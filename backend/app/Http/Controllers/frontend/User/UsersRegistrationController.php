<?php

namespace App\Http\Controllers\frontend\User;

use App\Http\Controllers\Controller;
use Domain\Users\Models\User;
use Domain\Users\Requests\UsersRegistrationFormRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UsersRegistrationController extends Controller
{
    public function register(UsersRegistrationFormRequest $request): \Illuminate\Http\JsonResponse
    {
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'bio' => $request->bio,
            'remember_token' => $request->remember_me ? Str::random(10) : null,
        ]);

        event(new Registered($user));

        Auth::login($user);

        $token = $user->createToken($user->password)->plainTextToken;

        return response()->json([
            'message' => "Registration Successful",
            'token' => $token,
        ]);
    }
}
