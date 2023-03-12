<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\User;

use App\Forms\User\CreateUserRequestForm;
use App\Http\Controllers\Api\AbstractApiController;
use App\Managers\User\UserManagerInterface;
use App\Requests\User\CreateUserRequest;
use Illuminate\Http\JsonResponse;

final class CreateUserController extends AbstractApiController
{
    public function store(CreateUserRequestForm $form, UserManagerInterface $manager): JsonResponse
    {
        $request = new CreateUserRequest($form->validated());

        $user = $manager->create($request);

        return $this->responseSuccess($user->toArray());
    }
}
