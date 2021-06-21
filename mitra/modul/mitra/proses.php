<?php
 if(isset($_POST['ubah'])){
	$temp = $_FILES['foto']['tmp_name'];
	$name = $_FILES['foto']['name'];
	$size = $_FILES['foto']['size'];
	$type = $_FILES['foto']['type'];
	$folder = "../foto/";
	$name=$_POST['nik'].$_FILES['foto']['name'];
	move_uploaded_file($temp, $folder . $name);

//Proses penambahan index
	$foto=$name;
	$status=ceklulus($_POST['umur'],$_POST['pendidikan'],$_POST['pekerjaan'],$_POST['gadget']);
//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_mitra  SET 
		nik=?,
		nama=?,
		alamat=?,
		kecamatan=?,
		jk=?,
		notelepon=?,
		umur=?,
		pendidikan=?,
		jurusan=?,
		pekerjaan=?,
		gadget=?,
		pengalaman=?,
		kendaraan=?,
		rekening=?,
		idrekrutmen=?,
		idkecamatan=?,
		foto=?,
		status=?
		where idmitra=?");

	$stmt->bind_param("sssssssssssssssssss", 
		$_POST['nik'],
		$_POST['nama'],
		$_POST['alamat'],
		$_POST['kecamatan'],
		$_POST['jk'],
		$_POST['notelepon'],
		$_POST['umur'],
		$_POST['pendidikan'],
		$_POST['jurusan'],
		$_POST['pekerjaan'],
		$_POST['gadget'],
		$_POST['pengalaman'],
		$_POST['kendaraan'],
		$_POST['rekening'],
		$_POST['idrekrutmen'],
		$_POST['idkecamatan'],
		$foto,
		$status,
		$_POST['idmitra']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data mitra berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=mitra/data';</script>";	
	} else {
		echo "<script>alert('Data mitra Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_mitra where idmitra=?");
	$stmt->bind_param("s",$_GET['hapus']); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data mitra Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=mitra/data';</script>";	
	} else {
		echo "<script>alert('Data mitra Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}


function ceklulus($umur,$pendidikan,$pekerjaan,$gadget){
	$status="Lulus";

	if($umur<=17):
		$status="Tidak Lulus";
	endif;

	if($umur>=51):
		$status="Tidak Lulus";
	endif;

	if($pendidikan=='SMP'):
		$status="Tidak Lulus";
	endif;

	if($pekerjaan=='PNS'):
		$status="Tidak Lulus";
	endif;

	if($pekerjaan=='Mahasiswa'):
		$status="Tidak Lulus";
	endif;

	if($gadget=='Mahasiswa'):
		$status="Tidak ada";
	endif;

	return $status;
	
}

?>