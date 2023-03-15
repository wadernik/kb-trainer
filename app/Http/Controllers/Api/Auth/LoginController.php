<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Auth;

use App\Forms\Auth\LoginRequestForm;
use App\Http\Controllers\Api\AbstractApiController;
use App\Managers\User\AuthUsersManager;
use App\Requests\User\LoginUserRequest;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

final class LoginController extends AbstractApiController
{
    public function login(LoginRequestForm $form, AuthUsersManager $authManager): JsonResponse
    {
        $request = new LoginUserRequest($form->validated());

        if (!$token = $authManager->getToken($request)) {
            return $this->responseError(code: Response::HTTP_BAD_REQUEST);
        }

        return $this->responseSuccess(data: [
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}
