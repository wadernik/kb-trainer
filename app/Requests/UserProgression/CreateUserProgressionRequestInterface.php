<?php

declare(strict_types=1);

namespace App\Requests\UserProgression;

use Illuminate\Contracts\Support\Arrayable;

interface CreateUserProgressionRequestInterface extends Arrayable
{
    public function userId(): int;

    public function lessonId(): int;

    public function progression(): int;
}
