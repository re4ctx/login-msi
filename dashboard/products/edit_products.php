<?php
include '../template/header.php';
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Produk</h1>
</div>
<?php
include '../../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from produk where id='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
    <form action="update_products.php" method="post">
    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="nama" value="<?php echo $d['produk']; ?>" placeholder="Masukkan Nama Produk">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Harga Beli Produk</label>
            <input type="number" class="form-control" id="formGroupExampleInput" name="harga_beli" value="<?php echo $d['harga_beli']; ?>" placeholder="Masukkan Harga Produk">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Harga Jual Produk</label>
            <input type="number" class="form-control" id="formGroupExampleInput" name="harga_jual" value="<?php echo $d['harga_jual']; ?>" placeholder="Masukkan Harga Produk">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Jumlah Produk</label>
            <input type="number" class="form-control" id="formGroupExampleInput" name="jumlah" value="<?php echo $d['jumlah']; ?>" placeholder="Masukkan Jumlah Produk">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Edit Produk</button>
        </div>
    </form>
<?php
}
?>

<?php
include '../template/footer.php';
?>