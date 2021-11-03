<?php 
    // melakukan koneksi ke database
    include "koneksi.php";

    // mengambil data dari inputan user
    $id_user = $_POST['id_user'];
    // melakukan enkripsi pada data password
    $password = md5($_POST['password']);
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $level = $_POST['level'];
    // query input kedatabase user
    $sql = "INSERT INTO users(id_user, password, nama_lengkap, email, level)VALUES('$id_user', '$password','$nama_lengkap','$email','$level')";
    // eksekusi query
    $query = mysqli_query($con, $sql);
    mysqli_close($con);

    header('location:tampil_user.php');

?>