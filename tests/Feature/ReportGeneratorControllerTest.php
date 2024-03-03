<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReportGeneratorControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_post_report_generator(): void
    {
        $data = [
            "data" => [
                ["nome"=>"produto 01","preco"=>"100"],
                ["nome"=>"produto 02","preco"=>"100"]
            ],
            "format" => "pdf",
            "headers" => [
                "nome","preco"
            ],
            "model" => "r1",
            "title" => "teste",
        ];
        $response = $this->postJson('/api/v1/generate-report', $data);

        $response->assertStatus(200);
    }
    public function test_post_missing_fields(): void
    {
        $data = [];
        $response = $this->postJson('/api/v1/generate-report', $data);
        $response->assertStatus(422);
    }
}
