<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\LessonCategory;

use App\Http\Controllers\Api\AbstractApiController;
use App\Repositories\LessonCategory\LessonCategoryRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class GetLessonCategoryController extends AbstractApiController
{
    public function get(int $id, LessonCategoryRepositoryInterface $repository): JsonResponse
    {
        if (!$lessonCategory = $repository->find($id)) {
            return $this->responseError(code: Response::HTTP_NOT_FOUND);
        }

        return $this->responseSuccess($lessonCategory->toArray());
    }
}
