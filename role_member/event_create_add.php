﻿<?php
session_start();
include "../koneksi/koneksi.php";

$user_id            = $_POST["user_id"];
$event_id           = $_POST["event_id"];
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





if ($add = mysqli_query($konek, "INSERT INTO tbl_event ( 
                                                          user_id,
                                                          event_id,
                                                          event_name,
                                                          event_category,
                                                          event_picture,
                                                          event_description,
                                                          event_location,
                                                          event_date_start, 
                                                          event_date_finish, 
                                                          event_time_start, 
                                                          event_time_finish, 
                                                          event_status)
  VALUES('$user_id',
         '$event_id',
         '$event_name',
         '$event_category',
         '$event_picture',
         '$event_description',
         '$event_location',
         '$event_date_start',
         '$event_date_finish',
         '$event_time_start',
         '$event_time_finish',
         '$event_status')")) 
{
  header("Location: event.php");
  move_uploaded_file($_FILES['event_picture']['tmp_name'],'../img/event_banner/'.$event_picture);
  exit();
  
}
die("Terdapat kesalahan : " . mysqli_error($konek));
?>