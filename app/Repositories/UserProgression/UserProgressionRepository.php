<?php

declare(strict_types=1);

namespace App\Repositories\UserProgression;

use App\Models\UserProgression;
use App\Repositories\AbstractFindAllByCriteria;
use Illuminate\Database\Eloquent\Model;

final class UserProgressionRepository extends AbstractFindAllByCriteria implements UserProgressionRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(UserProgression::query());
    }

    public function find(int $id): ?Model
    {
        return UserProgression::query()->find($id);
    }
}
