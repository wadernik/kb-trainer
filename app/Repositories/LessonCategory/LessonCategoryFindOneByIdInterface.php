<?php

declare(strict_types=1);

namespace App\Repositories\LessonCategory;

use Illuminate\Database\Eloquent\Model;

interface LessonCategoryFindOneByIdInterface
{
    public function find(int $id): ?Model;
}
