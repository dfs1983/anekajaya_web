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
            <h3>Catatan Penjualan</h3>
            <div class="box">
                <p><a href="tambah-penjualan.php">Tambah Data</a></p>
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width="60px">No</th>
                            <th>Tanggal Penjualan</th>
                            <th>Nama Produk/th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $penjualan = mysqli_query($conn, "SELECT * FROM penjualan ORDER BY id_penjualan DESC");
                        if (mysqli_num_rows($penjualan) > 0) {
                            while ($row = mysqli_fetch_array($penjualan)) {
                        ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row['tgl'] ?></td>
                                    <td><?php echo $row['product_name'] ?></td>
                                    <td><?php echo $row['product_price'] ?></td>
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