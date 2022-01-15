<?php
/* $obj = new blogAdmin; already created obj in template.php and its link with all view page so no need to create another object here */

if (isset($_POST['add_cat'])) {
    $cat_msg = $obj->add_category($_POST);
}


?>

<a class="btn btn-outline-secondary float-right m-2" href="manage_category.php"><i class="fas fa-arrow-left"></i></a> 
<h2 class="py-3"> Add New Category</h2>
<form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <h4 class="text-success fs-5"><?php if (isset($cat_msg)) {
                                        echo $cat_msg;
                                    } ?></h4>
    <div class="form-group">
        <label class="mb-1" for="cat_name">Category Name</label>
        <input class="form-control py-4" name="cat_name" id="cat_name" type="text" required />
    </div>
    <div class="form-group">
        <label class="mb-1" for="cat_des">Category Description</label>
        <textarea rows="3" class="form-control py-4" name="cat_des" id="cat_des"></textarea>

    </div>

    <input class="form-control btn btn-primary" type="submit" name="add_cat" value="Add Catagory">

</form>