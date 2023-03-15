<?php

declare(strict_types=1);

namespace App\Requests\Lesson;

interface ListLessonRequestInterface
{
    public function criteria(): array;

    public function sort(): array;

    public function offset(): ?int;

    public function limit(): ?int;
}
