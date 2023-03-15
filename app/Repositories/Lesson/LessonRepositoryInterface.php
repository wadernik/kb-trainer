<?php

declare(strict_types=1);

namespace App\Repositories\Lesson;

use App\Repositories\FindAllByCriteriaInterface;

interface LessonRepositoryInterface extends FindAllByCriteriaInterface, LessonFindOneByIdInterface
{
}
