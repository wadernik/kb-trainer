<?php

declare(strict_types=1);

namespace App\Requests\UserProgression;

use JetBrains\PhpStorm\ArrayShape;

final class UpdateUserProgressionRequest implements UpdateUserProgressionRequestInterface
{
    public function __construct(
        #[ArrayShape(['progression' => 'int'])]
        private readonly array $attributes
    )
    {
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
