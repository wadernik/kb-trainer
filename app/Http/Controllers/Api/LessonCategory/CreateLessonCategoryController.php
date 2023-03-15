<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\LessonCategory;

use App\Forms\LessonCategory\CreateLessonCategoryRequestForm;
use App\Http\Controllers\Api\AbstractApiController;
use App\Managers\LessonCategory\LessonCategoryManagerInterface;
use App\Requests\LessonCategory\CreateLessonCategoryRequest;
use Illuminate\Http\JsonResponse;

final class CreateLessonCategoryController extends AbstractApiController
{
    public function store(CreateLessonCategoryRequestForm $form, LessonCategoryManagerInterface $manager): JsonResponse
    {
        $request = new CreateLessonCategoryRequest($form->validated());

        $lessonCategory = $manager->create($request);

        return $this->responseSuccess($lessonCategory->toArray());
    }
}
