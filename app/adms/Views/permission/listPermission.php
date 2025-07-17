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
        <h1 class="page-title">Permissões do Nível de Acesso</h1>
        <p class="page-subtitle">
          Nível: <?php if(isset($this->data['viewAccessLevel'][0]['name'])){echo $this->data['viewAccessLevel'][0]['name'];} ?>
        </p>
      </div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= URLADM ?>dashboard/index"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item"><a href="<?= URLADM ?>list-access-levels/index">Níveis de Acesso</a></li>
          <li class="breadcrumb-item active">Permissões</li>
        </ol>
      </nav>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- PERMISSIONS TABLE -->
          <div class="card">
            <div class="card-header">
              <div class="right">
                <?php
                if ($this->data['button']['list_access_levels']) {
                    echo "<a href='" . URLADM . "list-access-levels/index' class='btn btn-primary btn-sm'>Listar Níveis de Acesso</a>";
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
                      <input type="text" name="search_name" id="search_name" class="form-control form-control-sm" placeholder="Pesquisar pelo nome da página" value="<?php echo $search_name; ?>">
                    </div>
                    <div class="col-md-2">
                      <button type="submit" name="SendSearchPermission" class="btn btn-info btn-sm" value="Pesquisar">Pesquisar</button>
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
                <table class="table table-striped table-hover">
                  <thead class="bg-dark text-white">
                    <tr>
                      <th>ID</th>
                      <th>Página</th>
                      <th class="d-none d-sm-table-cell">Ordem</th>
                      <th class="d-none d-sm-table-cell">Permissão</th>
                      <th class="d-none d-md-table-cell">Menu</th>
                      <th class="d-none d-md-table-cell">Dropdown</th>
                      <th class="text-center">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($this->data['listPermission'] as $permission) {
                        extract($permission);
                    ?>
                      <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name_page; ?></td>
                        <td class="d-none d-sm-table-cell"><?php echo $order_level_page; ?></td>
                        <td class="d-none d-sm-table-cell">
                          <?php
                          if ($permission == 1) {
                              echo "<a href='" . URLADM . "edit-permission/index/$id?&level=$adms_access_level_id&pag=" . $this->data['pag'] . "'><span class='badge badge-success'>Liberado</span></a>";
                          } else {
                              echo "<a href='" . URLADM . "edit-permission/index/$id?&level=$adms_access_level_id&pag=" . $this->data['pag'] . "'><span class='badge badge-danger'>Bloqueado</span></a>";
                          }
                          ?>
                        </td>
                        <td class="d-none d-md-table-cell">
                          <?php
                          if ($print_menu == 1) {
                              echo "<a href='" . URLADM . "edit-print-menu/index/$id?&level=$adms_access_level_id&pag=" . $this->data['pag'] . "'><span class='badge badge-success'>Liberado</span></a>";
                          } else {
                              echo "<a href='" . URLADM . "edit-print-menu/index/$id?&level=$adms_access_level_id&pag=" . $this->data['pag'] . "'><span class='badge badge-danger'>Bloqueado</span></a>";
                          }
                          ?>
                        </td>
                        <td class="d-none d-md-table-cell">
                          <?php
                          if ($dropdown == 1) {
                              echo "<a href='" . URLADM . "edit-dropdown-menu/index/$id?&level=$adms_access_level_id&pag=" . $this->data['pag'] . "'><span class='badge badge-success'>Sim</span></a>";
                          } else {
                              echo "<a href='" . URLADM . "edit-dropdown-menu/index/$id?&level=$adms_access_level_id&pag=" . $this->data['pag'] . "'><span class='badge badge-danger'>Não</span></a>";
                          }
                          ?>
                        </td>
                        <td class="text-center">
                          <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton<?php echo $id; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Ações
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton<?php echo $id; ?>">
                              <?php
                              if ($this->data['button']['order_page_menu']) {
                                  echo "<a class='dropdown-item' href='" . URLADM . "order-page-menu/index/$id?&level=$adms_access_level_id&pag=" . $this->data['pag'] . "'><i class='fa fa-sort'></i> Ordem</a>";
                              }

                              if ($this->data['button']['edit_page_menu']) {
                                  echo "<a class='dropdown-item' href='" . URLADM . "edit-page-menu/index/$id?&level=$adms_access_level_id&pag=" . $this->data['pag'] . "'><i class='fa fa-edit'></i> Editar</a>";
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
          <!-- END PERMISSIONS TABLE -->
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