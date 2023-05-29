<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Rules\Password;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // register
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:users',
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => ['required', 'confirmed', new Password],
        ]);

        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json(
            [
                'status' => true,
                'message' => 'Register berhasil',
                'data' => [
                    'user' => $user,
                    'token' => $token,
                ]
            ],
            201
        );
    }
    
    // login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('username', 'password'))) {
            $user = Auth::user();

            $token = $user->createToken('api-token')->plainTextToken;
            
            return response()->json(
                [
                    'status' => true,
                    'message' => 'Login berhasil',
                    'data' => [
                        'user' => $user,
                        'token' => $token,
                    ],
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Login gagal',
                    'data' => null,
                ],
                401
            );
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    // logout
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(
            [
                'status' => true,
                'message' => 'Logout berhasil',
                'data' => null,
            ],
            200
        );
    }
}
