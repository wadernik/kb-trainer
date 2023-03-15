<?php

declare(strict_types=1);

namespace App\Requests\LessonCategory;

use JetBrains\PhpStorm\ArrayShape;

final class CreateLessonCategoryRequest implements CreateLessonCategoryRequestInterface
{
    public function __construct(
        #[ArrayShape(['name' => 'string'])]
        private readonly array $attributes
    )
    {
    }

    public function name(): string
    {
        return $this->attributes['name'];
    }

    public function toArray(): array
    {
        return $this->attributes;
    }
}
