<?php
    if (!defined('C8L6K7E')) {
        header("Location: /");
        die("Erro: Página não encontrada<br>");
    }
?>

<div class="clearfix"></div>

  <!-- footer -->
    <footer>
      <div class="container-fluid">
        <p class="copyright">&copy; 2020 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
      </div>
    </footer>
    <!-- end footer -->

  </div>
  <!-- END WRAPPER -->

  <script src="<?= URL; ?>js/custom_login.js"></script>
  <!-- Vendor -->
  <script src="<?= PATH_ASSETS; ?>js/vendor.min.js"></script>

  <!-- Plugins -->
  <script src="<?= PATH_ASSETS; ?>plugins/jquery-jeditable/jquery.jeditable.min.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/jquery.maskedinput/jquery.maskedinput.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/jquery-jeditable/jquery.jeditable.masked.min.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/jquery-ui/jquery-ui.min.js"></script> <!-- required by datepicker plugin -->
  <script src="<?= PATH_ASSETS; ?>plugins/jquery-jeditable/jquery.jeditable.datepicker.min.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/jqvmap/maps/jquery.vmap.world.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/flot/jquery.canvaswrapper.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/flot/jquery.colorhelpers.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/flot/jquery.flot.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/flot/jquery.flot.saturated.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/flot/jquery.flot.browser.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/flot/jquery.flot.drawSeries.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/flot/jquery.flot.uiConstants.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/flot/jquery.flot.resize.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/flot/jquery.flot.legend.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/flot/jquery.flot.hover.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/flot/jquery.flot.time.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/jquery.flot.tooltip/jquery.flot.tooltip.min.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/justgage/raphael.min.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/justgage/justgage.min.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/datatables.net/jquery.dataTables.min.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/datatables.net-bs4/dataTables.bootstrap4.min.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/jquery.appear/jquery.appear.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?= PATH_ASSETS; ?>plugins/bootstrap-tour/bootstrap-tour-standalone.js"></script>

  <!-- Uploader Plugin -->
  <script src="<?= PATH_ASSETS; ?>/plugins/dropify/js/dropify.min.js"></script>

  <!-- Uploader Init -->
  <script src="<?= PATH_ASSETS; ?>/js/pages/forms-dragdropupload.init.min.js"></script>
  <!-- Init -->
  <script src="<?= PATH_ASSETS; ?>js/pages/dashboard.init.js"></script>
  <script src="<?= PATH_ASSETS; ?>js/pages/ui-dragdroppanel.init.min.js"></script>

  <!-- App -->
  <script src="<?= PATH_ASSETS; ?>js/app.min.js"></script>
</body>
</html>