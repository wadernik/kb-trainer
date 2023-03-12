<?php

declare(strict_types=1);

namespace App\Managers\User;

use App\Models\User;
use App\Requests\User\CreateUserRequestInterface;
use App\Requests\User\UpdateUserRequestInterface;
use Illuminate\Database\Eloquent\Model;

final class UserManager implements UserManagerInterface
{
    public function create(CreateUserRequestInterface $request): Model
    {
        return User::query()->create($request->toArray());
    }

    public function update(int $id, UpdateUserRequestInterface $request): ?Model
    {
        $user = User::query()->find($id);

        if (!$user) {
            return null;
        }

        $user->update($request->toArray());

        return $user;
    }

    public function delete(int $id): ?Model
    {
        $user = User::query()->find($id);

        if (!$user) {
            return null;
        }

        $user->delete();

        return $user;
    }
}
