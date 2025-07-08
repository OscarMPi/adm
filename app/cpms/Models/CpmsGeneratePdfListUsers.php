<?php

namespace App\cpms\Models;

if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

/**
 * Listar os usuários do banco de dados
 *
 * @author Oscar monteiro
 */
class CpmsGeneratePdfListUsers
{

    /** @var bool $result Recebe true quando executar o processo com sucesso e false quando houver erro */
    private bool $result;

    /** @var array|null $resultBd Recebe os registros do banco de dados */
    private array|null $resultBd;

    /** @var string|null $searchName Recebe o nome do usuario */
    private string|null $searchName;

    /** @var string|null $searchEmail Recebe o email do usuario */
    private string|null $searchEmail;

    /** @var string|null $searchName Recebe o nome do usuario */
    private string|null $searchNameValue;

    /** @var string|null $searchEmail Recebe o email do usuario */
    private string|null $searchEmailValue;

    /** @var string|null $page Recebe a páginação */
    private string|null $resultPg;

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
     * Metodo faz a pesquisa dos usuários na tabela adms_users e lista as informações na view
     * Recebe o paramentro "page" para que seja feita a paginação do resultado
     * @param integer|null $page
     * @return void
     */
    public function listUsers(string|null $search_name, string|null $search_email): void
    {

        $this->searchName = trim($search_name);
        $this->searchEmail = trim($search_email);

        $this->searchNameValue = "%" . $this->searchName . "%";
        $this->searchEmailValue = "%" . $this->searchEmail . "%";

        if ((!empty($this->searchName)) and (!empty($this->searchEmail))) {
            $this->searchUsersNameEmail();
        } elseif ((!empty($this->searchName)) and (empty($this->searchEmail))) {
            $this->searchUsersName();
        } elseif ((empty($this->searchName)) and (!empty($this->searchEmail))) {
            $this->searchUsersEmail();
        } else {
            $this->searchUsers();
        }
    }

