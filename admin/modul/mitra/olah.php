<?php
$username="";
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_mitra","idmitra='".$_GET['id']."'"));

?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=mitra/data">Data Mitra Statistik</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data mitra</h6>

				<form class="forms-sample" action="?hal=mitra/proses" method="POST" enctype="multipart/form-data">
					
					<input type="hidden" class="form-control" name="idmitra" value="<?=@$idmitra?>">
					
					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nik</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="nik" value="<?=@$nik?>" placeholder="Inputkan NIK" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="nama" value="<?=@$nama?>" placeholder="Inputkan Nama" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Alamat</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="alamat" value="<?=@$alamat?>" placeholder="Inputkan Alamat" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Kecamatan</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="kecamatan" value="<?=@$kecamatan?>" placeholder="Inputkan kecamatan" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">JK</label>
						<div class="col-sm-9">
							<select class="form-control" name="jk" required="">
								<option value="L">L</option>
								<option value="P">P</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">No Telepon</label>
						<div class="col-sm-9">
							<input type="number" class="form-control" name="notelepon" value="<?=@$notelepon?>" placeholder="Inputkan No Telepon" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Umur</label>
						<div class="col-sm-9">
							<input type="number" class="form-control" name="umur" value="<?=@$umur?>" placeholder="Inputkan Umur" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Pendidikan(Jika S1 isikan jurusan)</label>
						<div class="col-sm-9">
							<select class="form-control" name="pendidikan" required="">
								<option value="S1">S1 Keatas</option>
								<option value="SMA">SMA</option>
								<option value="SMP">SMP kebawah</option>
							</select>

							<input type="text" class="form-control" name="jurusan" value="<?=@$jurusan?>" placeholder="Inputkan Jurusan Untuk S1 atau Lebih">
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Pekerjaan</label>
						<div class="col-sm-9">
							<select class="form-control" name="pekerjaan" required="">
								<option value="PNS">PNS</option>
								<option value="Swasta">Swasta</option>
								<option value="Mahasiswa">Mahasiswa</option>
								<option value="Lainnya">Lainnya</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Kepemilikan Gadget</label>
						<div class="col-sm-9">
							<select class="form-control" name="gadget" required="">
								<option value="Lapton dan Smartphone">Lapton dan Smartphone</option>
								<option value="Laptop">Laptop</option>
								<option value="Smartphone">Smartphone</option>
								<option value="Tidak Ada">Tidak Ada</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Pengalaman Survey</label>
						<div class="col-sm-9">
							<select class="form-control" name="pengalaman" required="">
								<option value="Survei BPS">Survei BPS</option>
								<option value="Surveri Non BPS">Surveri Non BPS</option>
								<option value="Tidak Ada">Tidak Ada</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Kepemilikan Kendaraan</label>
						<div class="col-sm-9">
							<select class="form-control" name="kendaraan" required="">
								<option value="Ada">Ada</option>
								<option value="Tidak Ada">Tidak Ada</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Rekening BRI</label>
						<div class="col-sm-9">
							<select class="form-control" name="rekening" required="">
								<option value="Ada">Ada</option>
								<option value="Tidak Ada">Tidak Ada</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Rekrutmen</label>
						<div class="col-sm-9">
							<select class="form-control" name="idrekrutmen" required="">
								<?php
								$no=0;
								$sql="SELECT * FROM tb_rekrutmen where status='aktif'";
								foreach (_dataGetAll($mysqli,$sql) as $key => $value):
									extract($value);
									?>
									<option value="<?=$idrekrutmen?>"><?=$namarekrutmen?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Kecamatan Tugas</label>
						<div class="col-sm-9">
							<select class="form-control" name="idkecamatan" required="">
								<?php
								$no=0;
								$sql="SELECT * FROM tb_kecamatan";
								foreach (_dataGetAll($mysqli,$sql) as $key => $value):
									extract($value);
									?>
									<option value="<?=$idkecamatan?>"><?=$namakecamatan?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Foto (Format Jpeg/Jpg)</label>
						<div class="col-sm-9">
							<input type="file" class="form-control" name="foto" value="<?=@$foto?>" placeholder="Inputkan Foto" required>
						</div>
					</div>

					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=mitra/data">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>