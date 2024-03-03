<?php

namespace App\services;

use App\Exceptions\InvalidFormatException;
use App\Exceptions\MissingReportHeadersException;
use Dompdf\Dompdf;
use Exception;
use Illuminate\Support\Facades\View;

class ReportGenerator
{
    public static function generate(array $data): string|array
    {
        
            if (!ValidateFormatReport::validate($data['format'])) {
                throw new InvalidFormatException();
            }
            if (empty($data['headers'])) {
                throw new MissingReportHeadersException("Necessário enviar cabeçalhos para o header");
            }
            $html =  ReportFactory::getReportView($data);
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->setPaper($data['paper'] ?? 'A4', $data['orientation'] ?? 'portrait');
            $dompdf->render();
            $pdfOutput = $dompdf->stream();
            $pdfOutput = $dompdf->output();
            $base64Pdf = base64_encode($pdfOutput);
            return $base64Pdf;
        
    }
    public static function teste_report($base64Pdf)
    {
        $pdfContent = base64_decode($base64Pdf);
        $caminhoParaPasta = base_path() . "/reports";
        if (!file_exists($caminhoParaPasta)) {
            mkdir($caminhoParaPasta, 0777, true);
        }
        $nomeArquivo = 'arquivo_' . date('YmdHis') . '.pdf';
        $caminhoCompletoArquivo = $caminhoParaPasta . $nomeArquivo;
        $fileSaved = file_put_contents($caminhoCompletoArquivo, $pdfContent);
        if ($fileSaved !== false) {
            echo "O PDF foi salvo com sucesso em: " . $caminhoCompletoArquivo;
        } else {
            echo "Houve um erro ao salvar o PDF.";
        }
    }
}