    /**
     * Metodo retornar todos os registros
     * @return void
     */
    public function searchUsers(): void
    {       

        $listUsers = new \App\adms\Models\helper\AdmsRead();
        $listUsers->fullRead("SELECT usr.id, usr.name AS name_usr, usr.email,
                    sit.name AS name_sit,
                    col.color
                    FROM adms_users AS usr
                    INNER JOIN adms_sits_users AS sit ON sit.id=usr.adms_sits_user_id
                    INNER JOIN adms_colors AS col ON col.id=sit.adms_color_id
                    INNER JOIN adms_access_levels AS lev ON lev.id=usr.adms_access_level_id 
                    WHERE lev.order_levels >:order_levels
                    ORDER BY usr.id DESC", "order_levels=" . $_SESSION['order_levels']);

        $this->resultBd = $listUsers->getResult();
        if ($this->resultBd) {
            //$this->result = true;
            $this->generatePdf();
        } else {
            $_SESSION['msg'] = "<p class='alert-danger'>Erro: Nenhum usuário encontrado!</p>";
            $this->result = false;
        }
    }

    /**
     * Metodo pesquisar pelo nome e e-mail
     * @return void
     */
    public function searchUsersNameEmail(): void
    {        

        $listUsers = new \App\adms\Models\helper\AdmsRead();
        $listUsers->fullRead("SELECT usr.id, usr.name AS name_usr, usr.email, usr.adms_sits_user_id,
                    sit.name AS name_sit,
                    col.color
                    FROM adms_users AS usr
                    INNER JOIN adms_sits_users AS sit ON sit.id=usr.adms_sits_user_id
                    INNER JOIN adms_colors AS col ON col.id=sit.adms_color_id
                    INNER JOIN adms_access_levels AS lev ON lev.id=usr.adms_access_level_id 
                    WHERE (lev.order_levels >:order_levels)
                    AND ((usr.name LIKE :search_name) 
                    OR (usr.email LIKE :search_email))
                    ORDER BY usr.id DESC", "order_levels=" . $_SESSION['order_levels'] . "&search_name={$this->searchNameValue}&search_email={$this->searchEmailValue}");

        $this->resultBd = $listUsers->getResult();
        if ($this->resultBd) {
            //$this->result = true;
            $this->generatePdf();
        } else {
            $_SESSION['msg'] = "<p class='alert-danger'>Erro: Nenhum usuário encontrado!</p>";
            $this->result = false;
        }
    }

    /**
     * Metodo pesquisar pelo nome
     * @return void
     */
    public function searchUsersName(): void
    {

        $listUsers = new \App\adms\Models\helper\AdmsRead();
        $listUsers->fullRead("SELECT usr.id, usr.name AS name_usr, usr.email, usr.adms_sits_user_id,
                    sit.name AS name_sit,
                    col.color
                    FROM adms_users AS usr
                    INNER JOIN adms_sits_users AS sit ON sit.id=usr.adms_sits_user_id
                    INNER JOIN adms_colors AS col ON col.id=sit.adms_color_id
                    INNER JOIN adms_access_levels AS lev ON lev.id=usr.adms_access_level_id 
                    WHERE (lev.order_levels >:order_levels)
                    AND (usr.name LIKE :search_name)
                    ORDER BY usr.id DESC", "order_levels=" . $_SESSION['order_levels'] . "&search_name={$this->searchNameValue}");

        $this->resultBd = $listUsers->getResult();
        if ($this->resultBd) {
            //$this->result = true;
            $this->generatePdf();
        } else {
            $_SESSION['msg'] = "<p class='alert-danger'>Erro: Nenhum usuário encontrado!</p>";
            $this->result = false;
        }
    }

    /**
     * Metodo pesquisar pelo e-mail
     * @return void
     */
    public function searchUsersEmail(): void
    {
        
        $listUsers = new \App\adms\Models\helper\AdmsRead();
        $listUsers->fullRead("SELECT usr.id, usr.name AS name_usr, usr.email, usr.adms_sits_user_id,
                    sit.name AS name_sit,
                    col.color
                    FROM adms_users AS usr
                    INNER JOIN adms_sits_users AS sit ON sit.id=usr.adms_sits_user_id
                    INNER JOIN adms_colors AS col ON col.id=sit.adms_color_id
                    INNER JOIN adms_access_levels AS lev ON lev.id=usr.adms_access_level_id 
                    WHERE (lev.order_levels >:order_levels)
                    AND (usr.email LIKE :search_email)
                    ORDER BY usr.id DESC", "order_levels=" . $_SESSION['order_levels'] . "&search_email={$this->searchEmailValue}");

        $this->resultBd = $listUsers->getResult();
        if ($this->resultBd) {
            //$this->result = true;
            $this->generatePdf();
        } else {
            $_SESSION['msg'] = "<p class='alert-danger'>Erro: Nenhum usuário encontrado!</p>";
            $this->result = false;
        }
    }

    private function generatePdf()
    {
        //var_dump($this->resultBd);
        $data_pdf = "<table>";
        $data_pdf .= "<thead>";
        $data_pdf .= "<th>ID</th>";
        $data_pdf .= "<th>Nome</th>";
        $data_pdf .= "<th>E-mail</th>";
        $data_pdf .= "<th>Situação</th>";
        $data_pdf .= "</thead>";
        foreach ($this->resultBd as $user) {
            extract($user);
            $data_pdf .= "<tbody>";
            $data_pdf .= "<td>$id</td>";
            $data_pdf .= "<td>$name_usr</td>";
            $data_pdf .= "<td>$email</td>";
            $data_pdf .= "<td style='color: $color;'>$name_sit</td>";
            $data_pdf .= "</tbody>";
        }
        $data_pdf .= "</table>";

        //echo $data_pdf;

        $generatePdf= new \App\cpms\Models\helper\CpmsGeneratePdf();
        $generatePdf->generatePdf($data_pdf);

        $this->result = true;
    }
}
