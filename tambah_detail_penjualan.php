<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$PelangganID = $_POST['PelangganID'];
$PenjualanID = $_POST['PenjualanID'];

// menginput data ke database
mysqli_query($connection,"insert into detailpenjualan values('','$PenjualanID','','','')");

// mengalihkan halaman kembali ke detail_pembelian.php
header("location:pembelian.php?PelangganID=$PelangganID");
?>