
<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$PenjualanID = $_POST['PenjualanID'];
$ProdukID = $_POST['ProdukID'];
$NamaProduk = $_POST['NamaProduk'];
$JumlahProduk = $_POST['JumlahProduk'];
$SubTotal = $_POST['SubTotal'];
 
// menginput data ke database
$query =mysqli_query($connection,"INSERT INTO penjualan VALUES ('','$TanggalPenjualan','$TotalHarga','$PelangganID')");
$query =mysqli_query($connection,"INSERT INTO detailpenjualan VALUES ('$PenjualanID','$ProdukID','$JumlahProduk, '$SubTotal')");


    if(!empty($query)){
        echo '<script>
            alert("Data di Tambahkan");
            window.location="pembelian.php";
            </script>'; 
    }
            ?>