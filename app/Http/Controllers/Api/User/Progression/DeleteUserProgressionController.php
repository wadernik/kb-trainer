<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\User\Progression;

use App\Http\Controllers\Api\AbstractApiController;
use App\Managers\UserProgression\UserProgressionManagerInterface;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class DeleteUserProgressionController extends AbstractApiController
{
    public function delete(int $id, UserProgressionManagerInterface $manager): JsonResponse
    {
        // TODO: add validation for who can delete current progression
        if (!$userProgression = $manager->delete($id)) {
            return $this->responseError(code: Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        return $this->responseSuccess($userProgression->toArray());
    }
}
