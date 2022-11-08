<?php
include 'template/header.php';
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Produk Toko <?php echo $_SESSION['toko']; ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="products/input_products.php">
            <button type="button" class="btn btn-sm btn-outline-secondary">
                <span data-feather="plus" class="align-text-bottom"></span>
                Tambah Data
            </button>
        </a>
    </div>
</div>

<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $toko = $_SESSION['toko'];
        include '../koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from produk where toko='$toko'");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['produk']; ?></td>
                <td><?php echo $d['harga_jual']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td>
                    <a href="products/edit_products.php?id=<?php echo $d['id']; ?>" class="btn btn-outline-primary">Edit</a>
                    <a href="products/delete_products.php?id=<?php echo $d['id']; ?>" class="btn btn-outline-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
include 'template/footer.php';
?>