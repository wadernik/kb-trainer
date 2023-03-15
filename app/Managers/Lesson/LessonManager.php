<?php

declare(strict_types=1);

namespace App\Managers\Lesson;

use App\Models\Lesson;
use App\Requests\Lesson\CreateLessonRequest;
use App\Requests\Lesson\UpdateLessonRequest;
use Illuminate\Database\Eloquent\Model;

final class LessonManager implements LessonManagerInterface
{
    public function create(CreateLessonRequest $request): Model
    {
        return Lesson::query()->create($request->toArray());
    }

    public function update(int $id, UpdateLessonRequest $request): ?Model
    {
        if (!$lesson = Lesson::query()->find($id)) {
            return null;
        }

        $lesson->update($request->toArray());

        return $lesson;
    }

    public function delete(int $id): ?Model
    {
        if (!$lesson = Lesson::query()->find($id)) {
            return null;
        }

        $lesson->delete();

        return $lesson;
    }
}
