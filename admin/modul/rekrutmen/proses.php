<?php
if(isset($_POST['tambah'])){
	//Proses penambahan index
	$stmt = $mysqli->prepare("INSERT INTO tb_rekrutmen 
		(namarekrutmen,tanggal,status,keterangan) 
		VALUES (?,?,?,?)");

	$stmt->bind_param("ssss", 
		$_POST['namarekrutmen'],
		$_POST['tanggal'],
		$_POST['status'],
		$_POST['keterangan']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data rekrutmen berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=rekrutmen/data';</script>";	
	} else {
		echo "<script>alert('Data rekrutmen Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){

//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_rekrutmen  SET 
		namarekrutmen=?,
		tanggal=?,
		status=?,
		keterangan=?
		where idrekrutmen=?");
	$stmt->bind_param("sssss",
		$_POST['namarekrutmen'],
		$_POST['tanggal'],
		$_POST['status'],
		$_POST['keterangan'],
		$_POST['idrekrutmen']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data rekrutmen berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=rekrutmen/data';</script>";	
	} else {
		echo "<script>alert('Data rekrutmen Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_rekrutmen where idrekrutmen=?");
	$stmt->bind_param("s",$_GET['hapus']); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data rekrutmen Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=rekrutmen/data';</script>";	
	} else {
		echo "<script>alert('Data rekrutmen Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>