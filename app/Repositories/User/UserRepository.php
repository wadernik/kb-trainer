<?php

declare(strict_types=1);

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\AbstractFindAllByCriteria;
use Illuminate\Database\Eloquent\Model;

final class UserRepository extends AbstractFindAllByCriteria implements UserRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(User::query());
    }

    public function find(int $id): ?Model
    {
        return User::query()->find($id);
    }
}
