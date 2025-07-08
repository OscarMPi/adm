<?php
if(!defined('C8L6K7E')){
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

// Include logo definitions
require_once "app/cpms/assets/image/logo/logo.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo FAVICON; ?>">
        <!-- Incluir os icones do font-awesome da CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="app/adms/assets/css/custom_adms.css">
        <link rel="stylesheet" href="app/cpms/assets/css/custom_cpms.css">
        <title>Oscar - Administrativo</title>
    </head>
    <body>