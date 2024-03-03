<?php

namespace Tests\Unit;

use App\services\ReportFactory;
use Tests\TestCase;
use App\Exceptions\InvalidModelException;

class ReportFactoryTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_report_factory_return_view(): void
    {
        $data = [
            'model' => 'r1',
            "title" => "teste"
        ];

        $htmlReport = ReportFactory::getReportView($data);

        $this->assertIsString($htmlReport);
    }
    public function test_report_factory_invalid_model_in_return_view()
    {
        $data = [
            'model' => 'abc',
        ];


        $this->expectException(InvalidModelException::class);
        ReportFactory::getReportView($data);
    }
}
