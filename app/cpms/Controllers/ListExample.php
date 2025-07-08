<?php

namespace App\cpms\Controllers;

if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

/**
 * Controller exemplo pacote complementar
 * @author Oscar monteiro
 */
class ListExample
{

    public function index(): void
    {
        $exemploList = new \App\cpms\Models\CpmsListExample();
        $exemploList->listExample();

        $listMenu = new \App\adms\Models\helper\AdmsMenu();
        $this->data['menu'] = $listMenu->itemMenu();

        $this->data['sidebarActive'] = "list-example";

        $loadView = new \Core\ConfigView("cpms/Views/example/listExample", $this->data);
        $loadView->loadView();
    }
}
