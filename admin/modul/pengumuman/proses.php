<?php
print_r($_POST);

if(isset($_POST['tambah'])){
	//Proses penambahan index
	$stmt = $mysqli->prepare("INSERT INTO tb_pengumuman 
		(judul,tanggal,status,keterangan) 
		VALUES (?,?,?,?)");

	$stmt->bind_param("ssss", 
		$_POST['judul'],
		$_POST['tanggal'],
		$_POST['status'],
		$_POST['keterangan']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data pengumuman berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=pengumuman/data';</script>";	
	} else {
		echo "<script>alert('Data pengumuman Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){

//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_pengumuman  SET 
		judul=?,
		tanggal=?,
		status=?,
		keterangan=?
		where idpengumuman=?");
	$stmt->bind_param("sssss",
		$_POST['judul'],
		$_POST['tanggal'],
		$_POST['status'],
		$_POST['keterangan'],
		$_POST['idpengumuman']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data pengumuman berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=pengumuman/data';</script>";	
	} else {
		echo "<script>alert('Data pengumuman Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_pengumuman where idpengumuman=?");
	$stmt->bind_param("s",$_GET['hapus']); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data pengumuman Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=pengumuman/data';</script>";	
	} else {
		echo "<script>alert('Data pengumuman Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>