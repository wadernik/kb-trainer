<?php

declare(strict_types=1);

namespace App\Repositories\User;

use Illuminate\Database\Eloquent\Model;

interface UserFindOneByIdInterface
{
    public function find(int $id): ?Model;
}
