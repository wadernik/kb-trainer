<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Api\AbstractApiController;
use App\Managers\User\UserManagerInterface;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class DeleteUserController extends AbstractApiController
{
    public function delete(int $id, UserManagerInterface $manager): JsonResponse
    {
        if (!$user = $manager->delete($id)) {
            return $this->responseError(code: Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        return $this->responseSuccess($user->toArray());
    }
}
