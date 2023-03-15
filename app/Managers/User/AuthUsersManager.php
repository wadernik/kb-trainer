<?php

namespace App\Managers\User;

use App\Models\User;
use App\Requests\User\LoginRequestInterface;
use Illuminate\Support\Facades\Auth;

class AuthUsersManager
{
    public function getToken(LoginRequestInterface $loginRequest, string $deviceName = 'auth_token'): ?string
    {
        if (!Auth::attempt($loginRequest->toArray())) {
            return '';
        }

        if (!$user = User::query()->where('username', $loginRequest->username())->first()) {
            return null;
        }

        $this->revokeTokenByDeviceName($deviceName);

        return $user
            ->createToken($deviceName)
            ->plainTextToken;
    }

    /**
     * @param string $deviceName
     */
    public function revokeTokenByDeviceName(string $deviceName): void
    {
        auth('sanctum')->user()?->tokens()->where('name', 'LIKE', $deviceName)->delete();
    }

    /**
     * @param int $id
     */
    public function revokeTokenById(int $id): void
    {
        auth('sanctum')->user()?->tokens()->where('id', $id)->delete();
    }

    public function revokeAllTokens(): void
    {
        auth('sanctum')->user()?->tokens()->delete();
    }
}
