<?php

declare(strict_types=1);

namespace App\Managers\UserProgression;

use App\Models\UserProgression;
use App\Requests\UserProgression\CreateUserProgressionRequestInterface;
use App\Requests\UserProgression\UpdateUserProgressionRequestInterface;
use Illuminate\Database\Eloquent\Model;

final class UserProgressionManager implements UserProgressionManagerInterface
{
    public function create(CreateUserProgressionRequestInterface $request): Model
    {
        return UserProgression::query()->create($request->toArray());
    }

    public function update(int $id, UpdateUserProgressionRequestInterface $request): ?Model
    {
        if (!$userProgression = UserProgression::query()->find($id)) {
            return null;
        }

        $userProgression->update($request->toArray());

        return $userProgression;
    }

    public function delete(int $id): ?Model
    {
        if (!$userProgression = UserProgression::query()->find($id)) {
            return null;
        }

        $userProgression->delete();

        return $userProgression;
    }
}
