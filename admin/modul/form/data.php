<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Berkas</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Form Rekrutmen
					<?=_daftar("?hal=form/olah")?>
				</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Berkas</th>
								<th>Link</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no=0;
							$sql="SELECT * FROM tb_form";
							foreach (_dataGetAll($mysqli,$sql) as $key => $value) :
								extract($value);
								?>
								<tr>
									<td><?=$no+=1?></td>
									<td><?=$namaform?></td>
									<td><a href='../form/<?=$link?>' target="_blank"' class='btn btn-primary btn-sm'>Download</a></td>
									<td>
										<?=_edit("?hal=form/olah&id=$idform")?>
										<?=_hapus("?hal=form/proses&hapus=$idform")?>
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
