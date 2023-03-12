<?php

declare(strict_types=1);

namespace App\Repositories\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

final class UserRepository implements UserRepositoryInterface
{
    /**
     * @param array $criteria
     * @param array $sort
     * @param int|null $limit
     * @param int|null $offset
     * @return array<Model>
     */
    public function findAllBy(array $criteria, array $sort = [], ?int $limit = null, ?int $offset = null): array
    {
        $userQuery = User::query();

        foreach ($criteria as $key => $criterion) {
            $userQuery->where($key, $criterion);
        }

        if (!$sort) {
            $sort = [
                'sort' => 'id',
                'order' => 'desc',
            ];
        }

        $userQuery->orderBy($sort['sort'], $sort['order']);

        if ($limit) {
            $userQuery->limit($limit);
        }

        if ($offset && $limit) {
            $userQuery->offset($limit * ($offset - 1));
        }

        return $userQuery->get()->toArray();
    }

    public function find(int $id): ?Model
    {
        return User::query()->find($id);
    }
}
