<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function authLogin(Request $request)
    {
        $request->validate([
            'usernameOrEmail' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('name', $request->usernameOrEmail)->orWhere('email', $request->usernameOrEmail)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'usernameOrEmail' => ['The provided credentials are incorrect.'],
            ]);
        }

        //auth user
        auth()->login($user);

        // Authentication successful
        // Add your logic here

        //dd($user);

        //return response()->json(['message' => 'Authentication successful']);

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}

