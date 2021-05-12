<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $users = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);

        $token = $users->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $users,
            'token' => $token,
            'message' => 'Invalid name, email and password.'
        ];

        return response($response, 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // Check email
        //select user_table where email=email
        $users = User::where('email', $request['email'])->first();

        //Check password
        if (!$users || !Hash::check($request['password'], $users->password)) {
            return response([
                'message' => 'Invalid email or password'
            ], 401);
        }

        $token = $users->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $users,
            'token' => $token
        ];

        return response($response, 201);
    }
    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Logged out'
        ];
    }
}
