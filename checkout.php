<?php
session_start();
include("db.php");
include("functions/functions.php");
?>
<div class="section">
    <div id="content">
        <!-- content Starts -->
        <div class="container">
            <!-- container Starts -->
            <div class="col-md-12">
                <!-- col-md-12 Starts -->
                <?php
                if (!isset($_SESSION['konsumen_email'])) {
                    include("kustomer/login-konsumen.php");
                } else {
                    include("payment.php");
                }
                ?>
            </div><!-- col-md-12 Ends -->
        </div><!-- container Ends -->
    </div><!-- content Ends -->
</div>
</body>

</html>