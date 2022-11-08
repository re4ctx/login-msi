<?php
include '../template/header.php';
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Tambah Produk</h1>
</div>

<form action="proses_input_products.php" method="post">
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Nama Produk</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="nama" placeholder="Masukkan Nama Produk">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Harga Beli</label>
    <input type="number" class="form-control" id="formGroupExampleInput" name="harga_beli" placeholder="Masukkan Harga Beli">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Harga Jual</label>
    <input type="number" class="form-control" id="formGroupExampleInput" name="harga_jual" placeholder="Masukkan Harga Jual">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Jumlah Produk</label>
    <input type="number" class="form-control" id="formGroupExampleInput" name="jumlah" placeholder="Masukkan Jumlah Produk">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Toko</label>
    <input type="number" class="form-control" id="formGroupExampleInput" name="toko" value="<?php echo $_SESSION['toko']; ?>" readonly>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Tambah Data</button>
  </div>
</form>


<?php
include '../template/footer.php';
?>