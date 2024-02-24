<?php
$connection = mysqli_connect("localhost", "root", "", "kasir");
if (!$connection){
    die("Connection Failed:".mysqli_connect_error());
}
?>  