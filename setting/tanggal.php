<?php

function umur($tanggal){
	$tanggal = new DateTime($tanggal);
	$today = new DateTime('today');
	$y = $today->diff($tanggal)->y;

	return $y;

}

function tgl_indo($tgl){
	$tgl		= date_create($tgl);
	$tanggal	= date_format($tgl,"d-m-Y");
	return $tanggal;		 
}


?>