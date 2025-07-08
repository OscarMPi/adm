<?php

namespace App\cpms\Models\helper;

use Dompdf\Dompdf;

if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

/**
 * Classe genérica para gerar PDF
 *
 * @author Oscar monteiro
 */
class CpmsGeneratePdf
{
    /** @var string|null $data Receber as informações para o PDF */
    private string|null $data;

    /**
     * Metodo recebe o conteúdo para o PDF
     * @param string|null $data
     * @return void
     */
    public function generatePdf(string|null $data): void
    {
        $dompdf = new Dompdf();

        $dompdf->loadHtml($data);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $dompdf->stream();
    }
}
