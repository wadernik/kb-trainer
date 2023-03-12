<?php

declare(strict_types=1);

namespace App\Requests\User;

use Illuminate\Contracts\Support\Arrayable;

interface CreateUserRequestInterface extends Arrayable
{
    public function username(): string;

    public function password(): string;

    public function firstName(): string;

    public function lastName(): ?string;

    public function phone(): string;

    public function email(): string;
}
