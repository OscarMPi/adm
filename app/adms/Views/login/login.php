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
  <div id="wrapper" class="d-flex align-items-center justify-content-center">
    <div class="auth-box ">
      <div class="left">
        <div class="content">
          <div class="header">
            <div class="logo text-center"><img src="<?= LOGO_ADM; ?>" alt="Admin Logo"></div>
            <p class="lead">Login to your account</p>
          </div>
          <div class="msg-alert">
            <?php
            if (isset($_SESSION['msg'])) {
                echo "<span id='msg'> " . $_SESSION['msg'] . "</span>";
                unset($_SESSION['msg']);
            } else {
                echo "<span id='msg'></span>";
            }
            ?>
          </div>
		<form class="form-auth-small" method="POST" id="form-login" action="">
        <?php
           	$user = "";
            if (isset($valorForm['user'])) {
                $user = $valorForm['user'];
            }
        ?>
        <div class="form-group">
            <label for="signin-email" class="control-label sr-only">Email</label>
            <input class="form-control" type="text" name="user" id="user" placeholder="Digite o usuário" value="<?php echo $user; ?>" value="samuel.gold@domain.com" placeholder="Email" required>
        </div>
		<?php
            $password = "";
            if (isset($valorForm['password'])) {
            $password = $valorForm['password'];
	}
        
		?>

            <div class="form-group">
              <label for="signin-password" class="control-label sr-only">Password</label>
              <input class="form-control" type="password" name="password" id="password" placeholder="Digite a senha" autocomplete="on" value="<?php echo $password; ?>" value="thisisthepassword" placeholder="Password" required>
            </div>
            <div class="form-group">
              <label class="fancy-checkbox element-left custom-bgcolor-blue">
                <input type="checkbox">
                <span class="text-muted">Remember me</span>
              </label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="SendLogin" value="Acessar">LOGIN</button>
            
            <div class="bottom">
              <span class="helper-text d-block">Don't have an account? <a href="<?= URL; ?>new-user/index">Register</a></span>
              <span class="helper-text"><i class="fa fa-lock"></i> <a href="<?= URL; ?>recover-password/index">Forgot password?</a></span>
            </div>
          </form>
        </div>
      </div>
      <div class="right">
        <div class="overlay"></div>
        <div class="content text">
          <h1 class="heading">OsSystem - Login</h1>
          <p>by The Develovers</p>
        </div>
      </div>
    </div>
  </div>
  <!-- END WRAPPER -->

