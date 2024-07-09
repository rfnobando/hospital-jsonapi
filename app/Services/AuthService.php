<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function doLogin(array $data)
    {
        if(!Auth::attempt($data)) {
            return [
                'message' => 'Invalid credentials.',
                'status_code' => 401
            ];
        }

        return [
            'message' => 'Logged in successfully.',
            'status_code' => 200,
            'token' => Auth::user()->createToken('basic-token')->plainTextToken
        ];
    }

    public function logout(): array
    {
        Auth::user()->tokens()->delete();
        $tokensCount = Auth::user()->tokens()->count();

        if($tokensCount === 0) {
            return [
                'message' => 'Logged out successfully.',
                'status_code' => 200
            ];
        }

        return [
            'message' => 'Error when trying to delete tokens.',
            'status_code' => 500
        ];
    }
}