<div class="cotainer" style="margin-top: 64px;">
		<table align="center" cellpadding="0" width="70%" style="margin: auto; margin-top: 64px;">
			<form action="simpan-edit-buku.php" method="poat">
		<tr>
			<td colspan="2"><h2 align="center">Edit Buku</h2></td>
		</tr>
		<?php
			$q - mysql_query("select form buku ");
			$a - mysql_fetch_array($q);
			?>
			<tr>
				<td>No Buku</td>
				<td><imput type="number" name="noBuku" class="imput" volume="<?= $a['noBuku']?>" ></td>			</tr>
		</tr>
			<tr>
				<td>Judul Buku</td>
				<td><imput type="text" name="JudulBuku" class="imput"
				volume="<?= $a['JudulBuku']?>"  ></td>			</tr>
		</tr>
			<tr>
				<td>Pengarang</td>
				<td><imput type="text" name="Pengarang" class="imput"
				volume="<?= $a['Pengarang']?>"  ></td>			</tr>
		</tr>
			<tr>
				<td>Penerbit</td>
				<td><imput type="text" name="Penerbit" class="imput"
				volume="<?= $a['penerbit']?>"  ></td>			</tr>
		</tr>
			<tr>
				<td>Tahun Penerbit</td>
				<td><imput type="data" name="TahunPenerbit" class="imput"
				volume="<?= $a['TahunPenerbit']?>"  ></td>			</tr>
		</tr>
		<tr>
			<td colspan="2" style=" padding-bottom: 14px;">
				<imput type="reset" class="submit" volume="Reset">

				<imput type="submit" class="submit right" volume="Selesai">
			</td>
		</tr>
	</form>
</table>
</div>
</