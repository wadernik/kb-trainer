<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\User\Progression;

use App\Http\Controllers\Api\AbstractApiController;
use App\Repositories\UserProgression\UserProgressionRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class GetUserProgressionController extends AbstractApiController
{
    public function get(int $id, UserProgressionRepositoryInterface $repository): JsonResponse
    {
        // TODO: add validation for who can view current progression
        if (!$userProgression = $repository->find($id)) {
            return $this->responseError(code: Response::HTTP_NOT_FOUND);
        }

        return $this->responseSuccess($userProgression->toArray());
    }
}
