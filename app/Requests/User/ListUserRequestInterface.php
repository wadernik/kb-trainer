<?php

declare(strict_types=1);

namespace App\Requests\User;

interface ListUserRequestInterface
{
    public function criteria(): array;

    public function sort(): array;

    public function offset(): ?int;

    public function limit(): ?int;
}
