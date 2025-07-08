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
          <p class="lead">Digite Nova Password</p>
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
        <form class="form-auth-small" method="POST" id="form-update-pass">
					<?php
          	$password = "";
            if (isset($valorForm['password'])) {
              	$password = $valorForm['password'];
            }
          ?>
          <div class="form-group">
            <label for="signup-password" class="control-label sr-only">PASSWORD</label>
            <input class="form-control" type="password" name="password" id="password" placeholder="Digite a senha" onkeyup="passwordStrength()" autocomplete="on" value="<?php echo $password; ?>" required>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block"  name="SendUpPass" value="Salvar" >SALVAR</button>
          <div class="bottom">
            <span id="msgViewStrength"></span>
            <span class="helper-text">Know your password? <a href="<?php echo URLADM; ?>">Login</a></span>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END WRAPPER -->
</body>

</html>
