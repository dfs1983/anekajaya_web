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
            <h3>Tambah Data Supplier</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Supplier" class="input-control" required>
                    <input type="text" name="alamat" placeholder="Alamat" class="input-control" required>
                    <input type="text" name="kontak" placeholder="Kontak" class="input-control" required>
                    <input type="text" name="produk" placeholder="Produk" class="input-control" required>
                    <input type="submit" name="submit" value="Submit" class="btnn">
                </form>
                <?php
                if (isset($_POST['submit'])) {

                    $nama = ucwords($_POST['nama']);
                    $alamat = ucwords($_POST['alamat']);
                    $kontak = ucwords($_POST['kontak']);
                    $produk = ucwords($_POST['produk']);

                    $insert = mysqli_query($conn, "INSERT INTO tb_supplier VALUES (
											null,
											'" . $nama . "',
                                            '" . $alamat . "',
                                            '" . $kontak . "',
                                            '" . $produk . "') ");
                    if ($insert) {
                        echo '<script>alert("Tambah data berhasil")</script>';
                        echo '<script>window.location="datasupplier.php"</script>';
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