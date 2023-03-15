<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\LessonCategory;

use App\Forms\LessonCategory\UpdateLessonCategoryRequestForm;
use App\Http\Controllers\Api\AbstractApiController;
use App\Managers\LessonCategory\LessonCategoryManagerInterface;
use App\Requests\LessonCategory\UpdateLessonCategoryRequest;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class UpdateLessonCategoryController extends AbstractApiController
{
    public function update(
        int $id,
        UpdateLessonCategoryRequestForm $form,
        LessonCategoryManagerInterface $manager
    ): JsonResponse
    {
        $request = new UpdateLessonCategoryRequest($form->validated());

        if (!$lessonCategory = $manager->update($id, $request)) {
            return $this->responseError(code: Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        return $this->responseSuccess($lessonCategory->toArray());
    }
}
