<?php
    session_start();
    session_destroy();
?>
<script>
    alert('Logout Berhasil');
    location='index.php';
</script>