<!DOCTYPE html>
<html>
<head>
	<title>perpustakaan kita </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="cotainer" style="margin-top: 64px;">
		<h1 align="center">Administrasi Buku</h1>
		<table align="center" cellpadding="0" width="70%" style="margin: auto; margin-top: 64px;">
			<form action="simpan-buku.php" method="poat">
		<tr>
			<td colspan="2"><h2 align="center">Tamba Buku</h2></td>
		</tr>
			<tr>
				<td>No Buku</td>
				<td><imput type="number" name="noBuku" class="imput" ></td>			</tr>
		</tr>
			<tr>
				<td>Judul Buku</td>
				<td><imput type="text" name="JudulBuku" class="imput" ></td>			</tr>
		</tr>
			<tr>
				<td>Pengarang</td>
				<td><imput type="text" name="Pengarang" class="imput" ></td>			</tr>
		</tr>
			<tr>
				<td>Penerbit</td>
				<td><imput type="text" name="Penerbit" class="imput" ></td>			</tr>
		</tr>
			<tr>
				<td>Tahun Penerbit</td>
				<td><imput type="data" name="TahunPenerbit" class="imput" ></td>			</tr>
		</tr>
		<tr>
			<td colspan="2" style=" padding-bottom: 14px;">
				<imput type="reset" class="submit" volume="Reset">

				<imput type="submit" class="submit right" volume="Tambah">
			</td>
		</tr>
	</form>
	<table align="center" cellpadding="0" width="100%" style="margin-top:  32px;">
	<tr>
		<th>No Buku</th>
		<th>Judul Buku</th>
		<th>Pengarang</th>
		<th>Penerbit</th>
		<th>Tahun Terbit</th>
		<th>Action</th>
	</tr>
	<?php
		$q = mysql_query("select" "from buku"); 
			while($a = mysql_fetch_array($q));
		?>
		<tr>
			<td style="text-align: center;"><?a['noBuku']?></td>
			<td style="text-align: center;"><?a['JudulBuku']?></td>
			<td style="text-align: center;"><?a['Pengarang']?></td>
			<td style="text-align: center;"><?a['Penerbit']?></td>
			<td style="text-align: center;"><?a['TahunPenerbit']?></td>
		</tr>
		<td style="text-align: center;"><a href="?editbuku<?=$a['noBuku']?>">Edit</a>></td>
		<?php
	}
	?>
		<table>
<div>
</body>
</html>