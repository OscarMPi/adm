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
          <p class="lead">Recuperar Password</p>
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
        <form class="form-auth-small" method="POST" action="" id="form-new-conf-email"">
         <?php
            $email = "";
            if (isset($valorForm['email'])) {
                $email = $valorForm['email'];
            }
         ?>
          <div class="form-group">
            <label for="signup-password" class="control-label sr-only">Email</label>
            <input class="form-control" type="text" name="email" id="email" placeholder="Digite o seu e-mail" value="<?php echo $email; ?>" required>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-block"  name="SendNewConfEmail" value="Enviar" >ENVIAR</button>
          <div class="bottom">
            <span class="helper-text">Know your password? <a href="<?php echo URLADM; ?>">Login</a></span>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END WRAPPER -->
</body>

</html>