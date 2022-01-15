<?php
/* $obj = new blogAdmin; already created obj in template.php and its link with all view page so no need to create another object here */
    if(isset($_GET['status'])){
        if($_GET['status']=='editpost'){
            $id = $_GET['id'];
           $post_data= $obj->get_post_info($id);
        }
    }
    if(isset($_POST['update_post'])){
        $msg = $obj->update_post($_POST);
    }
?>

<h2>Add New Post</h2>
<h5 class=" pt-2 fs-5 text-info"><?php if(isset($msg)){echo $msg;}?></h5>

<form class="form" action="" method="POST">
    <input type="hidden" name="edit_post_id" value="<?php echo $id;?>">
    <div class="form-group">
        <label class="mb-1" for="change_title">Change Title</label>
        <input class="form-control py-4" name="change_title" id="change_title" type="text" value="<?php echo $post_data['post_title'];?>" required />
    </div>
    <div class="form-group">
        <label class="mb-1" for="change_content">Change Content</label>
        <textarea rows="4" class="form-control py-4" name="change_content" id="change_contant"><?php echo $post_data['post_content'];?></textarea>
    </div>   
    <input class="btn btn-primary" type="submit" name="update_post" value="Update Post">
    <a class="btn btn-outline-secondary" href="manage_post.php">Back</a>
</form>