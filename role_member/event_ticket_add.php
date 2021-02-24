﻿<?php
    include "auth.php";
?>

<?php
	$tkt_id				= $_POST["tkt_id"];
	$tkt_category		= $_POST["tkt_category"];
	$tkt_item			= $_POST["tkt_item"];
	$tkt_size			= $_POST["tkt_size"];
	$tkt_qty			= $_POST["tkt_qty"];
	$tkt_price			= $_POST["tkt_price"];
	$tkt_ppn			= $_POST["tkt_ppn"];
	$event_id			= $_POST["event_id"];
	$period_id			= $_POST["period_id"];


	if ($add = mysqli_query($konek, "INSERT INTO tbl_TICKET ( tkt_id,
															tkt_category,
															tkt_item,
															tkt_size,
															tkt_qty,
															tkt_price,
															tkt_ppn,
															event_id,
															period_id)
	VALUES(	'$tkt_id',
			'$tkt_category',
			'$tkt_item',
			'$tkt_size',
			'$tkt_qty',
			'$tkt_price',
			'$tkt_ppn',
			'$event_id',
			'$period_id')")) 
	{
		header('Location: event_detail.php?id=' . $event_id);
	exit();
	
	}
	die("Terdapat kesalahan : " . mysqli_error($konek));
?>