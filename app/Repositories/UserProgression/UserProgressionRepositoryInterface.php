<?php

declare(strict_types=1);

namespace App\Repositories\UserProgression;

use App\Repositories\FindAllByCriteriaInterface;

interface UserProgressionRepositoryInterface extends FindAllByCriteriaInterface, UserProgressionFindOneByIdInterface
{
}
