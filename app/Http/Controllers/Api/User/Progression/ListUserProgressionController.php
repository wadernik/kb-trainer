<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\User\Progression;

use App\Forms\UserProgression\ListUserProgressionRequestForm;
use App\Http\Controllers\Api\AbstractApiController;
use App\Repositories\UserProgression\UserProgressionRepositoryInterface;
use App\Requests\UserProgression\ListUserProgressionRequest;
use Illuminate\Http\JsonResponse;

final class ListUserProgressionController extends AbstractApiController
{
    public function list(
        ListUserProgressionRequestForm $form,
        UserProgressionRepositoryInterface $repository
    ): JsonResponse
    {
        $userId = auth('sanctum')->id();
        $attributes = $form->validated();
        $attributes['filter']['user_id'] = $userId;

        $request = new ListUserProgressionRequest($attributes);

        $progressions = $repository->findAllBy(
            $request->criteria(),
            $request->sort(),
            $request->limit(),
            $request->offset()
        );

        return $this->responseSuccess($progressions);
    }
}
