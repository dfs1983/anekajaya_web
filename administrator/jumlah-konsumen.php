<?php
session_start();
include 'include_admin/db.php';
if ($_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>';
}

?>
<?php include "include_admin/header.php" ?>

<body>
    <?php include "include_admin/navbar.php" ?>

    <div class="section">
        <div class="container">
            <?php
            $getjmlkonsumen = mysqli_query($conn, "select * from tb_konsumen");
            $countjmlkonsumen = mysqli_num_rows($getjmlkonsumen);
            ?>
            <h3>Jumlah Konsumen</h3>

            <h6>Jumlah Konsumen : <?= $countjmlkonsumen; ?></h6>
            <div class="box">
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th>Id Konsumen</th>
                            <th>Nama Konsumen</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>No. Telepom</th>
                            <th>Email</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $konsumen = mysqli_query($conn, "SELECT * FROM tb_konsumen");
                        if (mysqli_num_rows($konsumen) > 0) {
                            while ($row = mysqli_fetch_array($konsumen)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['konsumen_id'] ?></td>
                                    <td><?php echo $row['konsumen_name'] ?></td>
                                    <td><?php echo $row['username'] ?></td>
                                    <td><?php echo $row['password'] ?></td>
                                    <td><?php echo $row['konsumen_telp'] ?></td>
                                    <td><?php echo $row['konsumen_email'] ?></td>
                                    <td><?php echo $row['konsumen_address'] ?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="7">Tidak ada data</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include "include_admin/banner.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>