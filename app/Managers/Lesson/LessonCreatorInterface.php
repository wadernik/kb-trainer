<?php

declare(strict_types=1);

namespace App\Managers\Lesson;

use App\Requests\Lesson\CreateLessonRequest;
use Illuminate\Database\Eloquent\Model;

interface LessonCreatorInterface
{
    public function create(CreateLessonRequest $request): Model;
}
