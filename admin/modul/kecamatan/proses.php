<?php
if(isset($_POST['tambah'])){	
//Proses penambahan index
	$stmt = $mysqli->prepare("INSERT INTO tb_kecamatan 
		(namakecamatan) 
		VALUES (?)");

	$stmt->bind_param("s", 
		$_POST['namakecamatan']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data kecamatan berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=kecamatan/data';</script>";	
	} else {
		echo "<script>alert('Data kecamatan Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){

//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_kecamatan  SET 
		namakecamatan=?
		where idkecamatan=?");
	$stmt->bind_param("ss",
		$_POST['namakecamatan'],
		$_POST['idkecamatan']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data kecamatan berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=kecamatan/data';</script>";	
	} else {
		echo "<script>alert('Data kecamatan Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_kecamatan where idkecamatan=?");
	$stmt->bind_param("s",$_GET['hapus']); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data kecamatan Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=kecamatan/data';</script>";	
	} else {
		echo "<script>alert('Data kecamatan Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>