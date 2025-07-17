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

// Get ID value
$id = "";
if (isset($valorForm['id'])) {
    $id = $valorForm['id'];
}

// Get page name
$name_page = "";
if (isset($valorForm['name_page'])) {
    $name_page = $valorForm['name_page'];
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
        <h1 class="page-title">Editar Item de Menu da Página</h1>
        <p class="page-subtitle">Defina o item de menu para a página selecionada</p>
      </div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= URLADM ?>dashboard/index"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item"><a href="<?= URLADM ?>list-access-levels/index">Níveis de Acesso</a></li>
          <li class="breadcrumb-item"><a href="<?= URLADM ?>list-permission/index?level=<?= $this->data['btnLevel'] ?>">Permissões</a></li>
          <li class="breadcrumb-item active">Editar Item de Menu</li>
        </ol>
      </nav>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- FORM CARD -->
          <div class="card">
            <div class="card-header">
              <div class="right">
                <?php
                if ($this->data['button']['list_permission']) {
                    echo "<a href='" . URLADM . "list-permission/index?level={$this->data['btnLevel']}' class='btn btn-primary btn-sm'>Listar Permissões</a> ";
                }
                ?>
              </div>
            </div>
            <div class="card-body">
              <!-- Alert Messages -->
              <div class="mb-3">
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <span id="msg"></span>
              </div>
              
              <!-- Form -->
              <form method="POST" action="" id="form-edit-page-menu">
                <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                
                <div class="form-group row">
                  <div class="col-md-12 mb-4">
                    <div class="card bg-light">
                      <div class="card-body">
                        <h5 class="card-title mb-2">Informações da Página</h5>
                        <p class="card-text mb-0"><strong>Página:</strong> <?php echo $name_page; ?></p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="adms_items_menu_id" class="col-sm-3 col-form-label">Item de Menu <span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    <select name="adms_items_menu_id" id="adms_items_menu_id" class="form-control" required>
                      <option value="">Selecione</option>
                      <?php
                      foreach ($this->data['select']['itm'] as $itmMenu) {
                          extract($itmMenu);
                          if (isset($valorForm['adms_items_menu_id']) and $valorForm['adms_items_menu_id'] == $id_itm) {
                              echo "<option value='$id_itm' selected>$name_itm</option>";
                          } else {
                              echo "<option value='$id_itm'>$name_itm</option>";
                          }
                      }
                      ?>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12">
                    <p class="text-danger"><small>* Campo obrigatório</small></p>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12 text-center">
                    <button type="submit" name="SendEditPageMenu" class="btn btn-warning" value="Salvar">
                      <i class="fa fa-save"></i> Salvar
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END FORM CARD -->
        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
</div>
<!-- END WRAPPER -->