<?php

declare(strict_types=1);

namespace App\Requests\User;

use JetBrains\PhpStorm\ArrayShape;

final class LoginUserRequest implements LoginRequestInterface
{
    public function __construct(
        #[ArrayShape([
            'username' => 'string',
            'password' => 'password',
        ])]
        private readonly array $attributes
    )
    {
    }

    public function username(): string
    {
        return $this->attributes['username'];
    }

    public function password(): string
    {
        return $this->attributes['password'];
    }

    public function toArray(): array
    {
        return $this->attributes;
    }
}
