<?php

declare(strict_types=1);

namespace App\Managers\UserProgression;

use Illuminate\Database\Eloquent\Model;

interface UserProgressionDeleterInterface
{
    public function delete(int $id): ?Model;
}
