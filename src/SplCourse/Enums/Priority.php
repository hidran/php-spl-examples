<?php

declare(strict_types=1);

namespace App\SplCourse\Enums;

enum Priority: int
{
    case ADMIN = 100;
    case MEMBER = 50;
    case GUEST = 10;
}
