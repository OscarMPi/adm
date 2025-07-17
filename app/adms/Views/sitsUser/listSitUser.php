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
        <h1 class="page-title">Situações de Usuário</h1>
        <p class="page-subtitle">Gerenciamento das situações de usuário do sistema</p>
      </div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item"><a href="#">Usuários</a></li>
          <li class="breadcrumb-item active">Situações</li>
        </ol>
      </nav>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <!-- SITUAÇÕES TABLE -->
          <div class="card">
            <div class="card-header">
          
              <div class="right">
                <?php
                if ($this->data['button']['add_sits_users']) {
                    echo "<a href='" . URLADM . "add-sits-users/index' class='btn btn-success btn-sm'>Cadastrar</a>";
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
                      
                      <input type="text" name="search_name" id="search_name" class="form-control form-control-sm" placeholder="Pesquisar pelo nome da situação" value="<?php echo $search_name; ?>">
                    </div>
                    <div class="col-md-2">
                      <button type="submit" name="SendSearchSitUser" class="btn btn-info btn-sm" value="Pesquisar">Pesquisar</button>
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
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th class="text-center">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($this->data['listSitsUsers'] as $sitUser) {
                        extract($sitUser);
                    ?>
                      <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo "<span style='color: $color'>$name</span>"; ?></td>
                        <td class="text-center">
                          <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton<?php echo $id; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Ações
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton<?php echo $id; ?>">
                              <?php
                              if ($this->data['button']['view_sits_users']) {
                                  echo "<a class='dropdown-item' href='" . URLADM . "view-sits-users/index/$id'><i class='fa fa-eye'></i> Visualizar</a>";
                              }
                              if ($this->data['button']['edit_sits_users']) {
                                  echo "<a class='dropdown-item' href='" . URLADM . "edit-sits-users/index/$id'><i class='fa fa-edit'></i> Editar</a>";
                              }
                              if ($this->data['button']['delete_sits_users']) {
                                  echo "<a class='dropdown-item' href='" . URLADM . "delete-sits-users/index/$id' onclick='return confirm(\"Tem certeza que deseja excluir este registro?\")'><i class='fa fa-trash'></i> Apagar</a>";
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
          <!-- END SITUAÇÕES TABLE -->
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
