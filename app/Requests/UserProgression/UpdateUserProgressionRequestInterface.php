<?php

declare(strict_types=1);

namespace App\Requests\UserProgression;

use Illuminate\Contracts\Support\Arrayable;

interface UpdateUserProgressionRequestInterface extends Arrayable
{
    public function progression(): int;
}
