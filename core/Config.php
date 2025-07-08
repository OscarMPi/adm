<?php

namespace Core;

if(!defined('C8L6K7E')){
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

/**
 * Configurações básicas do site.
 *
 * @author Oscar <oscar_m06@hotmail.fr>
 */

abstract class Config
{
    /**
     * Possui as constantes com as configurações.
     * Configurações de endereço do projeto.
     * Página principal do projeto.
     * Credenciais de acesso ao banco de dados
     * E-mail do administrador.
     * 
     * @return void
     */
    protected function configAdm(): void
    {
        $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
        $protocolo = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
        
        $script_name = $_SERVER['SCRIPT_NAME'];
        $dir_base = rtrim(str_replace('/index.php', '', $script_name), '/');
        
        // URL final
        $url_base = $protocolo . $servidor . $dir_base . '/';
        
        define('URL', $url_base);
        define('URLADM', $url_base);

        define('CONTROLLER', 'Login');
        define('METODO', 'index');
        define('CONTROLLERERRO', 'Login');
        // Define paths for logo images
        define('LOGO_ADM', URL.'app/adms/assets/image/logo-dark.png');
        define('FAVICON', URL.'app/adms/assets/image/icon/favicon.ico');
        define('PATH_ASSETS', URL.'app/adms/assets/');

        define('HOST', 'localhost');
        define('USER', 'oscar');
        define('PASS', '12161819');
        define('DBNAME', 'celke');
        define('PORT', 3306);

        define('EMAILADM', 'denismoto06@hotmail.com');
    }
}
