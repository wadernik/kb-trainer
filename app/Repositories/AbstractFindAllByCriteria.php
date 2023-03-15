<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractFindAllByCriteria implements FindAllByCriteriaInterface
{
    public function __construct(private readonly Builder $builder)
    {
    }

    /**
     * @param array $criteria
     * @param array $sort
     * @param int|null $limit
     * @param int|null $offset
     * @return array<Model>
     */
    public function findAllBy(array $criteria, array $sort = [], ?int $limit = null, ?int $offset = null): array
    {
        foreach ($criteria as $key => $criterion) {
            $this->builder->where($key, $criterion);
        }

        if (!$sort) {
            $sort = [
                'sort' => 'id',
                'order' => 'desc',
            ];
        }

        $this->builder->orderBy($sort['sort'], $sort['order']);

        if ($limit) {
            $this->builder->limit($limit);
        }

        if ($offset && $limit) {
            $this->builder->offset($limit * ($offset - 1));
        }

        return $this->builder->get()->toArray();
    }
}
