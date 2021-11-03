<?php 

    include "koneksi.php";
    $id_user = $_POST['id_user'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM users WHERE id_user='$id_user' AND password='$password'";
    $login = mysqli_query($con, $sql);

    $ketemu = mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);

    if($ketemu > 0){
        session_start();
        $_SESSION['id_user'] = $r["id_user"];
        $_SESSION['passuser'] = $r["password"];

        echo "<b>LOGIN BERHASIL!</b><br>";
        echo "User Id : ". $_SESSION['id_user']."<br>";
        echo "Password :". $_SESSION['passuser']."<br>";
        echo "<a href='logout.php'>Logout</a>";
    }else{
        echo "<center>Login Gagal! Username & Password tidak benar</center>";
        echo "<a href='form_login.php'>login ulang</>";
    }
    mysqli_close($con);