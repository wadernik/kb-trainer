<?php

declare(strict_types=1);

namespace App\Requests\Lesson;

use JetBrains\PhpStorm\ArrayShape;

final class CreateLessonRequest implements CreateLessonRequestInterface
{
    public function __construct(
        #[ArrayShape([
            'category_id' => 'int',
            'required_progression' => 'int|null',
            'code' => 'string|null',
            'lesson' => 'string',
        ])]
        private readonly array $attributes
    )
    {
    }

    public function categoryId(): int
    {
        return $this->attributes['category_id'];
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
