
<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$PelangganID = $_POST['PelangganID'];
$NamaPelanggan = $_POST['NamaPelanggan'];
$NomorTelpon = $_POST['NomorTelpon'];
$Alamat = $_POST['Alamat'];

// update data ke database
mysqli_query($connection,"update pelanggan set NamaPelanggan='$NamaPelanggan', NomorTelpon='$NomorTelpon', Alamat='$Alamat' where PelangganID='$PelangganID'");

// mengalihkan halaman kembali ke data_barang.php
header("location:pembelian.php?pesan=update");

?>