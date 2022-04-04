<!DOCTYPE html>
<html>
<head>
	<title>KEDAIKU</title>
</head>
<body>
<h1>Tambah Menu</h1>
	<form method="post" action="<?php echo base_url().'kedai/tambah_act' ?>">
		<table>
			<tr>
				<td>Kode Menu</td><td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nama Produk</td><td><input type="text" name="nm_produk"></td>
			</tr>
			<tr>
				<td>Harga Jual</td><td><input type="text" name="hrg_jual"></td>
			</tr>
			<tr>
				<td>Jumlah Beli</td><td><input type="text" name="jml_beli"></td>
			</tr>
			<tr>
				<td></td><td><input type="submit" value="input"></td>
			</tr>
		</table>
	</form>
</body>
</html>