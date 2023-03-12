<?php

declare(strict_types=1);

namespace App\Requests\User;

use Illuminate\Contracts\Support\Arrayable;

interface UpdateUserRequestInterface extends Arrayable
{
    public function firstName(): string;

    public function lastName(): ?string;

    public function phone(): string;

    public function email(): string;
}
