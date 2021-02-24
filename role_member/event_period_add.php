﻿<?php
    include "auth.php";
?>

<?php
	$period_id			= $_POST["period_id"];
	$period_name		= $_POST["period_name"];	
	$period_date		= date("Y-m-d", strtotime($_POST["period_date"]));
	$event_id			= $_POST["event_id"];


	if ($add = mysqli_query($konek, "INSERT INTO tbl_period ( 
															period_id,
															period_name,
															period_date,
															event_id)
	VALUES(
			'$period_id',
			'$period_name',
			'$period_date',
			'$event_id')")) 
	{
	header('Location: event_detail.php?id=' . $event_id);
	exit();
	
	}
	die("Terdapat kesalahan : " . mysqli_error($konek));
?>