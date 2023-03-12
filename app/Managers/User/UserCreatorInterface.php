<?php

declare(strict_types=1);

namespace App\Managers\User;

use App\Requests\User\CreateUserRequestInterface;
use Illuminate\Database\Eloquent\Model;

interface UserCreatorInterface
{
    public function create(CreateUserRequestInterface $request): Model;
}
