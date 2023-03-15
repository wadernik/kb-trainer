<?php

declare(strict_types=1);

namespace App\Managers\LessonCategory;

use App\Requests\LessonCategory\CreateLessonCategoryRequest;
use Illuminate\Database\Eloquent\Model;

interface LessonCategoryCreatorInterface
{
    public function create(CreateLessonCategoryRequest $request): Model;
}
