<!-- Inicio Navbar -->

<!-- WRAPPER -->
<div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand fixed-top">
      <div class="navbar-brand d-none d-lg-block">
        <a href="<?= URL; ?>dashboard/index"><img src="<?= PATH_ASSETS; ?>image/logo-dark.png" alt="Klorofil Logo" class="img-fluid logo"></a>
      </div>
      <div class="container-fluid p-0">
        <button id="tour-fullwidth" type="button" class="btn btn-default btn-toggle-fullwidth"><i class="ti-menu"></i></button>
        
        <!-- Modified search form to integrate with listAccessLevels search functionality -->
        <form class="form-inline search-form mr-auto d-none d-sm-block" method="POST" action="<?= URLADM; ?>list-access-levels/index">
          <div class="input-group">
            <?php
            $search_name = "";
            if (isset($_SESSION['search_name'])) {
                $search_name = $_SESSION['search_name'];
            }
            ?>
            <input type="text" name="search_name" class="form-control" placeholder="Pesquisar ..." value="<?php echo $search_name; ?>">
            <div class="input-group-append">
              <button type="submit" name="SendSearchAccessLevels" value="Pesquisar" class="btn"><i class="fa fa-search"></i></button>
            </div>
            
            <!-- Hidden fields to maintain compatibility with existing search function -->
            <input type="hidden" name="global_search" value="1">
          </div>
        </form>
        
        <div id="navbar-menu">
          <ul class="nav navbar-nav align-items-center">
            <li class="nav-item">
              <a href="#" class="dropdown-toggle btn-toggle-rightsidebar">
                <i class="ti-layout-sidebar-right"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                <i class="ti-bell"></i>
                <span class="badge bg-danger">5</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right notifications">
                <li class="dropdown-item">You have 5 new notifications</li>
                <li class="dropdown-item">
                  <a href="#" class="notification-item">
                    <i class="fa fa-hdd-o custom-bg-red"></i>
                    <p><span class="text">System space is almost full</span> <span class="timestamp">11 minutes ago</span></p>
                  </a>
                </li>
                <li class="dropdown-item">
                  <a href="#" class="notification-item">
                    <i class="fa fa-tasks custom-bg-yellow"></i>
                    <p><span class="text">You have 9 unfinished tasks</span> <span class="timestamp">20 minutes ago</span></p>
                  </a>
                </li>
                <li class="dropdown-item">
                  <a href="#" class="notification-item">
                    <i class="fa fa-book custom-bg-green2"></i>
                    <p><span class="text">Monthly report is available</span> <span class="timestamp">1 hour ago</span></p>
                  </a>
                </li>
                <li class="dropdown-item">
                  <a href="#" class="notification-item">
                    <i class="fa fa-bullhorn custom-bg-purple"></i>
                    <p><span class="text">Weekly meeting in 1 hour</span> <span class="timestamp">2 hours ago</span></p>
                  </a>
                </li>
                <li class="dropdown-item">
                  <a href="#" class="notification-item">
                    <i class="fa fa-check custom-bg-green"></i>
                    <p><span class="text">Your request has been approved</span> <span class="timestamp">3 days ago</span></p>
                  </a>
                </li>
                <li class="dropdown-item"><a href="#" class="more">See all notifications</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="tour-help" class="dropdown-toggle" data-toggle="dropdown"><i class="ti-help"></i> <span class="sr-only">Help</span></a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="#"><i class="ti-direction"></i> Basic Use</a></li>
                <li><a href="#"><i class="ti-server"></i> Working With Data</a></li>
                <li><a href="#"><i class="ti-lock"></i> Security</a></li>
                <li><a href="#"><i class="ti-light-bulb"></i> Troubleshooting</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php
                if ((!empty($_SESSION['user_image'])) and (file_exists("app/adms/assets/image/users/" . $_SESSION['user_id'] . "/" . $_SESSION['user_image']))) {
                    echo "<img src='" . PATH_ASSETS . "image/users/" . $_SESSION['user_id'] . "/" . $_SESSION['user_image'] . "' class='user-picture' alt='Avatar'>";
                } else {
                    echo "<img src='" . PATH_ASSETS . "image/users/icon_user.png' class='user-picture' alt='Avatar'>";
                }
                ?>
                <span><?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : 'User'; ?></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right logged-user-menu">
                <li><a href="<?= URL; ?>view-profile/index"><i class="ti-user"></i> <span>Perfil</span></a></li>
                <li><a href="<?= URL; ?>edit-profile/index"><i class="ti-settings"></i> <span>Configuração</span></a></li>
                <li><a href="<?= URL; ?>logout/index"><i class="ti-power-off"></i> <span>Sair</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <!-- END NAVBAR -->
