<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - TOKO KOSMETIK</title>
</head>
<body>
 
	<h2>CRUD BARANG KOSMETIK</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA KOSMETIK</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tb_kosmetik where idBarang='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<input type="hidden" name="idBarang" value="<?php echo $d['idBarang']; ?>">
                <tr>			
					<td>kodeBarang</td>
					<td>
						<input type="text" name="kodeBarang" value="<?php echo $d['kodeBarang']; ?>">
					</td>
				</tr>
                <tr>			
					<td>namaBarang</td>
					<td>
						<input type="text" name="namaBarang" value="<?php echo $d['namaBarang']; ?>">
					</td>
				</tr>
                <tr>			
					<td>satuanBarang</td>
					<td>
						<input type="text" name="satuanBarang" value="<?php echo $d['satuanBarang']; ?>">
					</td>
				</tr>
				<tr>
					<td>stokBarang</td>
					<td><input type="number" name="stokBarang" value="<?php echo $d['stokBarang']; ?>"></td>
				</tr>
				<tr>
					<td>hargaBarang</td>
					<td><input type="text" name="hargaBarang" value="<?php echo $d['hargaBarang']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>