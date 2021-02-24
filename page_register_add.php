<?php
//koneksi data base
session_start();
include "koneksi/koneksi.php";


$user_id 		    = $_POST["user_id"];
$user_email 	    = $_POST["user_email"];
$user_password 		= md5($_POST["user_password"]);
$user_nmlengkap		= $_POST["user_nmlengkap"];
$user_notelp 		= $_POST["user_notelp"];
$user_level 	    = $_POST["user_level"];



$queryinsert = "INSERT INTO  tbl_user (
user_id,
user_email,
user_password,
user_nmlengkap,
user_notelp,
user_level)
 VALUES (
 '$user_id',
 '$user_email',
 '$user_password',
 '$user_nmlengkap',
 '$user_notelp',
 '$user_level')";

//menyimpan data ke database
mysqli_query($konek, $queryinsert);
    echo "<h3>Sukses !!! Data berhasil di simpan.</3>";
    header ("Location: page_login.php");
