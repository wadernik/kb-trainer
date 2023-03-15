<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Lesson;

use App\Http\Controllers\Api\AbstractApiController;
use App\Repositories\Lesson\LessonRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class GetLessonController extends AbstractApiController
{
    public function get(int $id, LessonRepositoryInterface $repository): JsonResponse
    {
        if (!$lesson = $repository->find($id)) {
            return $this->responseError(code: Response::HTTP_NOT_FOUND);
        }

        return $this->responseSuccess($lesson->toArray());
    }
}
