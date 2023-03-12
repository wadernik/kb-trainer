<?php

declare(strict_types=1);

namespace App\Managers\User;

use Illuminate\Database\Eloquent\Model;

interface UserDeleterInterface
{
    public function delete(int $id): ?Model;
}
