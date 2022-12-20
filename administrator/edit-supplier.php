<?php
session_start();
include 'include_admin/db.php';
if ($_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>';
}

$supplier = mysqli_query($conn, "SELECT * FROM tb_supplier WHERE Idsupplier = '" . $_GET['id'] . "' ");
if (mysqli_num_rows($supplier) == 0) {
    echo '<script>window.location="datasupplier.php"</script>';
}
$s = mysqli_fetch_object($supplier);
?>
<!DOCTYPE html>
<html>

<?php include "include_admin/header.php" ?>

<body>
    <?php include "include_admin/navbar.php" ?>

    <div class="section">
        <div class="container">
            <h3>Edit Data Supplier</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Supplier" class="input-control" value="<?php echo $s->NamaSupplier ?>" required>
                    <input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $s->Alamat ?>" required>
                    <input type="text" name="kontak" placeholder="Kontak" class="input-control" value="<?php echo $s->Kontak ?>" required>
                    <input type="text" name="produk" placeholder="Produk" class="input-control" value="<?php echo $s->Produk ?>" required>
                    <input type="submit" name="submit" value="Submit" class="btnn">
                </form>
                <?php
                if (isset($_POST['submit'])) {

                    $nama = ucwords($_POST['nama']);
                    $alamat = ucwords($_POST['alamat']);
                    $kontak = ucwords($_POST['kontak']);
                    $produk = ucwords($_POST['produk']);

                    $update = mysqli_query($conn, "UPDATE tb_supplier SET 
												NamaSupplier = '" . $nama . "',
                                                Alamat = '" . $alamat . "',
                                                Kontak = '" . $kontak . "',
                                                Produk = '" . $produk . "'
												WHERE Idsupplier = '" . $s->Idsupplier . "' ");

                    if ($update) {
                        echo '<script>alert("Edit data berhasil")</script>';
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