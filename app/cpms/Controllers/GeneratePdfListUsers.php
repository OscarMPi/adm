<?php

namespace App\cpms\Controllers;

if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

/**
 * Controller gerar PDF
 * @author Oscar monteiro
 */
class GeneratePdfListUsers
{

    /** @var string|null $searchName Recebe o nome do usuario */
    private string|null $searchName;

    /** @var string|null $searchEmail Recebe o email do usuario */
    private string|null $searchEmail;

    public function index(): void
    {
        $this->searchName = filter_input(INPUT_GET, 'search_name', FILTER_DEFAULT);
        $this->searchEmail = filter_input(INPUT_GET, 'search_email', FILTER_DEFAULT);

        //echo "Pesquisar atraves do nome: {$this->searchName} <br>" ;
        //echo "Pesquisar atraves do e-mail: {$this->searchEmail} <br>" ;

        $generatePdfListUsers = new \App\cpms\Models\CpmsGeneratePdfListUsers();
        $generatePdfListUsers->listUsers($this->searchName, $this->searchEmail);
        if (!$generatePdfListUsers->getResult()) {
            $urlRedirect = URLADM . "list-users/index";
            header("Location: $urlRedirect");
        }
    }
}
