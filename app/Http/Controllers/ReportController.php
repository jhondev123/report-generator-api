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
            "data" => [],
            "format" => "pdf",
            "headers" => [
                "nome"
            ],
            "model" => "r1",
            "title" => "teste"
        ];

        dd(View::make('reports.initialReport', ["data" => $data])->render());
    }
}
