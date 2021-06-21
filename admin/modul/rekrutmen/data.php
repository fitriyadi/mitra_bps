<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Rekrutmen</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Rekrutmen</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Jenis Rekrutemen</th>
								<th>Status</th>
								<th>Tanggal</th>
								<th>Keterangan</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no=0;
							$sql="SELECT * FROM tb_rekrutmen";
							foreach (_dataGetAll($mysqli,$sql) as $key => $value) :
								extract($value);
								?>
								<tr>
									<td><?=$no+=1?></td>
									<td><?=$namarekrutmen?></td>
									<td><?=label($status)?></td>
									<td><?=tgl_indo($tanggal)?></td>
									<td><?=substr(strip_tags($keterangan),0,40)." ...";?></td>
									<td>
										<?=_edit("?hal=rekrutmen/olah&id=$idrekrutmen")?>
										<?=_hapus("?hal=rekrutmen/proses&hapus=$idrekrutmen")?>
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
	switch ($jenis) {
		case 'Aktif':
		return "<span class='badge badge-success'>Aktif</span>";
		break;

		case 'Non':
		return "<span class='badge badge-secondary'>Non</span>";
		break;

		default:
		return "";
		break;
	}

}
?>
