<?php
if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}
?>
<!-- Inicio do conteudo do administrativo -->
	<!-- WRAPPER -->
	<div id="wrapper">

		<!-- MAIN -->
    <div class="main">

      <!-- MAIN CONTENT -->
      <div class="main-content">

        <div class="content-heading">
          <div class="heading-left">
            <h1 class="page-title">Profile</h1>
            <p class="page-subtitle">Your profile is <strong class="text-success">85%</strong> complete. Please <a href="#">complete your profile</a>.</p>
          </div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item"><a href="#">Parent</a></li>
            
              <?php
                    if (!empty($this->data['viewProfile'])) {
                        if ($this->data['button']['edit_profile']) {
                            echo "<li class='breadcrumb-item'><a href='" . URLADM . "edit-profile/index'>Edit-Prof</a></li> ";
                            
                        }
                        if ($this->data['button']['edit_profile_password']) {
                            echo "<li class='breadcrumb-item'><a href='" . URLADM . "edit-profile-password/index'>Edit-Pass</a></li> ";
                      
                        }
                        if ($this->data['button']['edit_profile_image']) {
                            echo "<li class='breadcrumb-item'><a href='" . URLADM . "edit-profile-image/index'>Edit-Imag</a></li> ";
                        }
                    }
              ?>

            </ol>
          </nav>
        </div>

        <div class="container-fluid">
          <div class="card card-profile">
            <div class="row no-gutters">
              <!-- left column -->
              <div class="col-md-4">
                <div class="profile-left">

                  <!-- profile header -->
                  <div class="profile-header">
                  <?php
                      if (isset($_SESSION['msg'])) {
                          echo $_SESSION['msg'];
                          unset($_SESSION['msg']);
                      }
                  ?>
                  <div class="overlay"></div>
                  <?php
                      if (!empty($this->data['viewProfile'])) {
                          extract($this->data['viewProfile'][0]);
                  ?>								
                  <div class="profile-main">
                  <?php
                     if ((!empty($image)) and (file_exists("app/adms/assets/image/users/" . $_SESSION['user_id'] . "/$image"))) {
                         echo "<img src='" . URLADM . "app/adms/assets/image/users/" . $_SESSION['user_id'] . "/$image' class='rounded-circle' width='100' height='100'><br><br>";
                    } else {
                         echo "<img src='" . URLADM . "app/adms/assets/image/users/icon_user.png' class='rounded-circle' width='100' height='100'><br><br>";}
                  ?>
                      <h3 class="name"><?php echo $name; ?></h3>
                      <span class="online-status status-available">Available</span>
                    </div>                    <div class="profile-stat">
                      <div class="row">
                        <div class="col-md-4 stat-item">
                          45 <span>Projects</span>
                        </div>
                        <div class="col-md-4 stat-item">
                          15 <span>Awards</span>
                        </div>
                        <div class="col-md-4 stat-item">
                          2174 <span>Points</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end profile header -->

                  <!-- profile detail -->
                  <div class="profile-detail">
                    <div class="profile-info">
                      <h4 class="heading">Basic Info</h4>
                      <dl class="row">
                        <dt class="col-sm-4">Birthdate</dt>
                        <dd class="col-sm-8 text-right">24 Aug, 2016</dd>

                        <dt class="col-sm-4">Mobile</dt>
                        <dd class="col-sm-8 text-right">(124) 823409234</dd>

                        <dt class="col-sm-4">Email</dt>
                        <dd class="col-sm-8 text-right"><?php echo $email; ?></dd>

                        <dt class="col-sm-4">Website</dt>
                        <dd class="col-sm-8 text-right"><a href="https://www.themeineed.com">www.themeineed.com</a></dd>
                      </dl>
                    </div>
                    <div class="profile-info">
                      <h4 class="heading">Social</h4>
                      <ul class="list-inline social-icons">
                        <li class="list-inline-item"><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
                      </ul>
                    </div>
                    <div class="profile-info">
                      <h4 class="heading">About</h4>
                      <p>Interactively fashion excellent information after distinctive outsourcing.</p>
                    </div>
                    <div class="text-center"><a href="<?php echo URLADM; ?>" class="btn btn-primary">Edit Profile</a></div>
                  </div>
                  <!-- end profile detail -->
                </div>
              </div>
              <!-- end left column -->

              <!-- right column -->
              <div class="col-md-8">
                <div class="profile-right">
                  <h4 class="heading">Samuel's Awards</h4>

                  <!-- awards -->
                  <div class="awards">
                    <div class="row">
                      <div class="col-md-3 col-sm-6">
                        <div class="award-item">
                          <div class="hexagon">
                            <span class="ti-light-bulb award-icon"></span>
                          </div>
                          <span>Most Bright Idea</span>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="award-item">
                          <div class="hexagon">
                            <span class="ti-alarm-clock award-icon"></span>
                          </div>
                          <span>Most On-Time</span>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="award-item">
                          <div class="hexagon">
                            <span class="ti-hummer award-icon"></span>
                          </div>
                          <span>Problem Solver</span>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="award-item">
                          <div class="hexagon">
                            <span class="ti-heart award-icon"></span>
                          </div>
                          <span>Most Loved</span>
                        </div>
                      </div>
                    </div>
                    <div class="text-center"><a href="#" class="btn btn-outline-light">See all awards</a></div>
                  </div>
                  <!-- end awards -->

                  <!-- tabbed content -->
                  <div class="custom-tabs-line tabs-line-bottom left-aligned">
                    <ul class="nav" role="tablist">
                      <li class="nav-item"><a href="#tab-bottom-left1" class="nav-link active" role="tab" data-toggle="tab">Recent Activity</a></li>
                      <li class="nav-item"><a href="#tab-bottom-left2" class="nav-link" role="tab" data-toggle="tab">Projects <span class="badge badge-pill badge-secondary">7</span></a></li>
                    </ul>
                  </div>
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-bottom-left1">
                      <ul class="list-unstyled activity-timeline">
                        <li>
                          <i class="fa fa-comment activity-icon"></i>
							            <p>Commented on post <a href="#">Prototyping</a> <span class="timestamp">2 minutes ago</span></p>
                        </li>
                        <li>
                          <i class="fa fa-cloud-upload activity-icon"></i>
                          <p>Uploaded new file <a href="#">Proposal.docx</a> to project <a href="#">New Year Campaign</a> <span class="timestamp">7 hours ago</span></p>
                        </li>
                        <li>
                          <i class="fa fa-plus activity-icon"></i>
                          <p>Added <a href="#">Martin</a> and <a href="#">3 others colleagues</a> to project repository <span class="timestamp">Yesterday</span></p>
                        </li>
                        <li>
                          <i class="fa fa-check activity-icon"></i>
                          <p>Finished 80% of all <a href="#">assigned tasks</a> <span class="timestamp">1 day ago</span></p>
                        </li>
                      </ul>
                      <div class="text-center"><a href="#" class="btn btn-outline-light">See all activity</a></div>
                    </div>
                    <div class="tab-pane fade" id="tab-bottom-left2">
                      <div class="table-responsive">
                        <table class="table project-table">
                          <thead class="thead-light">
                            <tr>
                              <th>Title</th>
                              <th>Progress</th>
                              <th>Leader</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><a href="#">Spot Media</a></td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    <span>60%</span>
                                  </div>
                                </div>
                              </td>
                              <td><img src="<?php echo URLADM; ?>app/adms/assets/images/user2.png" alt="Avatar" class="avatar rounded-circle"> <a href="#">Michael</a></td>
                              <td><span class="badge badge-success">ACTIVE</span></td>
                            </tr>
                            <tr>
                              <td><a href="#">E-Commerce Site</a></td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
                                    <span>33%</span>
                                  </div>
                                </div>
                              </td>
                              <td><img src="<?php echo URLADM; ?>app/adms/assets/images/user1.png" alt="Avatar" class="avatar rounded-circle"> <a href="#">Antonius</a></td>
                              <td><span class="badge badge-warning">PENDING</span></td>
                            </tr>
                            <tr>
                              <td><a href="#">Project 123GO</a></td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
                                    <span>68%</span>
                                  </div>
                                </div>
                              </td>
                              <td><img src="<?php echo URLADM; ?>app/adms/assets/images/user1.png" alt="Avatar" class="avatar rounded-circle"> <a href="#">Antonius</a></td>
                              <td><span class="badge badge-success">ACTIVE</span></td>
                            </tr>
                            <tr>
                              <td><a href="#">Wordpress Theme</a></td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                    <span>75%</span>
                                  </div>
                                </div>
                              </td>
                              <td><img src="<?php echo URLADM; ?>app/adms/assets/images/user2.png" alt="Avatar" class="avatar rounded-circle"> <a href="#">Michael</a></td>
                              <td><span class="badge badge-success">ACTIVE</span></td>
                            </tr>
                            <tr>
                              <td><a href="#">Project 123GO</a></td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                    <span>100%</span>
                                  </div>
                                </div>
                              </td>
                              <td><img src="<?php echo URLADM; ?>app/adms/assets/images/user1.png" alt="Avatar" class="avatar rounded-circle"/> <a href="#">Antonius</a></td>
                              <td><span class="badge badge-secondary">CLOSED</span></td>
                            </tr>
                            <tr>
                              <td><a href="#">Redesign Landing Page</a></td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                    <span>100%</span>
                                  </div>
                                </div>
                              </td>
                              <td><img src="<?php echo URLADM; ?>app/adms/assets/images/user5.png" alt="Avatar" class="avatar rounded-circle"/> <a href="#">Jason</a></td>
                              <td><span class="badge badge-secondary">CLOSED</span></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <?php } ?>  
                  </div>
                  <!-- end tabbed content -->
                </div>
              </div>
              <!-- end right column -->
            </div>
          </div>
        </div>
      </div>
      <!-- END MAIN CONTENT -->

    </div>
    <!-- END MAIN -->
  </div>

  <!-- END WRAPPER -->