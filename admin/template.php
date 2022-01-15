<?php
include("class/function.php");
$obj = new blogAdmin;
session_start();
$admin_id = $_SESSION['adminid'];
if ($admin_id == null) {
    header("location:index.php");
}

if (isset($_GET['adminlogout'])) {
    if ($_GET['adminlogout'] == "logout") {

        $obj->admin_logout();
    }
}

?>



<?php include_once("includes/header.php"); ?>

<body class="sb-nav-fixed">
    <?php include_once("includes/topnav.php"); ?>
    <div id="layoutSidenav">
        <?php include_once("includes/sidenave.php"); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <?php
                    if (isset($view)) {
                        if ($view == "dashboard") {
                            include("view/dash_view.php");
                        } elseif ($view == "add_category") {
                            include("view/add_cat_view.php");
                        } elseif ($view == "manage_category") {
                            include("view/manage_cat_view.php");
                        }elseif ($view == "editcat") {
                            include("view/edit_cat_view.php");
                        }elseif ($view == "add_post") {
                            include("view/add_post_view.php");
                        } elseif ($view == "manage_post") {
                            include("view/manage_post_view.php");
                        }elseif ($view == "edit_post") {
                            include("view/edit_post_view.php");
                        }elseif ($view == "edit_img") {
                            include("view/edit_img_view.php");
                        }
                    }
                    ?>
                </div>
            </main>
            <?php include_once("includes/footer.php"); ?>
        </div>
    </div>
    <?php include_once("includes/script.php"); ?>
</body>

</html>