<?php

namespace Tests\Unit;

use App\services\ValidateFormatReport;
use PHPUnit\Framework\TestCase;

class ValidateFormatReportTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_validate_format(): void
    {
        $format = "pdf";
        $isValid = ValidateFormatReport::validate($format);
        $this->assertTrue($isValid);
    }
    public function test_invalid_format(): void
    {
        $format = "abc";
        $isValid = ValidateFormatReport::validate($format);
        $this->assertFalse($isValid);
    }
}
