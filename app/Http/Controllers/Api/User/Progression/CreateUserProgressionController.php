<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\User\Progression;

use App\Forms\UserProgression\CreateUserProgressionRequestForm;
use App\Http\Controllers\Api\AbstractApiController;
use App\Managers\UserProgression\UserProgressionManagerInterface;
use App\Requests\UserProgression\CreateUserProgressionRequest;
use Illuminate\Http\JsonResponse;

final class CreateUserProgressionController extends AbstractApiController
{
    public function store(
        CreateUserProgressionRequestForm $form,
        UserProgressionManagerInterface $manager
    ): JsonResponse
    {
        $userId = auth('sanctum')->id();
        $attributes = $form->validated();
        $attributes['user_id'] = $userId;

        $request = new CreateUserProgressionRequest($attributes);

        $userProgression = $manager->create($request);

        return $this->responseSuccess($userProgression->toArray());
    }
}
