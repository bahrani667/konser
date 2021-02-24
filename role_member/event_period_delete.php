﻿<?php
    include "auth.php";
?>

<?php
$period_id	= $_GET["id"];

	
if($delete = mysqli_query ($konek, "DELETE FROM tbl_period   WHERE period_id='$period_id'")){
    header('Location: event_detail.php?id=' . $event_id);
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));


?>