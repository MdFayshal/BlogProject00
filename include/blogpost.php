<?php
  $post_data= $obj->display_post_published();
?>

<div class="all-blog-posts">
  <div class="row">
    <?php while($posts = mysqli_fetch_assoc($post_data)){?>
    <div class="col-lg-12">
      <div class="blog-post">
        <div class="blog-thumb">
        <img height="330px" src="admin/upload/<?php echo $posts['post_img'];?>" alt="Thumbnil">
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
          <div class="post-options">
            <div class="row">
              <div class="col-6">
                <?php echo $posts['post_tag']; ?>
              </div>
              <div class="col-6">
                <ul class="post-share">
                  <li><i class="fa fa-share-alt"></i></li>
                  <li><a href="#">Facebook</a>,</li>
                  <li><a href="#"> Twitter</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }?>
    <div class="col-lg-12">
                  <div class="main-button">
                    <a href="blog.php">View All Posts</a>
                  </div>
                </div>
  </div>
</div>