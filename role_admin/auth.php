<?php
    session_start();
    error_reporting(0);
    include "../koneksi/koneksi.php";
    if ($_SESSION['user_level'] == "") {
        header("location:page_login.php?pesan=gagal");
    }

    $session_userlevel = $_SESSION['user_level'];
    $session_useremail = $_SESSION['user_email'];
    $session_userid    = $_SESSION['user_id'];
?>