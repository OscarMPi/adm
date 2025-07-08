<?php

if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

// Processamento do formulário - importado do xeditProfile.php
if (isset($this->data['form'])) {
    $valorForm = $this->data['form'];
}

if (isset($this->data['form'][0])) {
    $valorForm = $this->data['form'][0];
}

// Preparar valores dos campos
$name = "";
if (isset($valorForm['name'])) {
    $name = $valorForm['name'];
}

$nickname = "";
if (isset($valorForm['nickname'])) {
    $nickname = $valorForm['nickname'];
}

$email = "";
if (isset($valorForm['email'])) {
    $email = $valorForm['email'];
}

$user = "";
if (isset($valorForm['user'])) {
    $user = $valorForm['user'];
}
?>
 <!-- MAIN -->
 <div class="main">

<!-- MAIN CONTENT -->
<div class="main-content">

  <div class="content-heading">
    <div class="heading-left">
      <h1 class="page-title">Editar Perfil</h1>
      <p class="page-subtitle">Atualize seus dados pessoais</p>
    </div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= URL ?>dashboard/index"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="<?= URL ?>view-profile/index">Perfil</a></li>
        <li class="breadcrumb-item active">Editar Perfil</li>
      </ol>
    </nav>
  </div>

  <!-- Mensagem do sistema -->
  <?php
  if (isset($_SESSION['msg'])) {
      echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
             ' . $_SESSION['msg'] . '
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>';
      unset($_SESSION['msg']);
  }
  ?>
  <span id="msg"></span>

  <!-- FORMULÁRIO DE EDIÇÃO DE PERFIL -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Informações do Perfil</h3>
      <div class="right">
        <?php
        if (isset($this->data['button']['view_profile'])) {
            echo '<a href="' . URL . 'view-profile/index" class="btn btn-primary btn-sm">Visualizar Perfil</a>';
        }
        ?>
      </div>
    </div>
    <div class="card-body">
      <form method="POST" action="" id="form-edit-profile">
        <div class="form-group row">
          <label for="name" class="col-sm-3 col-form-label">Nome Completo*</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="name" name="name" value="<?= $name ?>" placeholder="Digite o nome completo" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="nickname" class="col-sm-3 col-form-label">Apelido</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="nickname" name="nickname" value="<?= $nickname ?>" placeholder="Digite o apelido">
          </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-sm-3 col-form-label">Email*</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>" placeholder="Digite o seu melhor e-mail" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="user" class="col-sm-3 col-form-label">Usuário*</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="user" name="user" value="<?= $user ?>" placeholder="Digite o usuário para acessar o sistema" required>
          </div>
        </div>

        <p class="text-danger"><small>* Campos obrigatórios</small></p>

        <button type="submit" class="btn btn-primary btn-lg d-block mx-auto" name="SendEditProfile" value="Salvar">
          <i class="fa fa-check-circle"></i> <span>Atualizar Perfil</span>
        </button>
      </form>
    </div>
  </div>
  <!-- FIM DO FORMULÁRIO DE EDIÇÃO DE PERFIL -->
</div>
<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
