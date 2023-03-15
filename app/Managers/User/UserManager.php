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
        $attributes = $request->toArray();
        $attributes['password'] = bcrypt($request->password());

        return User::query()->create($attributes);
    }

    public function update(int $id, UpdateUserRequestInterface $request): ?Model
    {
        if (!$user = User::query()->find($id)) {
            return null;
        }

        $user->update($request->toArray());

        return $user;
    }

    public function delete(int $id): ?Model
    {
        if (!$user = User::query()->find($id)) {
            return null;
        }

        $user->delete();

        return $user;
    }
}
