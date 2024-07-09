<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    protected AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(LoginRequest $request): JsonResponse
    {
        $data = $request->validated();
        $arrayResponse = $this->authService->doLogin($data);

        return new JsonResponse($arrayResponse, $arrayResponse['status_code']);
    }

    public function logout(): JsonResponse
    {
        $arrayResponse = $this->authService->logout();

        return new JsonResponse($arrayResponse, $arrayResponse['status_code']);
    }
}
