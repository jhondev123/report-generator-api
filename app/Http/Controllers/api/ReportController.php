<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReportRequest;
use App\Http\Resources\ReportResource;
use App\services\ReportGenerator;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(ReportRequest $request)
    {
        $reportGen = ReportGenerator::generate($request->validated());

        $requestValidated = $request->validated()['report'] = $reportGen;
        return new ReportResource($requestValidated);
    }
}
