<?php 
    //memulai session 
    session_start();
    // melakukan destroy pada session bertujuan untuk mengakhiri session
    session_destroy();
    echo "anda telah berhasil keluar dari sistem <b>Log Out<b>";