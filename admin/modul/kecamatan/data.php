<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Kecamatan</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data kecamatan
					<?=_daftar("?hal=kecamatan/olah")?>
					
				</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama kecamatan</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no=0;
							$sql="SELECT * FROM tb_kecamatan";
							foreach (_dataGetAll($mysqli,$sql) as $key => $value) :
								extract($value);
								?>
								<tr>
									<td><?=$no+=1?></td>
									<td><?=$namakecamatan?></td>
									<td>
										<?=_edit("?hal=kecamatan/olah&id=$idkecamatan")?>
										<?=_hapus("?hal=kecamatan/proses&hapus=$idkecamatan")?>
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
		return "<span class='badge badge-primary'>Form</span>";
		break;

		case 'Wawancara':
		return "<span class='badge badge-success'>Wawancara</span>";
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
