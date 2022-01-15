<?php
$post = $obj->display_post_published();
?>


<div class="main-banner header-text">
  <div class="container-fluid">
    <div class="owl-banner owl-carousel">
      <?php while ($show = mysqli_fetch_assoc($post)) { ?>
        <div class="item">
          <img src="admin/upload/<?php echo $show['post_img'];?>" alt="Thumbnil">
          <div class="item-content">
            <div class="main-content">
              <div class="meta-category">
                <span><?php echo $show['cat_name']; ?></span>
              </div>
              <a href="single_post.php?view=postview&&id=<?php echo $show['post_id']; ?>">
                <h4><?php echo $show['post_title']; ?></h4>
              </a>
              <ul class="post-info">
                <li><a href="#"><?php echo $show['post_author']; ?></a></li>
                <li><a href="#"><?php echo $show['post_date']; ?></a></li>
                <li><a href="#"><?php echo $show['post_comment_count']; ?></a></li>
              </ul>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>