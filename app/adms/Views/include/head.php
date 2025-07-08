<?php
if(!defined('C8L6K7E')){
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>OsSystem</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <!-- jQuery UI required by datepicker editable -->
  <link href="<?= PATH_ASSETS; ?>plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />

  <!-- JQVMap css -->
  <link href="<?= PATH_ASSETS; ?>plugins/jqvmap/jqvmap.min.css" rel="stylesheet" type="text/css" />

  <!-- Bootstrap Tour css -->
  <link href="<?= PATH_ASSETS; ?>plugins/bootstrap-tour/bootstrap-tour-standalone.min.css" rel="stylesheet" type="text/css" />
  <!-- Uploader Styles -->
  <link href="<?= PATH_ASSETS; ?>/plugins/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />
  <!-- App css -->
  <link href="<?= PATH_ASSETS; ?>css/bootstrap-custom.min.css" rel="stylesheet" type="text/css" />
  <link href="<?= PATH_ASSETS; ?>css/app.min.css" rel="stylesheet" type="text/css" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= FAVICON; ?>">

</head>

<body>