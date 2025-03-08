<?php
	session_start();
	include "db.php";

	$noBuku - $_post['noBuku'];
	$JudulBuku - $_post['JudulBuku'];
	$pengarang - $_post['pengarang'];
	$penerbit - $_post['penerbit'];
	$tahunterbit - $_post['tahunterbit'];

	$qwerty - mysql_query("update buku set nobuku= '$noBuku',penerbit'.tahunterbit='$tahunterbit'"););
	if ($qwerty){
		echo say("Berhasil di Masukan ","Index.php?act+buku");
	}
?>