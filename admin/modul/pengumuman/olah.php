<?php
$judul="";
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_pengumuman","idpengumuman='".$_GET['id']."'"));

?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=pengumuman/data">Data pengumuman</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data pengumuman</h6>

				<form class="forms-sample" action="?hal=pengumuman/proses" method="POST">
					
					<input type="hidden" class="form-control" name="idpengumuman" value="<?=@$idpengumuman?>">
					
					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Judul pengumuman</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="judul" value="<?=@$judul?>" placeholder="Inputkan Nama pengumuman" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Tanggal</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" name="tanggal" value="<?=@$tanggal?>" placeholder="Inputkan Password" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Status</label>
						<div class="col-sm-9">
							<select class="form-control" name="status">
								<option value="Aktif">Aktif</option>
								<option value="Non">Non</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-12">
							<textarea class="form-control" id="tinymceExample" rows="10" name="keterangan"><?=@$keterangan?></textarea>
						</div>
					</div>

					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=pengumuman/data">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


