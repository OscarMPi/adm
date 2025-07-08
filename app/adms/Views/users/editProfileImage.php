<?php

if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

if (isset($this->data['form'])) {
    $valorForm = $this->data['form'];
}

if (isset($this->data['form'][0])) {
    $valorForm = $this->data['form'][0];
}

// Obter caminho da imagem atual do usuário
$imagePath = "";
if (isset($valorForm['image']) && !empty($valorForm['image'])) {
    $imagePath = PATH_ASSETS . "image/users/" . $_SESSION['user_id'] . "/" . $valorForm['image'];
} else {
    $imagePath = PATH_ASSETS . "image/users/icon_user.png";
}
?>

<!-- WRAPPER -->
<div id="wrapper">

  <!-- MAIN -->
  <div class="main">

    <!-- MAIN CONTENT -->
    <div class="main-content">

      <div class="content-heading">
        <div class="heading-left">
          <h1 class="page-title">Editar Imagem do Perfil</h1>
          <p class="page-subtitle">Atualize sua foto de perfil</p>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= URL ?>dashboard/index"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="<?= URL ?>view-profile/index">Perfil</a></li>
            <li class="breadcrumb-item active">Editar Imagem</li>
          </ol>
        </nav>
      </div>

      <!-- Mensagem de alerta -->
      <div class="msg-alert">
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
      </div>

      <!-- FORMULÁRIO DE EDIÇÃO DE IMAGEM -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Atualizar Foto de Perfil</h3>
          <div class="right">
            <?php
            if (isset($this->data['button']['view_profile'])) {
                echo '<a href="' . URL . 'view-profile/index" class="btn btn-primary btn-sm">Visualizar Perfil</a>';
            }
            ?>
          </div>
        </div>
        <div class="card-body">
          <form method="POST" action="" id="form-edit-profile-image" enctype="multipart/form-data">
            
            <!-- Campo oculto para ID -->
            <input type="hidden" name="id" value="<?= isset($valorForm['id']) ? $valorForm['id'] : ''; ?>">
            
            <!-- Campo para upload de imagem -->
            <div class="row justify-content-center">
              <div class="col-md-8">
                <h5 class="text-center mb-4">Selecione uma nova imagem</h5>
                <input type="file" name="new_image" id="dropify-profile" 
                       class="dropify" 
                       data-height="300" 
                       data-max-file-size="2M"
                       data-allowed-file-extensions="jpg jpeg png gif"
                       data-default-file="<?= $imagePath ?>"
                       data-show-remove="false">
                <small class="form-text text-muted">Formatos aceitos: JPG, JPEG, PNG e GIF. Tamanho máximo: 2MB.</small>
              </div>
            </div>
            
            <!-- Botões de ação -->
            <div class="row mt-4">
              <div class="col-md-12 text-center">
                <button type="submit" name="SendEditProfImage" class="btn btn-primary btn-lg" value="Salvar">
                  <i class="fa fa-save"></i> Salvar
                </button>
                <a href="<?= URL; ?>view-profile/index" class="btn btn-light btn-lg">Cancelar</a>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- FIM DO FORMULÁRIO -->

    </div>
    <!-- END MAIN CONTENT -->
1216  </div>
  <!-- END MAIN -->
</div>
<!-- END WRAPPER -->
