<?php
if(isset($_POST['tambah'])){	
//Proses penambahan index
	$stmt = $mysqli->prepare("INSERT INTO tb_kriteria 
		(namakriteria,jenis,max) 
		VALUES (?,?,?)");

	$stmt->bind_param("sss", 
		$_POST['namakriteria'],
		$_POST['jenis'],
		$_POST['max']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data kriteria berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=kriteria/data';</script>";	
	} else {
		echo "<script>alert('Data kriteria Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){

//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_kriteria  SET 
		namakriteria=?,
		jenis=?,
		max=?
		where idkriteria=?");
	$stmt->bind_param("ssss",
		$_POST['namakriteria'],
		$_POST['jenis'],
		$_POST['max'],
		$_POST['idkriteria']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data kriteria berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=kriteria/data';</script>";	
	} else {
		echo "<script>alert('Data kriteria Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_kriteria where idkriteria=?");
	$stmt->bind_param("s",$_GET['hapus']); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data kriteria Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=kriteria/data';</script>";	
	} else {
		echo "<script>alert('Data kriteria Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>