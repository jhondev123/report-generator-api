<?php

namespace App\enums;

enum ReportFormatEnum
{
    const PDF = 'pdf';
    const XML = 'xml';

    public static function formats()
    {
        return [self::PDF, self::XML];
    }
}
