<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Lesson;

use App\Http\Controllers\Api\AbstractApiController;
use App\Managers\Lesson\LessonManagerInterface;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class DeleteLessonController extends AbstractApiController
{
    public function delete(int $id, LessonManagerInterface $manager): JsonResponse
    {
        if (!$lesson = $manager->delete($id)) {
            return $this->responseError(code: Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        return $this->responseSuccess($lesson->toArray());
    }
}
