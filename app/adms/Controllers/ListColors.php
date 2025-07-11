<?php

namespace App\adms\Controllers;

if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

/**
 * Controller listar cores
 * @author Oscar monteiro
 */
class ListColors
{
    /** @var array|string|null $data Recebe os dados que devem ser enviados para VIEW */
    private array|string|null $data;

    /** @var string|int|null $page Recebe o número página */
    private string|int|null $page;

    /** @var array $dataForm Recebe os dados do formulario */
    private array|null $dataForm;

    /** @var string|null $searchName Recebe o nome da cor */
    private string|null $searchName;

    /** @var string|null $searchColor Recebe o nome da cor em hexadecimal */
    private string|null $searchColor;

    /**
     * Método listar cores.
     * 
     * Instancia a MODELS responsável em buscar os registros no banco de dados.
     * Se encontrar registro no banco de dados envia para VIEW.
     * Senão enviar o array de dados vazio.
     *
     * @return void
     */
    public function index(string|int|null $page = null): void
    {
        $this->page = (int) $page ? $page : 1;

        $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        $this->searchName = filter_input(INPUT_GET, 'search_name', FILTER_DEFAULT);
        $this->searchColor = filter_input(INPUT_GET, 'search_color', FILTER_DEFAULT);

        $listColors = new \App\adms\Models\AdmsListColors();
        if (!empty($this->dataForm['SendSearchColor'])) {
            $this->page = 1;
            $listColors->listSearchColors($this->page, $this->dataForm['search_name'], $this->dataForm['search_color']);
            $this->data['form'] = $this->dataForm;
        } elseif ((!empty($this->searchName)) or (!empty($this->searchColor))) {
            $listColors->listSearchColors($this->page, $this->searchName, $this->searchColor);
            $this->data['form']['search_name'] = $this->searchName;
            $this->data['form']['search_color'] = $this->searchColor;
        } else {            
            $listColors->listColors($this->page);            
        }
        
        if ($listColors->getResult()) {
            $this->data['listColors'] = $listColors->getResultBd();
            $this->data['pagination'] = $listColors->getResultPg();
        } else {
            $this->data['listColors'] = [];
            $this->data['pagination'] = "";
        }

        $button = ['add_colors' => ['menu_controller' => 'add-colors', 'menu_metodo' => 'index'],
        'view_colors' => ['menu_controller' => 'view-colors', 'menu_metodo' => 'index'],
        'edit_colors' => ['menu_controller' => 'edit-colors', 'menu_metodo' => 'index'],
        'delete_colors' => ['menu_controller' => 'delete-colors', 'menu_metodo' => 'index']];
        $listBotton = new \App\adms\Models\helper\AdmsButton();
        $this->data['button'] = $listBotton->buttonPermission($button);

        $listMenu = new \App\adms\Models\helper\AdmsMenu();
        $this->data['menu'] = $listMenu->itemMenu(); 

        $this->data['sidebarActive'] = "list-colors";         
        $loadView = new \Core\ConfigView("adms/Views/colors/listColors", $this->data);
        $loadView->loadView();
    }
}
