<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface FindAllByCriteriaInterface
{
    /**
     * @param array $criteria
     * @param array $sort
     * @param int|null $limit
     * @param int|null $offset
     * @return array<Model>
     */
    public function findAllBy(array $criteria, array $sort = [], ?int $limit = null, ?int $offset = null): array;
}
