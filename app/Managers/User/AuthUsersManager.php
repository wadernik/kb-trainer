<?php

namespace App\Managers\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthUsersManager
{
    /**
     * @param array $attributes
     * @param string $deviceName
     * @return string|null
     */
    public function getToken(array $attributes, string $deviceName = 'auth_token'): ?string
    {
        if (!Auth::attempt($attributes)) {
            return '';
        }

        $user = User::query()->find($attributes['id']);

        if (!$user) {
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
