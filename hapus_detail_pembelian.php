<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$DetailID = $_POST['DetailID'];
$PelangganID = $_POST['PelangganID'];


// menghapus data dari database
mysqli_query($connection,"delete from detailpenjualan where DetailID='$DetailID'");

// mengalihkan halaman kembali ke data_barang.php
header("location:detailspembelian.php?PelangganID=$PelangganID");

?>