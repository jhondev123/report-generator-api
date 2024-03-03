<?php

namespace App\Http\Controllers;

use App\services\ReportGenerator;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

class ReportController extends Controller
{
    public function teste()
    {
        $data = [
            "data" => [
                ["nome" => "produto 01", "preco" => "100","precoPromocao"=>"99"],
                ["nome" => "produto 02", "preco" => "100","precoPromocao"=>"99"]
            ],
            "format" => "pdf",
            "headers" => [
                "Nome", "Preco","Preço em Promoção"
            ],
            "model" => "r1",
            "title" => "Relatório de produtos",
            "subtitle"=>"produtos em promocao"
        ];
        ReportGenerator::generateForView($data);
    }
}
