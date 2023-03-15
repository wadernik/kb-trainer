<?php

declare(strict_types=1);

namespace App\Requests\UserProgression;

use JetBrains\PhpStorm\ArrayShape;

final class ListUserProgressionRequest implements ListUserProgressionRequestInterface
{
    public function __construct(
        #[ArrayShape([
            'filter' => 'array|null',
            'sort' => 'array|null',
            'limit' => 'int|null',
            'offset' => 'int|null',
        ])]
        private readonly array $requestParams
    )
    {
    }

    public function criteria(): array
    {
        return $this->requestParams['filter'] ?? [];
    }

    public function sort(): array
    {
        return $this->requestParams['sort'] ?? [];
    }

    public function offset(): ?int
    {
        return $this->requestParams['offset'] ?? null;
    }

    public function limit(): ?int
    {
        return $this->requestParams['limit'] ?? null;
    }
}
