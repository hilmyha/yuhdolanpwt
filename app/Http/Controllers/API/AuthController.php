<?php

namespace App\Http\Controllers\API;

use App\Actions\Fortify\CreateNewUser;
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
    public function register(Request $request, CreateNewUser $createNewUser)
    {
        $request->validate([
            'username' => 'required|string|unique:users',
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => ['required', 'confirmed', new Password],
        ]);

        // $user = User::create([
        //     'username' => $request->username,
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        $user = $createNewUser->create($request->all());

        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json(
            [
                'status' => true,
                'message' => 'Register berhasil',
                'token' => $token,
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
                    'token' => $token,
                ],
                200
            );
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Login gagal',
                    'token' => null,
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
                'token' => null,
            ],
            200
        );
    }
}
