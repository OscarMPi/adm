<?php
session_start();
define('C8L6K7E', true);

echo '<h1>Diagnóstico do Sistema ADM</h1>';
echo '<pre>';

// Informações do PHP
echo '<h2>Informações do PHP</h2>';
echo 'Versão do PHP: ' . phpversion() . "\n";
echo 'OS: ' . PHP_OS . "\n";
echo 'Servidor: ' . $_SERVER['SERVER_SOFTWARE'] . "\n";

// Informações do Servidor
echo '<h2>Informações do Servidor</h2>';
echo 'SERVER_NAME: ' . $_SERVER['SERVER_NAME'] . "\n";
echo 'DOCUMENT_ROOT: ' . $_SERVER['DOCUMENT_ROOT'] . "\n";
echo 'SCRIPT_FILENAME: ' . $_SERVER['SCRIPT_FILENAME'] . "\n";
echo 'SCRIPT_NAME: ' . $_SERVER['SCRIPT_NAME'] . "\n";
echo 'REQUEST_URI: ' . $_SERVER['REQUEST_URI'] . "\n";

// Permissões
echo '<h2>Permissões de Diretórios</h2>';
$diretorios = [
    'raiz' => '.',
    'core' => './core',
    'app' => './app'
];

foreach ($diretorios as $nome => $dir) {
    $permissao = substr(sprintf('%o', fileperms($dir)), -4);
    $gravavel = is_writable($dir) ? 'Sim' : 'Não';
    echo "$nome ($dir): $permissao (Gravável: $gravavel)\n";
}

// Teste de include
echo '<h2>Teste de Include</h2>';
try {
    include_once './core/Config.php';
    echo 'Include de Config.php: OK' . "\n";
} catch (Exception $e) {
    echo 'Erro ao incluir Config.php: ' . $e->getMessage() . "\n";
}

// Teste de autoload
echo '<h2>Teste de Autoload</h2>';
if (file_exists('./vendor/autoload.php')) {
    try {
        require './vendor/autoload.php';
        echo 'Carregamento do autoload: OK' . "\n";
        
        // Tente carregar classes importantes
        try {
            if (class_exists('\\Core\\Config')) {
                echo 'Classe Config carregada: OK' . "\n";
            } else {
                echo 'Classe Config não encontrada' . "\n";
            }
        } catch (Exception $e) {
            echo 'Erro ao verificar classe Config: ' . $e->getMessage() . "\n";
        }
        
    } catch (Exception $e) {
        echo 'Erro ao carregar autoload: ' . $e->getMessage() . "\n";
    }
} else {
    echo 'Arquivo de autoload não encontrado' . "\n";
}

// URLs geradas pelo Config
echo '<h2>URLs Geradas</h2>';
$protocolo = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
$servidor = $_SERVER['SERVER_NAME'];
$dir_base = dirname($_SERVER['SCRIPT_NAME']);
if ($dir_base == '/' || $dir_base == '\\') {
    $dir_base = '';
}
$url_base = $protocolo . $servidor . $dir_base . (substr($dir_base, -1) == '/' ? '' : '/');
echo "URL gerada: $url_base\n";

echo '</pre>';
