<?php
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

if($_POST['pass']==$_POST['passulang']):

	$stmt = $mysqli->prepare("INSERT INTO tb_mitra
		(nama,email,password) 
		VALUES (?,?,?)");

	$stmt->bind_param("sss", 
		$_POST['nama'],
		$_POST['email'],
		$_POST['pass']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data mitra Berhasil Disimpan, silakan login sistem')</script>";
		echo "<script>window.location='../login.php';</script>";	
	} else {
		echo "<script>alert('Data mitra Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

else:
	echo "<script>alert('Password dan konfirmasi password harus sama')</script>";
	echo "<script>window.location='javascript:history.go(-1)';</script>";
endif;
?>