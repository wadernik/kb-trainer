<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\LessonCategory;

use App\Forms\LessonCategory\ListLessonCategoryRequestForm;
use App\Http\Controllers\Api\AbstractApiController;
use App\Repositories\LessonCategory\LessonCategoryRepositoryInterface;
use App\Requests\LessonCategory\ListLessonCategoryRequest;
use Illuminate\Http\JsonResponse;

final class ListLessonCategoryController extends AbstractApiController
{
    public function list(
        ListLessonCategoryRequestForm $form,
        LessonCategoryRepositoryInterface $repository
    ): JsonResponse
    {
        $request = new ListLessonCategoryRequest($form->validated());

        $categories = $repository->findAllBy(
            $request->criteria(),
            $request->sort(),
            $request->limit(),
            $request->offset()
        );

        return $this->responseSuccess($categories);
    }
}
