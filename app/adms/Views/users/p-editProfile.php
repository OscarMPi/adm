<?php
if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}
?>

		
        <!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">EDITAR PERFIL</h3>
					<div class="row">
                    <?php
                if (!empty($this->data['viewProfile'])) {
                    if ($this->data['button']['edit_profile']) {
                        echo "<a href='" . URLADM . "edit-profile/index' class='btn-warning'>Editar</a> ";
                    }
                    if ($this->data['button']['edit_profile_password']) {
                        echo "<a href='" . URLADM . "edit-profile-password/index' class='btn-warning'>Editar Senha</a> ";
                    }
                    if ($this->data['button']['edit_profile_image']) {
                        echo "<a href='" . URLADM . "edit-profile-image/index' class='btn-warning'>Editar Imagem</a> ";
                    }
                }
                ?>
						<div class="col-md-6">
							<!-- BUTTONS -->
							
							<!-- END BUTTONS -->
							<!-- INPUTS -->
							<div class="panel">
                            <div class="content-adm-alert">
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
        </div>
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
									<input type="text" class="form-control" placeholder="text field">
									<br>
									<input type="password" class="form-control" value="asecret">
									<br>
									<textarea class="form-control" placeholder="textarea" rows="4"></textarea>
									<br>
									
									
								</div>
							</div>
							<!-- END INPUTS -->
							<!-- INPUT SIZING -->

							<!-- END INPUT SIZING -->
						</div>
						<div class="col-md-6">
							<!-- LABELS -->

							<!-- END LABELS -->
							<!-- PROGRESS BARS -->
							
							<!-- END PROGRESS BARS -->
							<!-- INPUT GROUPS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Input Groups</h3>
								</div>
								<div class="panel-body">
									<div class="input-group">
										<input class="form-control" type="text">
										<span class="input-group-btn"><button class="btn btn-primary" type="button">Go!</button></span>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-btn">
							<button class="btn btn-primary" type="button">Go!</button>
						</span>
										<input class="form-control" type="text">
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" placeholder="Username" type="text">
									</div>
									<br>
									<div class="input-group">
										<input class="form-control" placeholder="Username" type="text">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
									</div>
									<br>
									<div class="input-group">
										<span class="input-group-addon">$</span>
										<input class="form-control" type="text">
										<span class="input-group-addon">.00</span>
									</div>
								</div>
							</div>
							<!-- END INPUT GROUPS -->
							<!-- ALERT MESSAGES -->
							
							<!-- END ALERT MESSAGES -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->