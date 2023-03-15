<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Lesson;

use App\Forms\Lesson\CreateLessonRequestForm;
use App\Http\Controllers\Api\AbstractApiController;
use App\Managers\Lesson\LessonManagerInterface;
use App\Requests\Lesson\CreateLessonRequest;
use Illuminate\Http\JsonResponse;

final class CreateLessonController extends AbstractApiController
{
    public function store(CreateLessonRequestForm $form, LessonManagerInterface $manager): JsonResponse
    {
        $request = new CreateLessonRequest($form->validated());

        $lesson = $manager->create($request);

        return $this->responseSuccess($lesson->toArray());
    }
}
