<?php
    session_start();
    include("include_admin/db.php");
    if (!isset($_SESSION['admin_id'])) {
    echo "<script>window.open('login_admin.php','_self')</script>";
} else {
?>
<?php include "include_admin/header.php" ?>

<?php } ?>