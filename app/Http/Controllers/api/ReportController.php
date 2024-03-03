<?php

namespace App\Http\Controllers\api;

use App\Exceptions\InvalidModelException;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReportRequest;
use App\Http\Resources\ReportResource;
use App\services\ReportGenerator;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(ReportRequest $request)
    {
        try {

            $reportGen = ReportGenerator::generate($request->validated());
            $validatedData = $request->validated();
            $validatedData['report'] = $reportGen;
            return new ReportResource($validatedData);
        } catch (InvalidModelException $e) {
            return response()->json(["message" => "Invalid Model"], 400);
        }
    }
}
