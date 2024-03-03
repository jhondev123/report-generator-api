<?php

namespace App\services;

use App\Exceptions\InvalidModelException;
use Illuminate\Support\Facades\View;


class ReportFactory
{
    public static function getReportView($data)
    {

        switch ($data['model']) {
            case 'r1':
                // return view('reports.initialReport', ["data" => $data]);

                return View::make('reports.initialReport', ["data" => $data])->render();
                break;
            case 'r2':
                break;
            default:
                throw new InvalidModelException();
                break;
        }
    }
}
