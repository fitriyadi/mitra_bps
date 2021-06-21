<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Mitra Sudah Diwawancara</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Mitra Sudah Dinilai</h6>
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
								<th>Daftar Via</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no=0;
							$sql="SELECT * FROM tb_mitra join tb_rekrutmen using(idrekrutmen) where tb_rekrutmen.status='aktif' and idmitra in(select idmitra from tb_mitra_kriteria)";
							foreach (_dataGetAll($mysqli,$sql) as $key => $value) :
								extract($value);
								?>
								<tr>
									<td><?=$no+=1?></td>
									<td><?=$nik?></td>
									<td><?=$nama?></td>
									<td><?=$jk?></td>
									<td><?=$notelepon?></td>
									<td><?=$namarekrutmen?></td>
									<td><?=label($email)?></td>
									<td>
										<?=_detail("?hal=wawancara/nilai&id=$idmitra")?>
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