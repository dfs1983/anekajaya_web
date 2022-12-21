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
            <h3>Tambah Data Penjualan</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="tanggal" placeholder="Tanggal Penjualan" class="input-control" required>
                    <input type="text" name="nm_produk" placeholder="Nama Produk" class="input-control" required>
                    <input type="text" name="harga_produk" placeholder="Harga" class="input-control" required>
                    <input type="submit" name="submit" value="Submit" class="btnn">
                </form>
                <?php
                if (isset($_POST['submit'])) {

                    $tanggal = ucwords($_POST['tanggal']);
                    $nm_produk = ucwords($_POST['nm_produk']);
                    $harga_produk = ucwords($_POST['harga_produk']);

                    $insert = mysqli_query($conn, "INSERT INTO penjualan VALUES (
											null,
											'" . $tanggal . "',
                                            '" . $nm_produk . "',
                                            '" . $harga_produk . "')");
                    if ($insert) {
                        echo '<script>alert("Tambah data berhasil")</script>';
                        echo '<script>window.location="data-penjualan.php"</script>';
                    } else {
                        echo 'gagal ' . mysqli_error($conn);
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <?php include "include_admin/banner.php" ?>
</body>

</html>