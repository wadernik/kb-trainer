<?php

declare(strict_types=1);

namespace App\Repositories\UserProgression;

use Illuminate\Database\Eloquent\Model;

interface UserProgressionFindOneByIdInterface
{
    public function find(int $id): ?Model;
}
