<?php
    include "auth.php";
?>

<?php 
$event_id	= $_GET["id"];

	
if($delete = mysqli_query ($konek, "DELETE tbl_event,tbl_period,tbl_ticket FROM tbl_event,tbl_period, tbl_ticket
WHERE tbl_event.`event_id`='$event_id'")){
    header('Location: event.php');
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));


?>