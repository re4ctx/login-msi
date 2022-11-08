<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from akun where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['role']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:dashboard/index.php");
 
	// cek jika user login sebagai user
	}else if($data['role']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "user";
		// alihkan ke halaman dashboard user
		header("location:dashboard/index.php");
 
	// cek jika user login sebagai manager
	}else if($data['role']=="manager"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "manager";
		// alihkan ke halaman dashboard manager
		header("location:dashboard/manager/index.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>