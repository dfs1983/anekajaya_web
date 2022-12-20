<?php
session_start();
if ($_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>';
}
?>
<?php include "include_admin/header.php" ?>

<body>
    <?php include "include_admin/navbar.php" ?>

    <div class="section">
        <div class="container p-2">
            <h3 style="font-size: 20px; text-align: center;">Selamat Datang Admin <?php echo $_SESSION['a_global']->admin_name ?> di Aneka Jaya</h3>
        </div>
    </div>

    <div class="row">
        <!-- 2 row Starts -->
        <div class="col-lg-3 col-md-6">
            <!-- col-lg-3 col-md-6 Starts -->
            <div class="panel panel-primary">
                <!-- panel panel-primary Starts -->
                <div class="panel-heading">
                    <!-- panel-heading Starts -->
                    <div class="row">
                        <!-- panel-heading row Starts -->
                        <div class="col-xs-3">
                            <!-- col-xs-3 Starts -->
                            <i class="fa fa-tasks fa-5x"> </i>
                        </div><!-- col-xs-3 Ends -->
                        <div class="col-xs-9 text-right">
                            <!-- col-xs-9 text-right Starts -->
                            <div class="huge"> <?php echo $count_products; ?> </div>
                            <div>Produk</div>
                        </div><!-- col-xs-9 text-right Ends -->
                    </div><!-- panel-heading row Ends -->
                </div><!-- panel-heading Ends -->
                <a href="index.php?view_products">
                    <div class="panel-footer">
                        <!-- panel-footer Starts -->
                        <span class="pull-left"> Lihat Detail </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                        <div class="clearfix"></div>
                    </div><!-- panel-footer Ends -->
                </a>
            </div><!-- panel panel-primary Ends -->
        </div><!-- col-lg-3 col-md-6 Ends -->

        <div class="col-lg-3 col-md-6">
            <!-- col-lg-3 col-md-6 Starts -->
            <div class="panel panel-green">
                <!-- panel panel-green Starts -->
                <div class="panel-heading">
                    <!-- panel-heading Starts -->
                    <div class="row">
                        <!-- panel-heading row Starts -->
                        <div class="col-xs-3">
                            <!-- col-xs-3 Starts -->
                            <i class="fa fa-comments fa-5x"> </i>
                        </div><!-- col-xs-3 Ends -->
                        <div class="col-xs-9 text-right">
                            <!-- col-xs-9 text-right Starts -->
                            <div class="huge"> <?php echo $count_customers; ?> </div>
                            <div>Kustomer</div>
                        </div><!-- col-xs-9 text-right Ends -->
                    </div><!-- panel-heading row Ends -->
                </div><!-- panel-heading Ends -->
                <a href="index.php?view_customers">
                    <div class="panel-footer">
                        <!-- panel-footer Starts -->
                        <span class="pull-left"> Lihat Detail </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                        <div class="clearfix"></div>
                    </div><!-- panel-footer Ends -->
                </a>
            </div><!-- panel panel-green Ends -->
        </div><!-- col-lg-3 col-md-6 Ends -->


        <div class="col-lg-3 col-md-6">
            <!-- col-lg-3 col-md-6 Starts -->
            <div class="panel panel-yellow">
                <!-- panel panel-yellow Starts -->
                <div class="panel-heading">
                    <!-- panel-heading Starts -->
                    <div class="row">
                        <!-- panel-heading row Starts -->
                        <div class="col-xs-3">
                            <!-- col-xs-3 Starts -->
                            <i class="fa fa-shopping-cart fa-5x"> </i>
                        </div><!-- col-xs-3 Ends -->
                        <div class="col-xs-9 text-right">
                            <!-- col-xs-9 text-right Starts -->
                            <div class="huge"> <?php echo $count_p_categories; ?> </div>
                            <div>Kategori Produk</div>
                        </div><!-- col-xs-9 text-right Ends -->
                    </div><!-- panel-heading row Ends -->
                </div><!-- panel-heading Ends -->
                <a href="index.php?view_p_cats">
                    <div class="panel-footer">
                        <!-- panel-footer Starts -->
                        <span class="pull-left"> Lihat Detail </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                        <div class="clearfix"></div>
                    </div><!-- panel-footer Ends -->
                </a>
            </div><!-- panel panel-yellow Ends -->
        </div><!-- col-lg-3 col-md-6 Ends -->


        <div class="col-lg-3 col-md-6">
            <!-- col-lg-3 col-md-6 Starts -->
            <div class="panel panel-red">
                <!-- panel panel-red Starts -->
                <div class="panel-heading">
                    <!-- panel-heading Starts -->
                    <div class="row">
                        <!-- panel-heading row Starts -->
                        <div class="col-xs-3">
                            <!-- col-xs-3 Starts -->
                            <i class="fa fa-support fa-5x"> </i>
                        </div><!-- col-xs-3 Ends -->
                        <div class="col-xs-9 text-right">
                            <!-- col-xs-9 text-right Starts -->
                            <div class="huge"> <?php echo $count_total_orders; ?> </div>
                            <div>Daftar Order</div>
                        </div><!-- col-xs-9 text-right Ends -->
                    </div><!-- panel-heading row Ends -->
                </div><!-- panel-heading Ends -->
                <a href="index.php?view_orders">
                    <div class="panel-footer">
                        <!-- panel-footer Starts -->
                        <span class="pull-left"> Lihat Detail </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                        <div class="clearfix"></div>
                    </div><!-- panel-footer Ends -->
                </a>
            </div><!-- panel panel-red Ends -->
        </div><!-- col-lg-3 col-md-6 Ends -->
    </div><!-- 2 row Ends -->

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <!-- col-lg-3 col-md-6 Starts -->
            <div class="panel panel-success">
                <!-- panel panel-red Starts -->
                <div class="panel-heading">
                    <!-- panel-heading Starts -->
                    <div class="row">
                        <!-- panel-heading row Starts -->
                        <div class="col-xs-3">
                            <!-- col-xs-3 Starts -->
                            <i class="fa fa-dollar fa-5x"> </i>
                        </div><!-- col-xs-3 Ends -->
                        <div class="col-xs-9 text-right">
                            <!-- col-xs-9 text-right Starts -->
                            <div class="huge"> <?php echo $count_total_earnings ?> </div>
                            <div>Pendapatan</div>
                        </div><!-- col-xs-9 text-right Ends -->
                    </div><!-- panel-heading row Ends -->
                </div><!-- panel-heading Ends -->
                <a href="index.php?view_orders">
                    <div class="panel-footer">
                        <!-- panel-footer Starts -->
                        <span class="pull-left"> Lihat Detail </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                        <div class="clearfix"></div>
                    </div><!-- panel-footer Ends -->
                </a>
            </div><!-- panel panel-red Ends -->
        </div><!-- col-lg-3 col-md-6 Ends -->

        <div class="col-lg-3 col-md-6">
            <!-- col-lg-3 col-md-6 Starts -->
            <div class="panel panel-warning">
                <!-- panel panel-red Starts -->
                <div class="panel-heading">
                    <!-- panel-heading Starts -->
                    <div class="row">
                        <!-- panel-heading row Starts -->
                        <div class="col-xs-3">
                            <!-- col-xs-3 Starts -->
                            <i class="fa fa-spinner fa-5x"> </i>
                        </div><!-- col-xs-3 Ends -->
                        <div class="col-xs-9 text-right">
                            <!-- col-xs-9 text-right Starts -->
                            <div class="huge"> <?php echo $count_pending_orders ?> </div>
                            <div>Order Pending</div>
                        </div><!-- col-xs-9 text-right Ends -->
                    </div><!-- panel-heading row Ends -->
                </div><!-- panel-heading Ends -->
                <a href="index.php?view_orders">
                    <div class="panel-footer">
                        <!-- panel-footer Starts -->
                        <span class="pull-left"> Lihat Detail </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                        <div class="clearfix"></div>
                    </div><!-- panel-footer Ends -->
                </a>
            </div><!-- panel panel-red Ends -->
        </div><!-- col-lg-3 col-md-6 Ends -->


        <div class="col-lg-3 col-md-6">
            <!-- col-lg-3 col-md-6 Starts -->
            <div class="panel panel-info">
                <!-- panel panel-red Starts -->
                <div class="panel-heading">
                    <!-- panel-heading Starts -->
                    <div class="row">
                        <!-- panel-heading row Starts -->
                        <div class="col-xs-3">
                            <!-- col-xs-3 Starts -->
                            <i class="fa fa-check fa-5x"> </i>
                        </div><!-- col-xs-3 Ends -->
                        <div class="col-xs-9 text-right">
                            <!-- col-xs-9 text-right Starts -->
                            <div class="huge"> <?php echo $count_completed_orders ?> </div>
                            <div>Order Selesai</div>
                        </div><!-- col-xs-9 text-right Ends -->
                    </div><!-- panel-heading row Ends -->
                </div><!-- panel-heading Ends -->
                <a href="index.php?view_orders">
                    <div class="panel-footer">
                        <!-- panel-footer Starts -->
                        <span class="pull-left"> Lihat Detail </span>
                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
                        <div class="clearfix"></div>
                    </div><!-- panel-footer Ends -->
                </a>
            </div><!-- panel panel-red Ends -->
        </div><!-- col-lg-3 col-md-6 Ends -->
    </div>

    <?php include "include_admin/banner.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>