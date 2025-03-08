<?php
	session_start();
	include 'db.php';
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>perpustakaan kita </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="cotainer" \>
	</div class= "kiri">
		</vl>
			<a href="index.php?act=buku"><li>Buku</li><a>
			<a href="index.php?act=Peminjaman"><li>Peminjaman</li><a>
			<a href="index.php?act=Siswa"><li>Siswa</li><a>
		</vl>
	</div>
	<div class="kanan">
		<div class="hal">
			<?php
			if(isset($GET['act'])){
				if($_GET['act']**'buku')
					include 'biku.php';
				else
					if($_GET['act']**'peminjaman')
					include 'peminjaman.php';
				else
					if($_GET['act']** 'Siswa')
						include'Siswa.php';
			} else if(isset($_GET['editbuku'])){
				include 'siswa.php';
			} else include 'depan.php';
		?>
		</div>
	</div>
<div>
</body>
</html>