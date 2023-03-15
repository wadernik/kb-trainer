<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\LessonCategory;

use App\Http\Controllers\Api\AbstractApiController;
use App\Managers\LessonCategory\LessonCategoryManagerInterface;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class DeleteLessonCategoryController extends AbstractApiController
{
    public function delete(int $id, LessonCategoryManagerInterface $manager): JsonResponse
    {
        if (!$lessonCategory = $manager->delete($id)) {
            return $this->responseError(code: Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        return $this->responseSuccess($lessonCategory->toArray());
    }
}
