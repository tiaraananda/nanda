<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - TOKO KOSMETIK</title>
</head>
<body>
 
	<h2>CRUD BARANG KOSMETIK</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH NAMA KOSMETIK</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>idBarang</th>
			<th>kodeBarang</th>
			<th>namaBarang</th>
			<th>satuanBarang</th>
            <th>stokBarang</th>
            <th>hargaBarang</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_kosmetik");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['idBarang']; ?></td>
				<td><?php echo $d['kodeBarang']; ?></td>
				<td><?php echo $d['namaBarang']; ?></td>
                <td><?php echo $d['satuanBarang']; ?></td>
				<td><?php echo $d['stokBarang']; ?></td>
				<td><?php echo $d['hargaBarang']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['idBarang']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['idBarang']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>