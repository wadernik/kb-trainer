<?php

declare(strict_types=1);

namespace App\Repositories\LessonCategory;

use App\Models\LessonCategory;
use App\Repositories\AbstractFindAllByCriteria;
use Illuminate\Database\Eloquent\Model;

final class LessonCategoryRepository extends AbstractFindAllByCriteria implements LessonCategoryRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(LessonCategory::query());
    }

    public function find(int $id): ?Model
    {
        return LessonCategory::query()->find($id);
    }
}
