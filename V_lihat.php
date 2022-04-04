<!DOCTYPE html>
<html>
<head>
	<title>KEDAIKU</title>
</head>
<body>
<h1>Data Menu</h1>
	<table border="5">
		<tr>
			<th>ID</th>			
			<th>Nama Produk</th>
			<th>Harga Jual</th>
			<th>Jumlah Beli</th>
			<th>Opsi</th>
		</tr>
		<?php foreach($kedai as $lihat){
		 ?>
		<tr>
			<td><?php echo $lihat->id; ?></td>			
			<td><?php echo $lihat->nm_produk; ?></td>
			<td><?php echo $lihat->hrg_jual; ?></td>
			<td><?php echo $lihat->jml_beli; ?></td>
			<td><?php echo anchor(base_url().'kedaiku/hapus/'.$lihat->id,'hapus') ?>
			<?php echo anchor(base_url().'kedaiku/edit/'.$lihat->id,'edit') ?></td>
		</tr>
		<?php 
		}
		?>
	<tr>
	<td><?php echo anchor(base_url().'kedaiku/tambah','tambah');?></td>
	</tr>
</table>
</body>
</html>