<?php

declare(strict_types=1);

namespace App\Requests\User;

use Illuminate\Contracts\Support\Arrayable;

interface LoginRequestInterface extends Arrayable
{
    public function username(): string;

    public function password(): string;
}
