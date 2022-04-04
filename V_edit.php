<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang</title>
</head>
<body>
	<h1>Edit Menu</h1>
	<?php foreach ($data_edit as $tes) {
		?>
		
		<form method="post" action="<?php echo base_url().'kedaiku/update' ?>">
			<table>
				<tr>
					<td><input type="hidden" name="id" value="<?php echo $tes->id ?>"></td>
				</tr>
				<tr>
					<td>Nama Produk</td><td><input type="text" name="nm_produk" value="<?php echo $tes->nm_produk ?>"></td>
				</tr>
				<tr>
					<td>Harga Juak</td><td><input type="text" name="hrg_jual" value="<?php echo $tes->hrg_jual ?>"></td>
				</tr>
				<tr>
					<td>Jumlah Beli</td><td><input type="text" name="jml_beli" value="<?php echo $tes->jml_beli ?>"></td>
				</tr>
				<tr>
					<td></td><td><input type="submit" value="Update" ></td>
				</tr>
			</table>
		</form>
		<?php
	}
	?>
</body>
</html>