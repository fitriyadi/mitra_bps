<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Kriteria</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Kriteria
					<?=_daftar("?hal=kriteria/olah")?>
					
				</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Kriteria</th>
								<th>Jenis</th>
								<th>Maksimum</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no=0;
							$sql="SELECT * FROM tb_kriteria";
							foreach (_dataGetAll($mysqli,$sql) as $key => $value) :
								extract($value);
								?>
								<tr>
									<td><?=$no+=1?></td>
									<td><?=$namakriteria?></td>
									<td><?=label($jenis)?></td>
									<td><?=$max?></td>
									<td>
										<?=_edit("?hal=kriteria/olah&id=$idkriteria")?>
										<?=_hapus("?hal=kriteria/proses&hapus=$idkriteria")?>
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
		case 'Form':

		case 'Seleksi':
		return "<span class='badge badge-success'>Seleksi</span>";
		break;

		case 'Performa':
		return "<span class='badge badge-secondary'>Performa</span>";
		break;

		default:
		return "";
		break;
	}

}
?>
