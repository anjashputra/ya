<?php
include 'koneksi.php';

$ProdukID = $_POST['ProdukID'];
$NamaProduk = $_POST['NamaProduk'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];

$query =mysqli_query($connection,"UPDATE produk SET NamaProduk='$NamaProduk', Harga='$Harga', Stok='$Stok'
 WHERE ProdukID='$ProdukID'");

if(!empty($query)){
    echo '<script>
        alert("Data diubah");
        window.location="dashboard.php";
        </script>'; 
}
        ?>