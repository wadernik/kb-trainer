<?php

declare(strict_types=1);

namespace App\Requests\Lesson;

use Illuminate\Contracts\Support\Arrayable;

interface CreateLessonRequestInterface extends Arrayable
{
    public function categoryId(): int;

    public function requiredProgression(): ?int;

    public function code(): ?string;

    public function lesson(): string;
}
