<?php

declare(strict_types=1);

namespace App\Managers\LessonCategory;

use App\Requests\LessonCategory\UpdateLessonCategoryRequest;
use Illuminate\Database\Eloquent\Model;

interface LessonCategoryUpdaterInterface
{
    public function update(int $id, UpdateLessonCategoryRequest $request): ?Model;
}
