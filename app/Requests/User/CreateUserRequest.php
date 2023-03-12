<?php

declare(strict_types=1);

namespace App\Requests\User;

use JetBrains\PhpStorm\ArrayShape;

final class CreateUserRequest implements CreateUserRequestInterface
{
    public function __construct(
        #[ArrayShape([
            'username' => 'string',
            'password' => 'string',
            'first_name' => 'string',
            'last_name' => 'string|null',
            'phone' => 'string',
            'email' => 'string',
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

    public function firstName(): string
    {
        return $this->attributes['first_name'];
    }

    public function lastName(): ?string
    {
        return $this->attributes['last_name'];
    }

    public function phone(): string
    {
        return $this->attributes['phone'];
    }

    public function email(): string
    {
        return $this->attributes['email'];
    }

    public function toArray(): array
    {
        return $this->attributes;
    }
}
