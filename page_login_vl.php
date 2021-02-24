<?php
session_start();
include "koneksi/koneksi.php";
  // include "pswd.php";



$user_email = $_POST["user_email"];
$user_password = md5($_POST["user_password"]);

$query = mysqli_query ($konek, "SELECT * FROM tbl_user WHERE user_email='$user_email' AND user_password='$user_password'");

// Validasi Login
$val = mysqli_num_rows($query);


if ($val > 0){

	$data = mysqli_fetch_assoc($query);

		if($data['user_level'] == "admin"){
			$_SESSION['user_email'] = $user_email;
			$_SESSION['user_id'] 	= $user_id;

			$_SESSION['user_level'] = "admin";
			header("location:role_admin/index.php");

		}elseif ($data['user_level'] == "member") {
			$_SESSION['user_email'] = $user_email;
			$_SESSION['user_id'] 	= $user_id;
			
			$_SESSION['user_level'] = "member";
			header("location:role_member/index.php");

		}else {
			header("location:page_login.php?pesan=gagal");
		}

}

?>