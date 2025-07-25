<?php

namespace App\adms\Models;

if(!defined('C8L6K7E')){
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

/**
 * Listar item de menu do banco de dados
 *
 * @author Oscar monteiro
 */
class AdmsListItemMenu
{

    /** @var bool $result Recebe true quando executar o processo com sucesso e false quando houver erro */
    private bool $result;

    /** @var array|null $resultBd Recebe os registros do banco de dados */
    private array|null $resultBd;

    /** @var int $page Recebe o número página */
    private int $page;

    /** @var int $page Recebe a quantidade de registros que deve retornar do banco de dados */
    private int $limitResult = 40;

    /** @var string|null $page Recebe a páginação */
    private string|null $resultPg;

    /** @var string|null $searchName Recebe o nome do item de menu */
    private string|null $searchName;

    /** @var string|null $searchNameValue Recebe o nome do item de menu */
    private string|null $searchNameValue;

    /**
     * @return bool Retorna true quando executar o processo com sucesso e false quando houver erro
     */
    function getResult(): bool
    {
        return $this->result;
    }

    /**
     * @return bool Retorna os registros do BD
     */
    function getResultBd(): array|null
    {
        return $this->resultBd;
    }

    /**
     * @return bool Retorna a paginação
     */
    function getResultPg(): string|null
    {
        return $this->resultPg;
    }

    /**
     * Metodo faz a pesquisa dos item de menu na tabela "adms_items_menus" e lista as informações na view
     * Recebe como parametro "page" para fazer a paginação
     * @param integer|null $page
     * @return void
     */
    public function listItemMenu(int $page = null):void
    {
        $this->page = (int) $page ? $page : 1;

        $pagination = new \App\adms\Models\helper\AdmsPagination(URLADM . 'list-item-menu/index');
        $pagination->condition($this->page, $this->limitResult);
        $pagination->pagination("SELECT COUNT(id) AS num_result FROM adms_items_menus");
        $this->resultPg = $pagination->getResult();

        $listItemMenu = new \App\adms\Models\helper\AdmsRead();
        $listItemMenu->fullRead("SELECT id, name, icon, order_item_menu 
                            FROM adms_items_menus
                            ORDER BY order_item_menu ASC
                            LIMIT :limit OFFSET :offset", "limit={$this->limitResult}&offset={$pagination->getOffset()}");

        $this->resultBd = $listItemMenu->getResult();        
        if($this->resultBd){
            $this->result = true;
        }else{
            $_SESSION['msg'] = "<p style='color: #f00'> Nenhuma item de menu encontrado!</p>";
            $this->result = false;
        }
    }

    /**
     * Metodo faz a pesquisa dos itens de menu na tabela adms_items_menus e lista as informações na view
     * Recebe como parametro "page" para fazer a paginação
     * Recebe o paramentro "search_name" para pesquisar o item de menu atraves do nome
     * @param integer|null $page
     * @param string|null $search_name
     * @return void
     */
    public function listSearchItemMenu(int $page = null, string|null $search_name):void
    {
        $this->page = (int) $page ? $page : 1;
        $this->searchName = trim($search_name);

        $this->searchNameValue = "%" . $this->searchName . "%";

        $pagination = new \App\adms\Models\helper\AdmsPagination(URLADM . 'list-item-menu/index', "?search_name={$this->searchName}");
        $pagination->condition($this->page, $this->limitResult);
        $pagination->pagination("SELECT COUNT(id) AS num_result 
                                FROM adms_items_menus
                                WHERE name LIKE :search_name", "search_name={$this->searchNameValue}");                        
        $this->resultPg = $pagination->getResult();

        $listItemMenu = new \App\adms\Models\helper\AdmsRead();
        $listItemMenu->fullRead("SELECT id, name, icon, order_item_menu 
                            FROM adms_items_menus
                            WHERE name LIKE :search_name 
                            ORDER BY id DESC
                            LIMIT :limit OFFSET :offset", "search_name={$this->searchNameValue}&limit={$this->limitResult}&offset={$pagination->getOffset()}");

        $this->resultBd = $listItemMenu->getResult();        
        if($this->resultBd){
            $this->result = true;
        }else{
            $_SESSION['msg'] = "<p style='color: #f00'> Nenhum item de menu encontrado!</p>";
            $this->result = false;
        }
    }

    
}
