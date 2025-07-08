<?php

if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

// Processar dados do formulário
if (isset($this->data['form'])) {
    $valorForm = $this->data['form'];
}

if (isset($this->data['form'][0])) {
    $valorForm = $this->data['form'][0];
}

// Preparar valor do campo senha
$password = "";
if (isset($valorForm['password'])) {
    $password = $valorForm['password'];
}
?>
 <!-- MAIN -->
 <div class="main">

<!-- MAIN CONTENT -->
<div class="main-content">

  <div class="content-heading">
    <div class="heading-left">
      <h1 class="page-title">Editar Senha</h1>
      <p class="page-subtitle">Atualize sua senha de acesso</p>
    </div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= URL ?>dashboard/index"><i class="fa fa-home"></i> Home</a></li>
        <?php
        if ($this->data['button']['view_profile']) {
            echo '<li class="breadcrumb-item"><a href="' . URL . 'view-profile/index">Perfil</a></li>';
        }
        ?>
        <li class="breadcrumb-item active">Editar Senha</li>
      </ol>
    </nav>
  </div>
          
  <!-- Exibir mensagens de alerta -->
  <div class="content-adm-alert">
      <?php
      if (isset($_SESSION['msg'])) {
          // Converter formato de alerta antigo para o novo formato Bootstrap
          $msg = $_SESSION['msg'];
          $alertClass = "info";
          
          if (strpos($msg, 'alert-success') !== false) {
              $alertClass = "success";
          } elseif (strpos($msg, 'alert-danger') !== false) {
              $alertClass = "danger";
          } elseif (strpos($msg, 'alert-warning') !== false) {
              $alertClass = "warning";
          }
          
          $msg = str_replace(['<p class=\'alert-success\'>', '<p class=\'alert-danger\'>', '<p class=\'alert-warning\'>'], '', $msg);
          $msg = str_replace('</p>', '', $msg);
          
          echo '<div class="alert alert-'.$alertClass.' alert-dismissible fade show" role="alert">
                    '.$msg.'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
          
          unset($_SESSION['msg']);
      }
      ?>
      <span id="msg"></span>
  </div>

  <!-- FORMULÁRIO DE EDIÇÃO DE SENHA -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Alterar Senha</h3>
      <div class="right">
        <?php
        if ($this->data['button']['view_profile']) {
            echo '<a href="' . URL . 'view-profile/index" class="btn btn-primary btn-sm">Visualizar Perfil</a>';
        }
        ?>
      </div>
    </div>
    <div class="card-body">
      <form method="POST" action="" id="form-edit-prof-pass">
        <div class="form-group row">
          <label for="password" class="col-sm-3 col-form-label">Nova Senha*</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" name="password" id="password" 
                  placeholder="Digite a nova senha" onkeyup="passwordStrength()" 
                  autocomplete="on" value="<?= $password ?>" required>
            <span id="msgViewStrength" class="small text-muted"></span>
          </div>
        </div>
        
        <p class="text-danger"><small>* Campo obrigatório</small></p>
        
        <div class="form-group row">
          <div class="col-sm-9 offset-sm-3">
            <button type="submit" class="btn btn-warning" name="SendEditProfPass" value="Salvar">
              <i class="fa fa-key"></i> Atualizar Senha
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- FIM DO FORMULÁRIO -->

</div>
<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN -->

<!-- Script para verificar força da senha -->
<script>
function passwordStrength() {
    var password = document.getElementById('password').value;
    var strength = 0;
    var msgViewStrength = document.getElementById('msgViewStrength');
    
    if (password.length >= 8) {
        strength += 1;
    }
    if (password.match(/[a-z]+/)) {
        strength += 1;
    }
    if (password.match(/[A-Z]+/)) {
        strength += 1;
    }
    if (password.match(/[0-9]+/)) {
        strength += 1;
    }
    if (password.match(/[$@#&!]+/)) {
        strength += 1;
    }
    
    switch (strength) {
        case 0:
            msgViewStrength.innerHTML = "";
            break;
        case 1:
            msgViewStrength.innerHTML = "<span class='text-danger'>Senha muito fraca</span>";
            break;
        case 2:
            msgViewStrength.innerHTML = "<span class='text-warning'>Senha fraca</span>";
            break;
        case 3:
            msgViewStrength.innerHTML = "<span class='text-info'>Senha média</span>";
            break;
        case 4:
            msgViewStrength.innerHTML = "<span class='text-primary'>Senha forte</span>";
            break;
        case 5:
            msgViewStrength.innerHTML = "<span class='text-success'>Senha muito forte</span>";
            break;
        default:
            msgViewStrength.innerHTML = "";
            break;
    }
}
</script>
