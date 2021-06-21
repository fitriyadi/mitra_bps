<?php
if(isset($_POST['tambah'])){
	$temp = $_FILES['link']['tmp_name'];
	$name = $_FILES['link']['name'];
	$size = $_FILES['link']['size'];
	$type = $_FILES['link']['type'];
	$folder = "../form/";
	move_uploaded_file($temp, $folder . $name);

	//Proses penambahan index
	$stmt = $mysqli->prepare("INSERT INTO tb_form 
		(namaform,link) 
		VALUES (?,?)");

	$stmt->bind_param("ss", 
		$_POST['namaform'],
		$name);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data Form berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=form/data';</script>";	
	} else {
		echo "<script>alert('Data Form Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){
	$temp = $_FILES['link']['tmp_name'];
	$name = $_FILES['link']['name'];
	$size = $_FILES['link']['size'];
	$type = $_FILES['link']['type'];
	$folder = "../form/";
	move_uploaded_file($temp, $folder . $name);

//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_form  SET 
		namaform=?,
		link=?
		where idForm=?");
	$stmt->bind_param("sss",
		$_POST['namaform'],
		$name,
		$_POST['idform']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data Form berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=form/data';</script>";	
	} else {
		echo "<script>alert('Data Form Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_form where idform=?");
	$stmt->bind_param("s",$_GET['hapus']); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data Form Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=form/data';</script>";	
	} else {
		echo "<script>alert('Data Form Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>