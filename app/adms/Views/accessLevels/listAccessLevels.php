<?php

if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

if (isset($this->data['form'])) {
    $valorForm = $this->data['form'];
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
        <h1 class="page-title">Níveis de AcessoPPPP</h1>
        <p class="page-subtitle">Gerenciamento dos níveis de acesso do sistema</p>
      </div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= URLADM ?>dashboard/index"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active">Níveis de Acesso</li>
        </ol>
      </nav>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- ACCESS LEVELS TABLE -->
          <div class="card">
            <div class="card-header">
             
              <div class="right">
                <?php
                if ($this->data['button']['add_access_levels']) {
                    echo "<a href='" . URLADM . "add-access-levels/index' class='btn btn-success btn-sm mr-2'>Cadastrar</a>";
                }
                if ($this->data['button']['sync_pages_levels']) {
                    echo "<a href='" . URLADM . "sync-pages-levels/index' class='btn btn-warning btn-sm'>Sincronizar</a>";
                }
                ?>
              </div>
            </div>
            <div class="card-body">
              <!-- Search Form -->
              <div class="mb-3">
                <form method="POST" action="" class="form-inline">
                  <div class="row w-100">
                    <?php
                    $search_name = "";
                    if (isset($valorForm['search_name'])) {
                        $search_name = $valorForm['search_name'];
                    }
                    ?>
                    <div class="col-md-10 mb-2">
                      <input type="text" name="search_name" id="search_name" class="form-control form-control-sm" placeholder="Pesquisar pelo nome do nível de acesso" value="<?php echo $search_name; ?>">
                    </div>
                    <div class="col-md-2">
                      <button type="submit" name="SendSearchAccessLevels" class="btn btn-info btn-sm" value="Pesquisar">Pesquisar</button>
                    </div>
                  </div>
                </form>
              </div>
              
              <!-- Alert Messages -->
              <div class="mb-3">
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
              </div>
              
              <!-- Table -->
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead class="bg-dark text-white">
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th class="d-none d-sm-table-cell">Ordem</th>
                      <th class="text-center">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($this->data['listAccessLevels'] as $accessLevels) {
                        extract($accessLevels);
                    ?>
                      <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td class="d-none d-sm-table-cell"><?php echo $order_levels; ?></td>
                        <td class="text-center">
                          <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton<?php echo $id; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Ações
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton<?php echo $id; ?>">
                              <?php
                              if ($this->data['button']['order_access_levels']) {
                                  echo "<a class='dropdown-item' href='" . URLADM . "order-access-levels/index/$id?pag=" . $this->data['pag'] . "'><i class='fa fa-sort'></i> Ordem</a>";
                              }
                              if ($this->data['button']['list_permission']) {
                                  echo "<a class='dropdown-item' href='" . URLADM . "list-permission/index?level=$id'><i class='fa fa-lock'></i> Permissões</a>";
                              }
                              if ($this->data['button']['view_access_levels']) {
                                  echo "<a class='dropdown-item' href='" . URLADM . "view-access-levels/index/$id'><i class='fa fa-eye'></i> Visualizar</a>";
                              }
                              if ($this->data['button']['edit_access_levels']) {
                                  echo "<a class='dropdown-item' href='" . URLADM . "edit-access-levels/index/$id'><i class='fa fa-edit'></i> Editar</a>";
                              }
                              if ($this->data['button']['delete_access_levels']) {
                                  echo "<a class='dropdown-item' href='" . URLADM . "delete-access-levels/index/$id' onclick='return confirm(\"Tem certeza que deseja excluir este registro?\")'><i class='fa fa-trash'></i> Apagar</a>";
                              }
                              ?>
                            </div>
                          </div>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              
              <!-- Pagination -->
              <div class="mt-3">
                <?php echo $this->data['pagination']; ?>
              </div>
            </div>
          </div>
          <!-- END ACCESS LEVELS TABLE -->
        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
</div>
<!-- END WRAPPER -->

<script>
// Enable Bootstrap dropdowns without jQuery
document.addEventListener('DOMContentLoaded', function() {
  var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
  dropdownElementList.map(function(dropdownToggleEl) {
    dropdownToggleEl.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      var dropdown = this.nextElementSibling;
      if (dropdown.classList.contains('show')) {
        dropdown.classList.remove('show');
      } else {
        dropdown.classList.add('show');
      }
    });
  });
  
  // Close dropdowns when clicking outside
  document.addEventListener('click', function(e) {
    if (!e.target.matches('.dropdown-toggle')) {
      var dropdowns = document.getElementsByClassName('dropdown-menu');
      for (var i = 0; i < dropdowns.length; i++) {
        if (dropdowns[i].classList.contains('show')) {
          dropdowns[i].classList.remove('show');
        }
      }
    }
  });
});
</script>