<?php

namespace codicastudio\Enum\Tests\Enums;

use codicastudio\Enum\Enum;

final class UserType extends Enum
{
    const Administrator = 0;
    const Moderator = 1;
    const Subscriber = 2;
    const SuperAdministrator = 3;

    public function magicInstantiationFromInstanceMethod(): self
    {
        return self::Administrator();
    }
}
