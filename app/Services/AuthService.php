<?php

namespace App\Services;

use App\Models\Locality;
use App\Models\Address;
use App\Models\Person;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function login(array $data)
    {
        if(Auth::attempt($data)) {
            $user = User::where('email', $data['email'])->first();
            $token = $user->createToken('basic-token')->plainTextToken;

            return [
                'message' => 'Logged in successfully.',
                'status_code' => 200,
                'token' => $token
            ];
        }

        return [
            'message' => 'Invalid credentials.',
            'status_code' => 401
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