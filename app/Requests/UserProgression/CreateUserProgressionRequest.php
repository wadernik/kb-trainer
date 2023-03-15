<?php

declare(strict_types=1);

namespace App\Requests\UserProgression;

use JetBrains\PhpStorm\ArrayShape;

final class CreateUserProgressionRequest implements CreateUserProgressionRequestInterface
{
    public function __construct(
        #[ArrayShape([
            'user_id' => 'int',
            'lesson_id' => 'int',
            'progression' => 'int',
        ])]
        private readonly array $attributes
    )
    {
    }

    public function userId(): int
    {
        return $this->attributes['user_id'];
    }

    public function lessonId(): int
    {
        return $this->attributes['lesson_id'];
    }

    public function progression(): int
    {
        return $this->attributes['progression'];
    }

    public function toArray(): array
    {
        return $this->attributes;
    }
}
