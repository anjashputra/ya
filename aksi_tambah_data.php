
<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$NamaProduk = $_POST['NamaProduk'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];
 
// menginput data ke database
$query =mysqli_query($connection,"INSERT INTO produk VALUES ('','$NamaProduk','$Harga','$Stok')");
    if(!empty($query)){
        echo '<script>
            alert("Data ditambahkan");
            window.location="dashboard.php";
            </script>'; 
    }
            ?>