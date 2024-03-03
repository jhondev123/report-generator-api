<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this['title'] ?? null,
            'headers' => $this['headers'] ?? [],
            'data' => $this['data'] ?? [],
            'format' => $this['format'] ?? null,
            "model" => $this['model'] ?? null,
        ];
    }
}
