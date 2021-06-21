<?php
$namakriteria="";
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_kriteria","idkriteria='".$_GET['id']."'"));

?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=kriteria/data">Data Kriteria</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data Kriteria</h6>

				<form class="forms-sample" action="?hal=kriteria/proses" method="POST">
					
					<input type="hidden" class="form-control" name="idkriteria" value="<?=@$idkriteria?>">
					
					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama Kriteria</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="namakriteria" value="<?=@$namakriteria?>" placeholder="Inputkan Nama Kriteria" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Jenis</label>
						<div class="col-sm-9">
							<select class="form-control" name="jenis">
								<option value="Seleksi">Seleksi</option>
								<option value="Performa">Performa</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Maksimum</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="max" value="<?=@$max?>" placeholder="Inputkan Nilai Maksimum" required>
						</div>
					</div>

					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=kriteria/data">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>