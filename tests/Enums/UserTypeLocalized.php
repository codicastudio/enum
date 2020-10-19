<?php

namespace codicastudio\Enum\Tests\Enums;

use codicastudio\Enum\Enum;
use codicastudio\Enum\Contracts\LocalizedEnum;

final class UserTypeLocalized extends Enum implements LocalizedEnum
{
    const Moderator = 0;
    const Administrator = 1;
    const SuperAdministrator = 2;
}
