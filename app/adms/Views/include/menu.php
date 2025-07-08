<?php

if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

// Mapear classes de ícones entre diferentes bibliotecas
function mapIconClass($iconClass) {
    // Mapeamento completo de ícones Themify para Font Awesome
    $iconMap = [
        // Ícones problemáticos
        'ti-dashboard' => 'fa fa-dashboard',
        'ti-power-off' => 'fa fa-power-off',
        
        // Mapeamentos adicionais comuns
        'ti-home' => 'fa fa-home',
        'ti-user' => 'fa fa-user',
        'ti-settings' => 'fa fa-cog',
        'ti-menu' => 'fa fa-bars',
        'ti-angle-left' => 'fa fa-angle-left',
        'ti-angle-right' => 'fa fa-angle-right',
        'ti-bell' => 'fa fa-bell',
        'ti-email' => 'fa fa-envelope',
        'ti-files' => 'fa fa-files-o',
        'ti-trash' => 'fa fa-trash',
        'ti-search' => 'fa fa-search',
        'ti-plus' => 'fa fa-plus',
        'ti-minus' => 'fa fa-minus',
        'ti-check' => 'fa fa-check',
        'ti-close' => 'fa fa-close',
        'ti-pencil' => 'fa fa-pencil',
        'ti-lock' => 'fa fa-lock',
        'ti-unlock' => 'fa fa-unlock',
        'ti-arrows-horizontal' => 'fa fa-arrows-h'
    ];
    
    return isset($iconMap[$iconClass]) ? $iconMap[$iconClass] : $iconClass;
}

$sidebar_active = "";
if (isset($this->data['sidebarActive'])) {
    $sidebar_active = $this->data['sidebarActive'];
}
?>
<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
  <nav>
    <ul class="nav" id="sidebar-nav-menu">
      <?php
      // Variáveis para controlar grupos de menu
      $current_group = "";
      $current_dropdown = 0;
      $dropdown_open = false;
      
      // Verificar se existem itens de menu
      if ((isset($this->data['menu'])) && ($this->data['menu'])) {
          foreach ($this->data['menu'] as $item_menu) {
              extract($item_menu);
              
              // Determinar se item está ativo
              $active_item_menu = "";
              if ($sidebar_active == $menu_controller) {
                  $active_item_menu = "active";
              }
              
              // Verificar se é um novo grupo de menu
              if (isset($menu_group) && $menu_group != $current_group) {
                  // Se havia um dropdown aberto, feche-o
                  if ($dropdown_open) {
                      echo "</ul></div>";
                      $dropdown_open = false;
                  }
                  
                  echo "<li class=\"menu-group\">$menu_group</li>";
                  $current_group = $menu_group;
              }
              
              // Verificar se é um item de dropdown
              if (isset($dropdown) && $dropdown == 1) {
                  // Se é um novo dropdown
                  if ($id_itm_men != $current_dropdown) {
                      // Se havia um dropdown aberto, feche-o
                      if ($dropdown_open) {
                          echo "</ul></div>";
                      }
                      
                      // Abrir novo dropdown
                      $expanded = ($active_item_menu == "active") ? "true" : "";
                      $show_class = ($active_item_menu == "active") ? "show" : "";
                      
                      // Mapear a classe do ícone do dropdown para garantir compatibilidade
                      $icon_class = mapIconClass($icon_itm_men);
                      
                      echo "<li class=\"panel\">";
                      echo "<a href=\"#dropdown{$id_itm_men}\" data-toggle=\"collapse\" data-parent=\"#sidebar-nav-menu\" aria-expanded=\"{$expanded}\" class=\"{$active_item_menu}\"><i class=\"{$icon_class}\"></i> <span class=\"title\">{$name_itm_men}</span> <i class=\"icon-submenu fa fa-angle-left\"></i></a>";
                      echo "<div id=\"dropdown{$id_itm_men}\" class=\"collapse {$show_class}\">";
                      echo "<ul class=\"submenu\">";
                      
                      $current_dropdown = $id_itm_men;
                      $dropdown_open = true;
                  }
                  
                  // Adicionar item ao dropdown
                  echo "<li><a href=\"" . URL . "{$menu_controller}/{$menu_metodo}\" class=\"{$active_item_menu}\">{$name_page}</a></li>";
              } else {
                  // Se havia um dropdown aberto e estamos saindo dele
                  if ($dropdown_open) {
                      echo "</ul></div></li>";
                      $dropdown_open = false;
                      $current_dropdown = 0;
                  }
                  
                  // Item normal de menu - aqui está o foco principal da correção
                  // Mapear a classe do ícone para garantir que todos os ícones sejam exibidos
                  $icon_class = mapIconClass($icon);
                  
                  echo "<li>";
                  echo "<a href=\"" . URL . "{$menu_controller}/{$menu_metodo}\" class=\"{$active_item_menu}\"><i class=\"{$icon_class}\"></i> <span class=\"title\">{$name_page}</span></a>";
                  echo "</li>";
              }
          }
          
          // Se houver um dropdown aberto no final, feche-o
          if ($dropdown_open) {
              echo "</ul></div></li>";
          }
      } else {
          // Menu padrão com ícones mapeados
          ?>
          <li class="menu-group">Main</li>
          <li class="panel">
            <a href="<?= URL; ?>dashboard/index" class="active"><i class="fa fa-dashboard"></i> <span class="title">Dashboard- teste</span></a>
          </li>
          <?php
      }
      ?>
      
    </ul>
    
    <button type="button" class="btn-toggle-minified" title="Toggle Minified Menu"><i class="fa fa-arrows-h"></i></button>
  </nav>
</div>
<!-- END LEFT SIDEBAR -->




