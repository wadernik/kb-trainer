<?php

declare(strict_types=1);

namespace App\Requests\Lesson;

use JetBrains\PhpStorm\ArrayShape;

final class UpdateLessonRequest implements UpdateLessonRequestInterface
{
    public function __construct(
        #[ArrayShape([
            'required_progression' => 'int|null',
            'code' => 'string|null',
            'lesson' => 'string'
        ])]
        private readonly array $attributes
    )
    {
    }

    public function requiredProgression(): ?int
    {
        return $this->attributes['required_progression'] ?? null;
    }

    public function code(): ?string
    {
        return $this->attributes['code'] ?? null;
    }

    public function lesson(): string
    {
        return $this->attributes['lesson'];
    }

    public function toArray(): array
    {
        return $this->attributes;
    }
}
