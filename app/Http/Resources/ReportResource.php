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
            'title' => $this->resource['title'] ?? null,
            'format' => $this->resource['format'] ?? null,
            'headers' => $this->resource['headers'] ?? [],
            'data' => $this->resource['data'] ?? [],
            'model' => $this->resource['model'] ?? null,
            'report' => $this->resource['report'] ?? null,
        ];
    }
}
