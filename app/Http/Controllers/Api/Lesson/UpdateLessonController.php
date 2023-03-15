<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Lesson;

use App\Forms\Lesson\UpdateLessonRequestForm;
use App\Http\Controllers\Api\AbstractApiController;
use App\Managers\Lesson\LessonManagerInterface;
use App\Requests\Lesson\UpdateLessonRequest;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class UpdateLessonController extends AbstractApiController
{
    public function update(int $id, UpdateLessonRequestForm $form, LessonManagerInterface $manager): JsonResponse
    {
        $request = new UpdateLessonRequest($form->validated());

        if (!$lesson = $manager->update($id, $request)) {
            return $this->responseError(code: Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        return $this->responseSuccess($lesson->toArray());
    }
}
