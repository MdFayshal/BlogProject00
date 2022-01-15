<?php
    if(isset($_GET['status'])){
        if($_GET['status']=='editimg'){
            $id = $_GET['id'];

        }
    }
    if(isset($_POST['change_img'])){
       $msg=  $obj->edit_img($_POST);
    }
?>


<div class="shadow m-5 p-5">
    <h5 class="fs-5 text-info"><?php if(isset($msg)){echo $msg;}?></h5>
    <form action="" class="form" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="edit_img_id" value="<?php echo $id;?>">
        <div class="form-group">
            <label class="mb-1" for="change_img">Change Thumbnail</label><br>
            <input class="py-4" name="change_img" id="change_img" type="file" required />
        </div>
        <input class="btn btn-primary" type="submit"  name ="change_img"value="Change Thumbnail">
        <a class="btn btn-outline-secondary" href="manage_post.php">Back</a>
    </form>
</div>