<?php
/* $obj = new blogAdmin; already created obj in template.php and its link with all view page so no need to create another object here */
 $cat_name = $obj->display_category();

 if(isset($_POST['add_post'])){
    $msg = $obj->add_post($_POST);
 }

?>
<a class="btn btn-outline-secondary float-right m-2" href="manage_post.php"><i class="fas fa-arrow-left"></i></a> 
<h2 class="my-3">Add New Post</h2>

<h5 class="fs-5 text-success"><?php if(isset($msg)){ echo $msg;}?></h5>
<form class="form" action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label class="mb-1" for="post_title">Post Title</label>
        <input class="form-control py-4" name="post_title" id="post_title" type="text" required />
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_content">Post Content</label>
        <textarea rows="4" class="form-control py-4" name="post_content" id="post_contant"></textarea>
    </div>

    <div class="form-group">
        <label class="mb-1" for="post_img">Upload Thumbnail</label><br>
        <input class=" py-3" name="post_img" id="post_img" type="file" required />
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_cat">Select Post Category</label>
        <select class="form-control" name="post_cat" id="post_cat">
            <?php while($show = mysqli_fetch_assoc($cat_name)){?>
                <option value="<?php echo $show['cat_id'];?>"><?php echo $show['cat_name'];?></option>
            <?php }?>

        </select>
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_summery">Post Summery</label>
        <input class="form-control py-4" name="post_summery" id="post_summery" type="text" required />
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_tag">Post Tag</label>
        <input class="form-control py-4" name="post_tag" id="post_tag" type="text" required />
    </div>
    <div class="form-group">
        <label class="mb-1" for="post_status">Post Status</label>
        <select class="form-control" name="post_status" id="post_status">
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
         </div>
    
    <input class="form-control btn btn-primary" type="submit" name="add_post" value="Add Post">

</form>