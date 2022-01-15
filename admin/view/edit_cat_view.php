<?php
 if(isset($_GET['status'])){
     if($_GET['status']=="editcat"){
         $id = $_GET['id'];
         $cat_data = $obj->get_cat_info($id);
     }
 }
 if(isset($_POST['update_cat'])){
    $msg = $obj->update_category($_POST);
}

?>


<h2>Update Category</h2>
<h4 class="text-success fs-5"><?php if (isset($msg)) {echo $msg;} ?></h4>

<form class="form" action="" method="POST">

    <input type="hidden" name="edit_cat_id" value="<?php echo $id;?>">
    
    <div class="form-group">
        <label class="mb-1" for="change_cat_name">Change Category Name</label>
        <input class="form-control py-4" name="change_cat_name" id="change_cat_name" type="text" value="<?php echo $cat_data['cat_name'];?>"/>
    </div>
    
    <div class="form-group">
        <label class="mb-1" for="chnage_cat_des"> Change Category Description</label>
        <textarea rows="3" class="form-control py-4" name="change_cat_des" id="change_cat_des">
        <?php echo $cat_data['cat_des'];?>
        </textarea>

    </div>

    <input class="btn btn-primary" type="submit" name="update_cat" value="Update Catagory">
    <a class="btn btn-outline-secondary" href="manage_category.php">Back</a>

</form>