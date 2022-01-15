<?php
 include("admin/class/function.php");
 $obj = new blogAdmin();
 $cat = $obj->display_category();

?>

<?php include_once('include/head.php'); ?>

<body>
  <!-- ***** Preloader Start ***** -->
  <?php include_once('include/preloader.php'); ?>
  <!-- Header -->
  <?php include_once('include/header.php'); ?>
  <!-- Page Content -->
  <!-- Banner -->
  <?php include_once('include/banner.php'); ?>
  <!-- Call to action -->
  <?php include_once('include/calltoaction.php'); ?>
  <!-- Blog Post -->
  <section class="blog-posts">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <?php include_once('include/blogpost.php'); ?>
        </div>
        <!-- Blog Post Sidebar -->
        <div class="col-lg-4">
        <?php include_once('include/sidebar.php'); ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <?php include_once('include/footer.php'); ?>
  <!-- Script -->
  <?php include_once('include/script.php'); ?>