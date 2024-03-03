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
            "data" => [
                ["nome" => "produto 01", "preco" => "100", "precoPromocao" => "99"],
                ["nome" => "produto 02", "preco" => "100", "precoPromocao" => "99"]
            ],
            "format" => "pdf",
            "headers" => [
                "Nome", "Preco", "Preço em Promoção"
            ],
            "model" => "r1",
            "title" => "Relatório de produtos",
            "subtitle" => "produtos em promocao"
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
