<?php
$cat_data = $obj->display_category();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'edit') {
        $catid = $_GET['id'];
        $msg = $obj->edit_category($catid);
    }
}
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'delete') {
        $catid = $_GET['id'];
        $msg = $obj->delete_category($catid);
    }
}
?>

<h2>Manage Category</h2>
<h4 class="fs-6 text-warning"><?php if (isset($msg)) {echo $msg;} ?></h4>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($show = mysqli_fetch_assoc($cat_data)) { ?>
            <tr>
                <td><?php echo $show['cat_id'] ?></td>
                <td><?php echo $show['cat_name'] ?></td>
                <td><?php echo $show['cat_des'] ?></td>
                <td>
                    <a class="btn btn-info" href="edit_ctg.php?status=editcat&&id=<?php echo $show['cat_id'] ?>">edit</a>
                    <a class="btn btn-danger" href="?status=delete&&id=<?php echo $show['cat_id'] ?>">delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>