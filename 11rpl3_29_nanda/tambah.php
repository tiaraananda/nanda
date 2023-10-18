<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - TOKO KOSMETIK</title>
</head>
<body>
 
	<h2>CRUD BARANG KOSMETIK </h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH NAMA KOSMETIK</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>idBarang</td>
				<td><input type="text" name="idBarang"></td>
			</tr>
			<tr>
				<td>kodeBarang</td>
				<td><input type="number" name="kodeBarang"></td>
			</tr>
			<tr>
				<td>namaBarang</td>
				<td><input type="text" name="namaBarang"></td>
			</tr>
            <tr>
				<td>satuanBarang</td>
				<td><input type="text" name="satuanBarang"></td>
			</tr>
            <tr>
				<td>stokBarang</td>
				<td><input type="text" name="stokBarang"></td>
			</tr>
            <tr>
				<td>hargaBarang</td>
				<td><input type="text" name="hargaBarang"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>