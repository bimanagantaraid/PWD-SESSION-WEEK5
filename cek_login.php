<?php 
    // melakukan koneksi ke database
    include "koneksi.php";
    // mengambil data inputan id_user dan password
    $id_user = $_POST['id_user'];
    // melaukan enkripsi terlebih dahulu dengan md5
    $password = md5($_POST['password']);
    // query mencari user berdasarkan id_user dan password yang sesuai
    $sql = "SELECT * FROM users WHERE id_user='$id_user' AND password='$password'";
    // eksekusi query
    $login = mysqli_query($con, $sql);

    // mengambil data dari database menjadikan sebuah array dan memasukan kedalam variable $r
    $r = mysqli_fetch_array($login);
    // cek apakah data tersedia
    if(mysqli_num_rows($login) > 0){
        // memulai session
        session_start();
        // membuat session id_user dan passuser dengan value data dari database user login
        $_SESSION['id_user'] = $r["id_user"];
        $_SESSION['passuser'] = $r["password"];

        // menampilkan data user menggunakan session
        echo "<b>LOGIN BERHASIL!</b><br>";
        echo "User Id : ". $_SESSION['id_user']."<br>";
        echo "Password :". $_SESSION['passuser']."<br>";
        echo "<a href='logout.php'>Logout</a>";
    }else{
        echo "<center>Login Gagal! Username & Password tidak benar</center>";
        echo "<a href='form_login.php'>login ulang</>";
    }
    mysqli_close($con);