<?php
include 'koneksi.php';
if(isset($_GET['ID'])){
    $produkID= $_GET['ID'];

    $query = "DELETE FROM pelanggan WHERE PelangganID='$produkID'";
    $result = mysqli_query($connection,$query);
}
?>
<script>
    alert('Berhasil Menghapus Data');
location.href="datapelanggan.php?page=pelanggan";
</script>