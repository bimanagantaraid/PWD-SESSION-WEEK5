<?php 
    // melakukan koneksi ke database
    include "koneksi.php";
    // query delete 
    $sql = "DELETE FROM users WHERE id_user='$_GET[id]'";
    // eksekusi query
    mysqli_query($con, $sql);
    mysqli_close($con);
    header("location:tampil_user.php");
?>