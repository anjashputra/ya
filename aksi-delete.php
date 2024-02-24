<?php
include 'koneksi.php';
if(isset($_GET['produkID'])){
    $produkID= $_GET['produkID'];

    $query = "DELETE FROM produk WHERE produkID='$produkID'";
    $result = mysqli_query($connection,$query);
}
?>
<script>
    alert('Berhasil Menghapus Data');
location.href="dashboard.php?page=produk";
</script>