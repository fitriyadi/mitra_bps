<?php
if(isset($_POST['tambah'])){	
//Proses penambahan index


	$idmitra=$_POST['idmitra'];
	mysqli_query($mysqli,"delete from tb_mitra_kriteria where idmitra='$idmitra'");


	foreach ($_POST['nilai'] as $key => $value) {
		$stmt = $mysqli->prepare("INSERT INTO tb_mitra_kriteria 
			(idmitra,idkriteria,nilai) 
			VALUES (?,?,?)");

		$stmt->bind_param("sss", 
			$idmitra,
			$key,
			$value);	

		$stmt->execute();
	}

	echo "<script>alert('Data Nilai Seleksi berhasil disimpan')</script>";
	echo "<script>window.location='index.php?hal=wawancara/sudah';</script>";	

}
?>