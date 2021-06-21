<?php

function _proses($link){
	echo "<a href='$link' class='btn btn-success btn-sm float-right'>Proses Sentimen</a>";
}

function _import($link){
	echo "<a href='$link' class='btn btn-primary btn-sm'>Import Data</a>";
}

function _edit($link){
	echo "<a href='$link' class='btn btn-secondary btn-sm'>Edit</a>";
}

function _detail($link){
	echo "<a href='$link' class='btn btn-primary btn-sm'>Detail</a>";
}

function _daftar($link){
	echo "<a href='$link' class='btn btn-primary btn-sm float-right'>Tambah</a>";
}

function _hapus($link){ ?>
	<a class="btn btn-danger btn-sm" href="<?=$link?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
<?php }


?>