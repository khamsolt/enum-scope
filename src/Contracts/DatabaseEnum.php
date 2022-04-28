<?php

namespace Khamsolt\EnumScope\Contracts;

interface DatabaseEnum
{
    public function label(): string;

    public static function labels(): array;

    public static function values(): array;
}
