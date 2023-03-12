<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\User;

use App\Forms\User\UpdateUserRequestForm;
use App\Http\Controllers\Api\AbstractApiController;
use App\Managers\User\UserManagerInterface;
use App\Requests\User\UpdateUserRequest;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class UpdateUserController extends AbstractApiController
{
    public function update(int $id, UpdateUserRequestForm $form, UserManagerInterface $manager): JsonResponse
    {
        $request = new UpdateUserRequest($form->validated());

        if (!$user = $manager->update($id, $request)) {
            return $this->responseError(code: Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        return $this->responseSuccess($user->toArray());
    }
}
