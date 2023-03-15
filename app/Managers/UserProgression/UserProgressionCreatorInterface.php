<?php

declare(strict_types=1);

namespace App\Managers\UserProgression;

use App\Requests\UserProgression\CreateUserProgressionRequestInterface;
use Illuminate\Database\Eloquent\Model;

interface UserProgressionCreatorInterface
{
    public function create(CreateUserProgressionRequestInterface $request): Model;
}
