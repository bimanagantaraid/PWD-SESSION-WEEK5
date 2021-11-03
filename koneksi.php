<?php 

// melakukan koneksi kedatabase dengan cara mysqli_connet parameter nama host, username, password dan nama database
$con = mysqli_connect("localhost", "root", "", "akademik");
// lalu check apakah koneksi berhasil terkoneksi apa belum
if(!$con)
{
    echo "error";
}