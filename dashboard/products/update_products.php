<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$jumlah = $_POST['jumlah'];
 
// update data ke database
mysqli_query($koneksi,"update produk set produk='$nama', harga_beli='$harga_beli', harga_jual='$harga_jual', jumlah='$jumlah' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../products.php");
 
?>