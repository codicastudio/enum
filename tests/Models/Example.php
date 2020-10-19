<?php

namespace codicastudio\Enum\Tests\Models;

use codicastudio\Enum\Traits\CastsEnums;
use codicastudio\Enum\Tests\Enums\UserType;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    use CastsEnums;

    protected $casts = [
        'user_type' => 'int',
    ];

    protected $enumCasts = [
        'user_type' => UserType::class,
    ];

    protected $fillable = [
        'user_type',
    ];
}
