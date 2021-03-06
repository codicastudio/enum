<?php

namespace codicastudio\Enum\Exceptions;

use Exception;
use codicastudio\Enum\Enum;

class InvalidEnumMemberException extends Exception
{
    /**
     * Create an InvalidEnumMemberException.
     *
     * @param  mixed  $invalidValue
     * @param  \codicastudio\Enum\Enum  $enum
     * @return void
     */
    public function __construct($invalidValue, Enum $enum)
    {
        $invalidValueType = gettype($invalidValue);
        $enumValues = implode(', ', $enum::getValues());
        $enumClassName = class_basename($enum);

        parent::__construct("Cannot construct an instance of $enumClassName using the value ($invalidValueType) `$invalidValue`. Possible values are [$enumValues].");
    }
}
