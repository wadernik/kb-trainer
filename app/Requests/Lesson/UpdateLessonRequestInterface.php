<?php

declare(strict_types=1);

namespace App\Requests\Lesson;

use Illuminate\Contracts\Support\Arrayable;

interface UpdateLessonRequestInterface extends Arrayable
{
    public function requiredProgression(): ?int;

    public function code(): ?string;

    public function lesson(): string;
}
