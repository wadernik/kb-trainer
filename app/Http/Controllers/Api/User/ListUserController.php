<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\User;

use App\Forms\User\ListUserRequestForm;
use App\Http\Controllers\Api\AbstractApiController;
use App\Repositories\User\UserRepositoryInterface;
use App\Requests\User\ListUserRequest;
use Illuminate\Http\JsonResponse;

final class ListUserController extends AbstractApiController
{
    // TODO: do the serialization somewhere else
    public function list(ListUserRequestForm $form, UserRepositoryInterface $repository): JsonResponse
    {
        $request = new ListUserRequest($form->validated());

        $users = $repository->findAllBy(
            $request->criteria(),
            $request->sort(),
            $request->limit(),
            $request->offset()
        );

        $usersSerialized = [];

        foreach ($users as $user) {
            $usersSerialized[] = $user->toArray();
        }

        return $this->responseSuccess($usersSerialized);
    }
}
