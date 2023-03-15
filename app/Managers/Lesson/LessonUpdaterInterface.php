<?php

declare(strict_types=1);

namespace App\Managers\Lesson;

use App\Requests\Lesson\UpdateLessonRequest;
use Illuminate\Database\Eloquent\Model;

interface LessonUpdaterInterface
{
    public function update(int $id, UpdateLessonRequest $request): ?Model;
}
