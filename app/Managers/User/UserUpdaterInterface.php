<?php

declare(strict_types=1);

namespace App\Managers\User;

use App\Requests\User\UpdateUserRequestInterface;
use Illuminate\Database\Eloquent\Model;

interface UserUpdaterInterface
{
    public function update(int $id, UpdateUserRequestInterface $request): ?Model;
}
