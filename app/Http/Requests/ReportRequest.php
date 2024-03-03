<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title" => "required",
            "format" => "required", //pdf,xlm ...
            "model" => "required", // modelo pronto do relatório
            "data" => "required",
            "headers"=>"required",
            "orientation"=>"nullable",
            "paper"=>"nullable",
            "subtitle" => "nullable",
        ];
    }
}
