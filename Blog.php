<?php
 include("admin/class/function.php");
 $obj = new blogAdmin();
 $cat = $obj->display_category();
 $post_data= $obj->display_post_published();

?>

<?php include_once('include/head.php'); ?>

<body>
  <!-- ***** Preloader Start ***** -->
  <?php include_once('include/preloader.php'); ?>
  <!-- Header -->
  <?php include_once('include/header.php'); ?>
  <!-- Page Content -->
  <!-- Banner -->
  <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Recent Posts</h4>
                <h2>Our Recent Blog Entries</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  <!-- Call to action -->
  <?php include_once('include/calltoaction.php'); ?>
  <!-- Blog Post -->
  <section class="blog-posts">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
        <div class="all-blog-posts">
              <div class="row">
              <?php while($posts = mysqli_fetch_assoc($post_data)){?>
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                    <img src="admin/upload/<?php echo $posts['post_img'];?>" alt="Thumbnil">
                    </div>
                    <div class="down-content">
                    <span><?php echo $posts['cat_name']; ?></span>
                    <a href="single_post.php?view=postview&&id=<?php echo $posts['post_id']; ?>">
            <h4><?php echo $posts['post_title']; ?></h4>
          </a>
                      <ul class="post-info">
                      <li><a href="#"><?php echo $posts['post_author']; ?></a></li>
            <li><a href="#"><?php echo $posts['post_date']; ?></a></li>
            <li><a href="#"><?php echo $posts['post_comment_count']; ?></a></li>
                      </ul>
                      <p><?php echo $posts['post_summery']; ?></p>
                    </div>
                  </div>
                </div>
                <?php }?>
                <div class="col-lg-12">
                  <ul class="page-numbers">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
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