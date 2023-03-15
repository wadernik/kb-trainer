<?php

declare(strict_types=1);

namespace App\Repositories\LessonCategory;

use App\Repositories\FindAllByCriteriaInterface;

interface LessonCategoryRepositoryInterface extends FindAllByCriteriaInterface, LessonCategoryFindOneByIdInterface
{
}
