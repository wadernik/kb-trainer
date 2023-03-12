<?php

declare(strict_types=1);

namespace App\Repositories\User;

use App\Repositories\FindAllByCriteriaInterface;

interface UserRepositoryInterface extends FindAllByCriteriaInterface, UserFindOneByIdInterface
{
}
