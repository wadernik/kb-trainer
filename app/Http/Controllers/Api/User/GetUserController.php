<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Api\AbstractApiController;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class GetUserController extends AbstractApiController
{
    public function get(int $id, UserRepositoryInterface $repository): JsonResponse
    {
        $user = $repository->find($id);

        if (!$user) {
            return $this->responseError(code: Response::HTTP_NOT_FOUND);
        }

        return $this->responseSuccess($user->toArray());
    }
}
