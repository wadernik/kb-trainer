<?php

declare(strict_types=1);

namespace App\Managers\LessonCategory;

use App\Models\LessonCategory;
use App\Requests\LessonCategory\CreateLessonCategoryRequest;
use App\Requests\LessonCategory\UpdateLessonCategoryRequest;
use Illuminate\Database\Eloquent\Model;

final class LessonCategoryManager implements LessonCategoryManagerInterface
{
    public function create(CreateLessonCategoryRequest $request): Model
    {
        return LessonCategory::query()->create($request->toArray());
    }

    public function update(int $id, UpdateLessonCategoryRequest $request): ?Model
    {
        if (!$lessonCategory = LessonCategory::query()->find($id)) {
            return null;
        }

        $lessonCategory->update($request->toArray());

        return $lessonCategory;
    }

    public function delete(int $id): ?Model
    {
        $lessonCategory = LessonCategory::query()->find($id);

        if (!$lessonCategory) {
            return null;
        }

        $lessonCategory->delete();

        return $lessonCategory;
    }
}
