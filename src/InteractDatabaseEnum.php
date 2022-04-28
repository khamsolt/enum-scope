<?php

namespace Khamsolt\EnumScope;

trait InteractDatabaseEnum
{
    public static function values(): array
    {
        return array_column(static::cases(), 'value');
    }
}
