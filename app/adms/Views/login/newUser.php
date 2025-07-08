<?php

if (!defined('C8L6K7E')) {
    header("Location: /");
    die("Erro: Página não encontrada<br>");
}

// Include logo definitions
require_once "app/cpms/assets/image/logo/logo.php";

if (isset($this->data['form'])) {
    $valorForm = $this->data['form'];
}
?>
  <!-- WRAPPER -->
  <div id="wrapper" class="d-flex align-items-center justify-content-center">
    <div class="auth-box register">
      <div class="content">
        <div class="header">
          <div class="logo text-center"><img src="<?php echo LOGO_ADM; ?>" alt="Admin Logo"></div>
          <p class="lead">Create an account</p>
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
        <form class="form-auth-small" method="POST" id="form-new-user" action="">
					<?php
            $name = "";
            	if (isset($valorForm['name'])) {
                $name = $valorForm['name'];
            	}
          ?>
          <div class="form-group">
            <label for="signup-name" class="control-label sr-only">Nome</label>
            <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" placeholder="Your name" required>
          </div>
          	<?php
            	$email = "";
            		if (isset($valorForm['email'])) {
                	$email = $valorForm['email'];
            	}
            ?>
          <div class="form-group">
            <label for="signup-email" class="control-label sr-only">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>" placeholder="Your email" required>
          </div>
          	<?php
            	$password = "";
            	if (isset($valorForm['password'])) {
                $password = $valorForm['password'];
            	}
            ?>
          <div class="form-group">
            <label for="signup-password" class="control-label sr-only">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Digite a senha" onkeyup="passwordStrength()" autocomplete="on" value="<?php echo $password; ?>" placeholder="Password" required>
          </div>
          <span id="msgViewStrength"></span>
          <button type="submit" class="btn btn-primary btn-lg btn-block" name="SendNewUser" value="Cadastrar">REGISTER</button>
          <div class="bottom">
            <span class="helper-text">Already have an account? <a href="<?php echo URLADM; ?>">Login</a></span>
          </div>
        </form>

        <div class="separator-linethrough"><span>OR</span></div>

        <button class="btn btn-signin-social"><i class="fa fa-facebook-official facebook-color"></i> Sign in with Facebook</button>
        <button class="btn btn-signin-social"><i class="fa fa-twitter twitter-color"></i> Sign in with Twitter</button>
      </div>
    </div>
  </div>
  <!-- END WRAPPER -->

