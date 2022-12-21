<?php
session_start();
include 'include_admin/db.php';
if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
?>
    <?php include "include_admin/header.php" ?>

    <body>
        <?php include "include_admin/navbar.php" ?>
        <div class="row">
            <!-- 2 row Starts -->

            <div class="col-lg-12">
                <!-- col-lg-12 Starts -->

                <div class="panel panel-default">
                    <!-- panel panel-default Starts -->

                    <div class="panel-heading">
                        <!-- panel-heading Starts -->

                        <h3 class="panel-title">
                            <!-- panel-title Starts -->

                            <i class="fa fa-money fa-fw"></i> View Orders

                        </h3><!-- panel-title Ends -->

                    </div><!-- panel-heading Ends -->

                    <div class="panel-body">
                        <!-- panel-body Starts -->

                        <div class="table-responsive">
                            <!-- table-responsive Starts -->

                            <table class="table table-bordered table-hover table-striped">
                                <!-- table table-bordered table-hover table-striped Starts -->
                                <thead>
                                    <!-- thead Starts -->
                                    <tr>
                                        <th>#</th>
                                        <th>Customer</th>
                                        <th>Invoice</th>
                                        <th>Product</th>
                                        <th>Qty</th>
                                        <th>Order Date</th>
                                        <th>Total Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead><!-- thead Ends -->

                                <tbody>
                                    <!-- tbody Starts -->
                                    <?php
                                    $i = 0;
                                    $get_orders = "SELECT * FROM pending_orders";
                                    $run_orders = mysqli_query($con, $get_orders);

                                    while ($row_orders = mysqli_fetch_array($run_orders)) {

                                        $order_id = $row_orders['order_id'];
                                        $c_id = $row_orders['konsumen_id'];
                                        $invoice_no = $row_orders['invoice_no'];

                                        $product_id = $row_orders['product_id'];

                                        $qty = $row_orders['qty'];

                                        $size = $row_orders['size'];

                                        $order_status = $row_orders['order_status'];

                                        $get_products = "SELECT * FROM tb_products WHERE product_id='$product_id'";

                                        $run_products = mysqli_query($con, $get_products);

                                        $row_products = mysqli_fetch_array($run_products);

                                        $product_title = $row_products['product_title'];

                                        $i++;

                                    ?>

                                        <tr>

                                            <td><?php echo $i; ?></td>

                                            <td>
                                                <?php

                                                $get_customer = "select * from customers where customer_id='$c_id'";

                                                $run_customer = mysqli_query($con, $get_customer);

                                                $row_customer = mysqli_fetch_array($run_customer);

                                                $customer_email = $row_customer['customer_email'];

                                                echo $customer_email;

                                                ?>
                                            </td>

                                            <td bgcolor="orange"><?php echo $invoice_no; ?></td>

                                            <td><?php echo $product_title; ?></td>

                                            <td><?php echo $qty; ?></td>

                                            <td><?php echo $size; ?></td>

                                            <td>
                                                <?php

                                                $get_customer_order = "SELECT * FROM konsumen_orders WHERE order_id='$order_id'";

                                                $run_customer_order = mysqli_query($con, $get_customer_order);

                                                $row_customer_order = mysqli_fetch_array($run_customer_order);

                                                $order_date = $row_customer_order['order_date'];

                                                $due_amount = $row_customer_order['due_amount'];

                                                echo $order_date;

                                                ?>
                                            </td>

                                            <td>$<?php echo $due_amount; ?></td>
                                            <td>
                                                <?php
                                                if ($order_status == 'pending') {
                                                    echo $order_status = '<div style="color:red;">Pending</div>';
                                                } else {
                                                    echo $order_status = 'Completed';
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <a href="index.php?order_delete=<?php echo $order_id; ?>">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody><!-- tbody Ends -->
                            </table><!-- table table-bordered table-hover table-striped Ends -->
                        </div><!-- table-responsive Ends -->
                    </div><!-- panel-body Ends -->
                </div><!-- panel panel-default Ends -->
            </div><!-- col-lg-12 Ends -->
        </div><!-- 2 row Ends -->
    <?php } ?>
    <?php include "include_admin/banner.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    </body>

    </html>