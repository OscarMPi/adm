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
        <h1 class="page-title">Static Tables</h1>
        <p class="page-subtitle">Simple tables based on Bootstrap</p>
      </div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item"><a href="#">Parent</a></li>
          <li class="breadcrumb-item active">Current</li>
        </ol>
      </nav>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <!-- BASIC TABLE -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Basic Table</h3>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr><th>#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr>
                </thead>
                <tbody>
                  <tr><td>1</td><td>Steve</td><td>Jobs</td><td>@steve</td></tr>
                  <tr><td>2</td><td>Simon</td><td>Philips</td><td>@simon</td></tr>
                  <tr><td>3</td><td>Jane</td><td>Doe</td><td>@jane</td></tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END BASIC TABLE -->

          <!-- LIGHT HEAD -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Light Head</h3>
            </div>
            <div class="card-body">
              <table class="table">
                <thead class="thead-light">
                  <tr><th>#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr>
                </thead>
                <tbody>
                  <tr><td>1</td><td>Steve</td><td>Jobs</td><td>@steve</td></tr>
                  <tr><td>2</td><td>Simon</td><td>Philips</td><td>@simon</td></tr>
                  <tr><td>3</td><td>Jane</td><td>Doe</td><td>@jane</td></tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END LIGHT HEAD -->

          <!-- TABLE FULLWIDTH -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Table Fullwidth</h3>
            </div>
            <div class="card-body p-0">
              <table class="table table-fullwidth">
                <thead>
                  <tr><th class="pl-4">#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr>
                </thead>
                <tbody>
                  <tr><td class="pl-4">1</td><td>Steve</td><td>Jobs</td><td>@steve</td></tr>
                  <tr><td class="pl-4">2</td><td>Simon</td><td>Philips</td><td>@simon</td></tr>
                  <tr><td class="pl-4">3</td><td>Jane</td><td>Doe</td><td>@jane</td></tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END TABLE FULLWIDTH -->

          <!-- TABLE STRIPED -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Striped Row</h3>
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr><th>#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr>
                </thead>
                <tbody>
                  <tr><td>1</td><td>Steve</td><td>Jobs</td><td>@steve</td></tr>
                  <tr><td>2</td><td>Simon</td><td>Philips</td><td>@simon</td></tr>
                  <tr><td>3</td><td>Jane</td><td>Doe</td><td>@jane</td></tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END TABLE STRIPED -->

          <!-- BORDERED TABLE -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Bordered Table</h3>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr><th>#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr>
                </thead>
                <tbody>
                  <tr><td>1</td><td>Steve</td><td>Jobs</td><td>@steve</td></tr>
                  <tr><td>2</td><td>Simon</td><td>Philips</td><td>@simon</td></tr>
                  <tr><td>3</td><td>Jane</td><td>Doe</td><td>@jane</td></tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END BORDERED TABLE -->

          <!-- SMALL TABLE -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Compact Table</h3>
            </div>
            <div class="card-body">
              <table class="table table-sm">
                <thead>
                  <tr><th>#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr>
                </thead>
                <tbody>
                  <tr><td>1</td><td>Steve</td><td>Jobs</td><td>@steve</td></tr>
                  <tr><td>2</td><td>Simon</td><td>Philips</td><td>@simon</td></tr>
                  <tr><td>3</td><td>Jane</td><td>Doe</td><td>@jane</td></tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END SMALL TABLE -->

          <!-- RESPONSIVE TABLE -->
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Table</h3>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr><th>Heading</th><th>Heading</th><th>Heading</th><th>Heading</th><th>Heading</th><th>Heading</th></tr>
                    </thead>
                    <tbody>
                      <tr><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td></tr>
                      <tr><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td></tr>
                      <tr><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td><td>Cell</td></tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- END RESPONSIVE TABLE -->
        </div>
        <div class="col-md-6">
          <!-- DARK TABLE -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Dark Table</h3>
            </div>
            <div class="card-body">
              <table class="table table-dark">
                <thead>
                  <tr><th>#</th><th>FIRST NAME</th><th>LAST NAME</th><th>USERNAME</th></tr>
                </thead>
                <tbody>
                  <tr><td>1</td><td>Steve</td><td>Jobs</td><td>@steve</td></tr>
                  <tr><td>2</td><td>Simon</td><td>Philips</td><td>@simon</td></tr>
                  <tr><td>3</td><td>Jane</td><td>Doe</td><td>@jane</td></tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END DARK TABLE -->

          <!-- DARK HEAD -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Dark Head</h3>
            </div>
            <div class="card-body">
              <table class="table">
                <thead class="thead-dark">
                  <tr><th>#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr>
                </thead>
                <tbody>
                  <tr><td>1</td><td>Steve</td><td>Jobs</td><td>@steve</td></tr>
                  <tr><td>2</td><td>Simon</td><td>Philips</td><td>@simon</td></tr>
                  <tr><td>3</td><td>Jane</td><td>Doe</td><td>@jane</td></tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END DARK HEAD -->

          <!-- TABLE HOVER -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Hover Row</h3>
            </div>
            <div class="card-body">
              <table class="table table-hover">
                <thead>
                  <tr><th>#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr>
                </thead>
                <tbody>
                  <tr><td>1</td><td>Steve</td><td>Jobs</td><td>@steve</td></tr>
                  <tr><td>2</td><td>Simon</td><td>Philips</td><td>@simon</td></tr>
                  <tr><td>3</td><td>Jane</td><td>Doe</td><td>@jane</td></tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END TABLE HOVER -->

          <!-- BORDERLESS TABLE -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Borderless Table</h3>
            </div>
            <div class="card-body">
              <table class="table table-borderless">
                <thead>
                  <tr><th>#</th><th>First Name</th><th>Last Name</th><th>Username</th></tr>
                </thead>
                <tbody>
                  <tr><td>1</td><td>Steve</td><td>Jobs</td><td>@steve</td></tr>
                  <tr><td>2</td><td>Simon</td><td>Philips</td><td>@simon</td></tr>
                  <tr><td>3</td><td>Jane</td><td>Doe</td><td>@jane</td></tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END BORDERLESS TABLE -->

          <!-- CONTEXTUAL TABLE -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Contextual Row and Cell</h3>
            </div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr><th>Class</th><th>Heading</th><th>Heading</th></tr>
                </thead>
                <tbody>
                  <tr class="table-active"><td>Active</td><td>Cell</td><td>Cell</td></tr>
                  <tr><td>Default</td><td>Cell</td><td>Cell</td></tr>
                  <tr class="table-primary"><td>Primary</td><td>Cell</td><td>Cell</td></tr>
                  <tr class="table-secondary"><td>Secondary</td><td>Cell</td><td>Cell</td></tr>
                  <tr class="table-success"><td>Success</td><td>Cell</td><td>Cell</td></tr>
                  <tr class="table-danger"><td>Danger</td><td>Cell</td><td>Cell</td></tr>
                  <tr class="table-warning"><td>Warning</td><td>Cell</td><td>Cell</td></tr>
                  <tr class="table-info"><td>Info</td><td>Cell</td><td>Cell</td></tr>
                  <tr class="table-light"><td>Light</td><td>Cell</td><td>Cell</td></tr>
                  <tr class="table-dark"><td>Dark</td><td>Cell</td><td>Cell</td></tr>
                  <tr><td class="table-primary">Cell Level</td><td class="table-success">Success</td><td class="table-danger">Danger</td></tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- END CONTEXTUAL TABLE -->
        </div>
      </div>
      
    </div>
  </div>
  <!-- END MAIN CONTENT -->

  <!-- RIGHT SIDEBAR -->
  <div id="sidebar-right" class="right-sidebar">
    <div class="sidebar-widget">
      <h4 class="widget-heading"><i class="fa fa-calendar"></i> TODAY</h4>
      <p class="date">Wednesday, 22 December</p>

      <div class="row mt-4">
        <div class="col-4">
          <a href="#">
            <div class="icon-transparent-area custom-color-blue first">
              <i class="fa fa-tasks"></i> <span>Tasks</span>
              <span class="badge">5</span>
            </div>
          </a>
        </div>
        <div class="col-4">
          <a href="#">
            <div class="icon-transparent-area custom-color-green">
              <i class="fa fa-envelope"></i> <span>Mail</span>
              <span class="badge">12</span>
            </div>
          </a>
        </div>
        <div class="col-4">
          <a href="#">
            <div class="icon-transparent-area custom-color-orange last">
              <i class="fa fa-user-plus"></i> <span>Users</span>
              <span class="badge">24</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="sidebar-widget">
      <div class="widget-header">
        <h4 class="widget-heading">YOUR APPS</h4>
        <a href="#" class="show-all">Show all</a>
      </div>
      <div class="row">
        <div class="col-3">
          <a href="#" class="icon-app" title="Dropbox" data-toggle="tooltip" data-placement="top">
            <i class="fa fa-dropbox dropbox-color"></i>
          </a>
        </div>
        <div class="col-3">
          <a href="#" class="icon-app" title="WordPress" data-toggle="tooltip" data-placement="top">
            <i class="fa fa-wordpress wordpress-color"></i>
          </a>
        </div>
        <div class="col-3">
          <a href="#" class="icon-app" title="Drupal" data-toggle="tooltip" data-placement="top">
            <i class="fa fa-drupal drupal-color"></i>
          </a>
        </div>
        <div class="col-3">
          <a href="#" class="icon-app" title="Github" data-toggle="tooltip" data-placement="top">
            <i class="fa fa-github github-color"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="sidebar-widget">
      <div class="widget-header">
        <h4 class="widget-heading">MY PROJECTS</h4>
        <a href="#" class="show-all">Show all</a>
      </div>
      <ul class="list-unstyled list-project-progress">
        <li>
          <a href="#" class="project-name">Project XY</a>
          <div class="progress progress-transparent custom-color-orange">
            <div class="progress-bar" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width:67%;"></div>
          </div>
          <span class="percentage">67%</span>
        </li>
        <li>
          <a href="#" class="project-name">Growth Campaign</a>
          <div class="progress progress-transparent custom-color-blue">
            <div class="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%"></div>
          </div>
          <span class="percentage">23%</span>
        </li>
        <li>
          <a href="#" class="project-name">Website Redesign</a>
          <div class="progress progress-transparent custom-color-green">
            <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width:87%"></div>
          </div>
          <span class="percentage">87%</span>
        </li>
      </ul>
    </div>

    <div class="sidebar-widget">
      <div class="widget-header">
        <h4 class="widget-heading">MY FILES</h4>
        <a href="#" class="show-all">Show all</a>
      </div>
      <ul class="list-unstyled list-justify list-file-simple">
        <li><a href="#"><i class="fa fa-file-word-o"></i>Proposal_draft.docx</a> <span>4 MB</span></li>
        <li><a href="#"><i class="fa fa-file-pdf-o"></i>Manual_Guide.pdf</a> <span>20 MB</span></li>
        <li><a href="#"><i class="fa fa-file-zip-o"></i>all-project-files.zip</a> <span>315 MB</span></li>
        <li><a href="#"><i class="fa fa-file-excel-o"></i>budget_estimate.xls</a> <span>1 MB</span></li>
      </ul>
    </div>

    <p class="text-center"><a href="#" class="btn btn-primary btn-sm">More Widgets</a></p>
  </div>
  <!-- END RIGHT SIDEBAR -->

</div>
<!-- END MAIN -->
