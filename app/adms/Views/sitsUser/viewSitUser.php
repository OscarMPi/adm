<?php

if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

// Ensure we have data to display
if (isset($this->data['viewSitUser'])) {
    extract($this->data['viewSitUser'][0]);
}
?>
<!-- MAIN -->
<div class="main">

<!-- MAIN CONTENT -->
<div class="main-content">

  <div class="content-heading">
    <div class="heading-left">
      <h1 class="page-title">Visualizar Situação</h1>
      <p class="page-subtitle">Detalhes da situação de usuário</p>
    </div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= URLADM ?>dashboard/index"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="<?= URLADM ?>list-sits-users/index">Situações</a></li>
        <li class="breadcrumb-item active">Visualizar Situação</li>
      </ol>
    </nav>
  </div>

  <!-- Mensagem do sistema -->
  <div class="content-adm-alert">
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
  </div>

  <!-- DETALHES DA SITUAÇÃO -->
  <div class="card">
    <div class="card-header">
      <div class="right">
        <?php
        if ($this->data['button']['list_sits_users']) {
            echo '<a href="' . URLADM . 'list-sits-users/index" class="btn btn-primary btn-sm">Listar</a> ';
        }
        
        if (!empty($id) && $this->data['button']['edit_sits_users']) {
            echo '<a href="' . URLADM . 'edit-sits-users/index/' . $id . '" class="btn btn-warning btn-sm">Editar</a> ';
        }
        
        if (!empty($id) && $this->data['button']['delete_sits_users']) {
            echo '<a href="' . URLADM . 'delete-sits-users/index/' . $id . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Tem certeza que deseja excluir este registro?\')">Excluir</a>';
        }
        ?>
      </div>
    </div>
    <div class="card-body">
      <dl class="row">
        <dt class="col-sm-3">ID:</dt>
        <dd class="col-sm-9"><?php echo isset($id) ? $id : ""; ?></dd>
        
        <dt class="col-sm-3">Nome:</dt>
        <dd class="col-sm-9">
          <?php 
          if (isset($name) && isset($color)) {
              echo "<span style='color: $color'>$name</span>"; 
          }
          ?>
        </dd>
        
        <dt class="col-sm-3">Cor:</dt>
        <dd class="col-sm-9">
          <?php
          if (isset($color) && isset($color_name)) {
              echo "<span style='color: $color'>$color_name</span>";
              echo " <div style='width: 30px; height: 30px; background-color: $color; display: inline-block; border: 1px solid #ccc; vertical-align: middle; margin-left: 10px;'></div>";
          }
          ?>
        </dd>
        
        <dt class="col-sm-3">Data de Cadastro:</dt>
        <dd class="col-sm-9">
          <?php echo isset($created) ? date('d/m/Y H:i:s', strtotime($created)) : ""; ?>
        </dd>
        
        <?php
        if (isset($modified) && !empty($modified)) {
            echo "<dt class='col-sm-3'>Data de Modificação:</dt>";
            echo "<dd class='col-sm-9'>" . date('d/m/Y H:i:s', strtotime($modified)) . "</dd>";
        }
        ?>
      </dl>
    </div>
  </div>
  <!-- FIM DOS DETALHES DA SITUAÇÃO -->
</div>
<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->