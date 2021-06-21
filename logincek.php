<?php
session_start();
require_once 'setting/koneksi.php';
require_once 'setting/crud.php';
require_once 'setting/tanggal.php';

$user=$_POST['username'];
$pass=$_POST['password']; 

//Pengecekan ada data dalam login tidak
$sqladmin="Select idpengguna from tb_pengguna where username='$user' and password='$pass'";
$sqlmitra="Select idmitra from tb_mitra where email='$user' and password='$pass'";

if (_cekData($mysqli,$sqladmin)== true){
	//JIka data ditemukan
	$_SESSION['admin']=_dataCustom($mysqli,$sqladmin);
	echo "<script>alert('Anda login sebagai Admin')</script>";
	echo "<script>window.location='admin/index.php?hal=dashboard';</script>";

}else if(_cekData($mysqli,$sqlmitra)== true){
	//JIka data ditemukan
	$_SESSION['mitra']=_dataCustom($mysqli,$sqlmitra);
	echo "<script>alert('Anda login sebagai Mira')</script>";
	echo "<script>window.location='mitra/index.php?hal=dashboard';</script>";

}else{
		//Jika tidak ditemukan
	echo "<script>alert('Username atau password tidak terdaftar')</script>";
	echo "<script>window.location='login.php';</script>";
	
}

?>