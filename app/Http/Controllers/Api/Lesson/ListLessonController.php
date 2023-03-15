<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Lesson;

use App\Forms\Lesson\ListLessonRequestForm;
use App\Http\Controllers\Api\AbstractApiController;
use App\Repositories\Lesson\LessonRepositoryInterface;
use App\Requests\Lesson\ListLessonRequest;
use Illuminate\Http\JsonResponse;

final class ListLessonController extends AbstractApiController
{
    public function list(ListLessonRequestForm $form, LessonRepositoryInterface $repository): JsonResponse
    {
        $request = new ListLessonRequest($form->validated());

        $lessons = $repository->findAllBy(
            $request->criteria(),
            $request->sort(),
            $request->limit(),
            $request->offset()
        );

        return $this->responseSuccess($lessons);
    }
}
