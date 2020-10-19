<?php

namespace codicastudio\Enum\Tests\Models;

use codicastudio\Enum\Traits\CastsEnums;
use codicastudio\Enum\Tests\Enums\UserType;
use Illuminate\Database\Eloquent\Model;

/**
 * Description should be kept
 *
 * @property \codicastudio\Enum\Tests\Enums\UserType|null $user_type
 * @see https://github.com/codicastudio/enum/pull/71
 */
class AnnotatedExample extends Model
{
    use CastsEnums;

    protected $enumCasts = [
        'user_type' => UserType::class,
    ];

    protected $fillable = [
        'user_type',
    ];
}
