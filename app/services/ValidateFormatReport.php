<?php

namespace App\services;

use App\enums\ReportFormatEnum;

class ValidateFormatReport
{

    public static function validate(string $format): bool
    {

        return in_array($format, ReportFormatEnum::formats());
    }
}
