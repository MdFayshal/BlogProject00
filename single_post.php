<?php
include("admin/class/function.php");
$obj = new blogAdmin();
$cat = $obj->display_category();

if (isset($_GET['view'])) {
    if ($_GET['view'] == 'postview') {
        $id = $_GET['id'];
        $posts = $obj->get_post_info($id);
    }
}

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
                            <p><?php echo $posts['post_content']; ?></p>
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