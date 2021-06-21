<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Mitra Sudah Dinilai Peforma</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Mitra Sudah Performa</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nik</th>
								<th>Nama</th>
								<th>JK</th>
								<th>No Telepon</th>
								<th>Rekrutmen</th>
								<th>Nilai</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no=0;
							$sql="SELECT * FROM tb_mitra join tb_rekrutmen using(idrekrutmen) where tb_rekrutmen.status='aktif' and idmitra in(select idmitra from tb_mitra_performa) and idmitra in(select idmitra from tb_mitra_kriteria) and tb_mitra.status='Lulus'";
							foreach (_dataGetAll($mysqli,$sql) as $key => $value) :
								extract($value);

								$nilai=_dataCustom($mysqli,"select sum(nilai) from tb_mitra_performa where idmitra='$idmitra'");
								?>
								<tr>
									<td><?=$no+=1?></td>
									<td><?=$nik?></td>
									<td><?=$nama?></td>
									<td><?=$jk?></td>
									<td><?=$notelepon?></td>
									<td><?=$namarekrutmen?></td>
									<td><?=$nilai?></td>
									<td>
										<?=_detail("?hal=performa/nilai&id=$idmitra")?>
									</td>
								</tr>
							<?php endforeach; ?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
function label($jenis){
	if(isset($jenis)):
		return "<span class='badge badge-success'>Onlines</span>";
	else:
		return "<span class='badge badge-secondary'>Offline</span>";
	endif;

}
?>