<?php

declare(strict_types=1);

namespace App\Managers\UserProgression;

use App\Requests\UserProgression\UpdateUserProgressionRequestInterface;
use Illuminate\Database\Eloquent\Model;

interface UserProgressionUpdaterInterface
{
    public function update(int $id, UpdateUserProgressionRequestInterface $request): ?Model;
}
