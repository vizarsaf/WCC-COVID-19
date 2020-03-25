<?php
  include "pages/partials/header.php";
?>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include "pages/partials/sidebar.php"; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include "pages/partials/topbar.php"; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <?php
            if ( !isset($_GET["page"]) ) $page = "dashboard";
            else $page = $_GET["page"];
            include "pages/$page.php";
          ?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  <?php
    include "pages/partials/scroll.php";
    include "pages/partials/modals/logoutModal.php";
    include "pages/partials/js.php";
    include "pages/partials/footer.php";
  ?>

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
