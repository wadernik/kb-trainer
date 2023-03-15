<?php

declare(strict_types=1);

namespace App\Managers\UserProgression;

interface UserProgressionManagerInterface extends UserProgressionCreatorInterface,
                                                  UserProgressionUpdaterInterface,
                                                  UserProgressionDeleterInterface
{
}
