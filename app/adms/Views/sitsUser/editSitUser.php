<?php

if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

// Receive form data if it exists
if (isset($this->data['form'])) {
    $valorForm = $this->data['form'];
}

if (isset($this->data['form'][0])) {
    $valorForm = $this->data['form'][0];
}

// Ensure ID is set
$id = "";
if (isset($valorForm['id'])) {
    $id = $valorForm['id'];
}
?>
<!-- MAIN -->
<div class="main">

<!-- MAIN CONTENT -->
<div class="main-content">

  <div class="content-heading">
    <div class="heading-left">
      <h1 class="page-title">Editar Situação</h1>
      <p class="page-subtitle">Altere as informações da situação de usuário</p>
    </div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= URLADM ?>dashboard/index"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="<?= URLADM ?>list-sits-users/index">Situações</a></li>
        <li class="breadcrumb-item active">Editar Situação</li>
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
  <span id="msg"></span>

  <!-- FORMULÁRIO DE EDIÇÃO DE SITUAÇÃO -->
  <div class="card">
    <div class="card-header">
      
      <div class="right">
        <?php
        if ($this->data['button']['list_sits_users']) {
            echo '<a href="' . URLADM . 'list-sits-users/index" class="btn btn-primary btn-sm">Listar</a> ';
        }
        
        if (!empty($id) && $this->data['button']['view_sits_users']) {
            echo '<a href="' . URLADM . 'view-sits-users/index/' . $id . '" class="btn btn-info btn-sm">Visualizar</a> ';
        }
        ?>
      </div>
    </div>
    <div class="card-body">
      <form method="POST" action="" id="form-edit-sit-user">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

        <div class="form-group row">
          <label for="name" class="col-sm-3 col-form-label">Nome <span class="text-danger">*</span></label>
          <div class="col-sm-9">
            <?php
            $name = "";
            if (isset($valorForm['name'])) {
                $name = $valorForm['name'];
            }
            ?>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" placeholder="Digite o nome da situação" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="adms_color_id" class="col-sm-3 col-form-label">Cor <span class="text-danger">*</span></label>
          <div class="col-sm-9">
            <select name="adms_color_id" id="adms_color_id" class="form-control" required>
              <option value="">Selecione</option>
              <?php
              foreach($this->data['select']['col'] as $col){
                  extract($col);
                  if((isset($valorForm['adms_color_id'])) and ($valorForm['adms_color_id'] == $id_col)){
                      echo "<option value='$id_col' selected style='color: $color_col;'>$name_col</option>";
                  }else{
                      echo "<option value='$id_col' style='color: $color_col;'>$name_col</option>";
                  }
              }
              ?>
            </select>
          </div>
        </div>

        <p class="text-danger"><small>* Campos obrigatórios</small></p>

        <button type="submit" class="btn btn-warning btn-lg d-block mx-auto" name="SendEditSitUser" value="Salvar">
          <i class="fa fa-save"></i> <span>Salvar</span>
        </button>
      </form>
    </div>
  </div>
  <!-- FIM DO FORMULÁRIO DE EDIÇÃO DE SITUAÇÃO -->
</div>
<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->