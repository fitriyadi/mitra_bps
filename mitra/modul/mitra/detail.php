<?php
//error_reporting(0);
$username="";
if(isset($_SESSION['mitra']))
	extract(_dataGetId($mysqli,"tb_mitra join tb_rekrutmen using(idrekrutmen) join tb_kecamatan using(idkecamatan)","idmitra='".$_SESSION['mitra']."'"));

?>
<div class="page-content">
	<div class="profile-page tx-13">
		<div class="row">
			<div class="col-12 grid-margin">
				<div class="profile-header">
					<div class="cover">
						<div class="gray-shade"></div>
						<div class="cover-body d-flex justify-content-between align-items-center">
							<div>
								<img class="profile-pic" src="../foto/<?=$foto?>" alt="profile">
								<span class="profile-name"><?=$nama?></span>
							</div>
							<div class="d-none d-md-block">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row profile-body">
			<!-- left wrapper start -->
			<div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
				<div class="card rounded">
					<div class="card-body">
						<div class="d-flex align-items-center justify-content-between mb-2">
							<h6 class="card-title mb-0">Biodata</h6>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">Nik</label>
							<p class="text-muted"><?=$nik?></p>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">Nama</label>
							<p class="text-muted"><?=$nama?></p>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">No Telepon</label>
							<p class="text-muted"><?=$notelepon?></p>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">JK</label>
							<p class="text-muted"><?=$jk?></p>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">Alamat</label>
							<p class="text-muted"><?=$alamat?></p>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">Kecamatan</label>
							<p class="text-muted"><?=$kecamatan?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
				<div class="card rounded">
					<div class="card-body">
						<div class="d-flex align-items-center justify-content-between mb-2">
							<h6 class="card-title mb-0">Lainnya</h6>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">Umur</label>
							<p class="text-muted"><?=$umur." Tahun"?></p>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">Pendidikan</label>
							<p class="text-muted"><?=$pendidikan?></p>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">Jurusan</label>
							<p class="text-muted"><?=$jurusan?></p>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">Pekerjaan</label>
							<p class="text-muted"><?=$pekerjaan?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
				<div class="card rounded">
					<div class="card-body">
						<div class="d-flex align-items-center justify-content-between mb-2">
							<h6 class="card-title mb-0">Lainnya</h6>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">Kepemilikan Gadget</label>
							<p class="text-muted"><?=$gadget?></p>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">Pengalaman Survey</label>
							<p class="text-muted"><?=$pengalaman?></p>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">Kepemilikan Kendaraan</label>
							<p class="text-muted"><?=$kendaraan?></p>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">Rekening BRI</label>
							<p class="text-muted"><?=$rekening?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
				<div class="card rounded">
					<div class="card-body">
						<div class="d-flex align-items-center justify-content-between mb-2">
							<h6 class="card-title mb-0">Informasi Formasi</h6>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">Rekrutmen</label>
							<p class="text-muted"><?=$namarekrutmen?></p>
						</div>
						<div class="mt-3">
							<label class="tx-11 font-weight-bold mb-0 text-uppercase">Penempatan Kecamatan</label>
							<p class="text-muted"><?=$namakecamatan?></p>
						</div>
					</div>
				</div>
			</div>
			<!-- right wrapper end -->
		</div>
	</div>

	<div class="form-group row ">
		<div class="col-sm-9 offset-0">
			<a class="btn btn-primary" href="?hal=mitra/data">Kembali</a>
		</div>
	</div>
</div>
