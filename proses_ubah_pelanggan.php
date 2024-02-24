<?php
include 'koneksi.php';

$PelangganID = $_POST['PelangganID'];
$NamaPelanggan = $_POST['NamaPelanggan'];
$Alamat = $_POST['Alamat'];
$NomorTelpon = $_POST['NomorTelpon'];

$query =mysqli_query($connection,"UPDATE pelanggan SET NamaPelanggan='$NamaPelanggan', Alamat='$Alamat', NomorTelpon='$NomorTelpon'
 WHERE PelangganID='$PelangganID'");

if(!empty($query)){
    echo '<script>
        alert("Data di ubah");
        window.location="datapelanggan.php";
        </script>'; 
}
        ?>