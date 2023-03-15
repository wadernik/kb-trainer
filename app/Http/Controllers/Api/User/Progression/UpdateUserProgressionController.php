<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\User\Progression;

use App\Forms\UserProgression\UpdateUserProgressionRequestForm;
use App\Http\Controllers\Api\AbstractApiController;
use App\Managers\UserProgression\UserProgressionManagerInterface;
use App\Requests\UserProgression\UpdateUserProgressionRequest;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class UpdateUserProgressionController extends AbstractApiController
{
    public function update(
        int $id,
        UpdateUserProgressionRequestForm $form,
        UserProgressionManagerInterface $manager
    ): JsonResponse
    {
        // TODO: add validation for who can edit current progression
        $userId = auth('sanctum')->id();
        $attributes = $form->validated();
        $attributes['user_id'] = $userId;

        $request = new UpdateUserProgressionRequest($attributes);

        if (!$userProgression = $manager->update($id, $request)) {
            return $this->responseError(code: Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        return $this->responseSuccess($userProgression->toArray());
    }
}
