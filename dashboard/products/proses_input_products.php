<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$jumlah = $_POST['jumlah'];
$toko = $_POST['toko'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into produk values('','$nama','$harga_beli','$harga_jual','$jumlah', '$toko')");
 
// mengalihkan halaman kembali ke index.php
header("location:../products.php");
 
?>