<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$idBarang = $_POST['idBarang'];
$kodeBarang = $_POST['kodeBarang'];
$namaBarang = $_POST['namaBarang'];
$satuanBarang = $_POST['satuanBarang'];
$stokBarang = $_POST['stokBarang'];
$hargaBarang = $_POST['hargaBarang'];
// update data ke database
mysqli_query($koneksi,"update tb_kosmetik set idBarang='$idBarang', kodeBarang='$kodeBarang', namaBarang='$namaBarang', satuanBarang='$satuanBarang',stokBarang='$stokBarang',hargaBarang='$hargaBarang' where idBarang='$idBarang'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>