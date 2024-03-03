<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\services\ReportGenerator;
use App\Exceptions\InvalidFormatException;
use App\Exceptions\MissingReportHeadersException;
use Illuminate\Support\Facades\View;

class ReportGeneratorTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_report_generator_generate(): void
    {

        $data = [
            "data" => [],
            "format" => "pdf",
            "headers" => [
                "nome"
            ],
            "model" => "r1",
            "title" => "teste",
        ];


        $report = ReportGenerator::generate($data);

        $this->assertIsString($report);
    }

    public function test_report_generator_invalid_format(): void
    {
        $data = [
            "data" => [],
            "format" => "a",
            "headers" => [
                "nome"
            ],
            "model" => "r1",
            "title" => "teste",
        ];
        $this->expectException(InvalidFormatException::class);
        ReportGenerator::generate($data);
    }

    public function test_report_generator_missing_report_headers(): void
    {
        $data = [
            "data" => [],
            "format" => "pdf",
            "headers" => [
                
            ],
            "model" => "r1",
            "title" => "teste",
        ];
        $this->expectException(MissingReportHeadersException::class);
        ReportGenerator::generate($data);
    }
}
