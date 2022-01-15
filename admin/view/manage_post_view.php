<?php
$post_data = $obj->display_post();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'delete') {
        $postid = $_GET['id'];
        $msg = $obj->delete_post($postid);
    }
}

?>


<h2>Manage Post</h2>
<h4 class="fs-6 text-warning"><?php if(isset($msg)) {echo $msg; }?></h4>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Thumb</th>
                <th>Author</th>
                <th>Date</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($posts = mysqli_fetch_assoc($post_data)) { ?>
                <tr>
                    <td><?php echo $posts['post_id']; ?></td>
                    <td><?php echo $posts['post_title']; ?></td>
                    <td><?php echo $posts['post_content']; ?></td>
                    <td>
                        <img height="75px" src="upload/<?php echo $posts['post_img']; ?>" alt="Thumbnil"><br>
                        <a style="text-decoration: none; color:brown;" href="edit_img.php?status=editimg&&id=<?php echo $posts['post_id']?>">Change</a>

                    </td>
                    <td><?php echo $posts['post_author']; ?></td>
                    <td><?php echo $posts['post_date']; ?></td>
                    <td><?php echo $posts['cat_name']; ?></td>
                    <td><?php if ($posts['post_status'] == 1) {
                            echo "Published";
                        } else echo "Unpublished"; ?></td>
                    <td>
                        <a class="btn btn-sm btn-info" href="edit_post.php?status=editpost&&id=<?php echo $posts['post_id'];?>">edit</a>
                        <a class="btn btn-sm btn-danger" href="?status=delete&&id=<?php echo $posts['post_id'];?>">delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>