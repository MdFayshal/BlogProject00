<?php 
    $cat = $obj->display_category();
?>

<div class="sidebar-item categories">
    <div class="sidebar-heading">
        <h2>Categories</h2>
    </div>
    <div class="content">
        <ul>
            <?php while($show = mysqli_fetch_assoc($cat)){?>
            <li><a href="category.php?view=catview&&id=<?php echo $show['cat_id'];?>">- <?php echo $show['cat_name'];?></a></li>
            <?php }?>
        </ul>
    </div>
</div>