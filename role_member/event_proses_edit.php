﻿<?php

session_start();
include "../koneksi/koneksi.php";

$event_id			= $_POST["event_id"];
$event_name         = $_POST["event_name"];
$event_category     = $_POST["event_category"];

$event_picture       = $_FILES['event_picture']['name'];

$event_description  = $_POST["event_description"];
$event_location     = $_POST["event_location"];
$event_date_start   = date("Y-m-d", strtotime($_POST["event_date_start"]));
$event_date_finish  = date("Y-m-d", strtotime($_POST["event_date_finish"]));
$event_time_start   = $_POST["event_time_start"];
$event_time_finish  = $_POST["event_time_finish"];
$event_status       = $_POST["event_status"];



  if ($edit = mysqli_query($konek, "UPDATE tbl_event SET  event_name='$event_name',event_category='$event_category',event_picture='$event_picture',event_description='$event_description',event_location='$event_location',event_date_start='$event_date_start',event_date_finish='$event_date_finish',event_time_start='$event_time_start',event_time_finish='$event_time_finish',event_status='$event_picture' 
  WHERE event_id='$event_id'")){
    
		header("Location: event_detail.php");
		move_uploaded_file($_FILES['event_picture']['tmp_name'],'../img/event_picture/'.$event_picture);
		exit();
	}
  die ("Terdapat kesalahan : ". mysqli_error($konek));



?>









