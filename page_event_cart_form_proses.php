<?php
    session_start();
    error_reporting(0);
    include "koneksi/koneksi.php";

	$pmb_id			    = $_POST["pmb_id"];
    $pmb_nama		    = $_POST["pmb_nama"];
    $pmb_identitas		= $_POST["pmb_identitas"];
	$pmb_ktp			= $_POST["pmb_ktp"];
	$pmb_email			= $_POST["pmb_email"];
	$pmb_tlp			= $_POST["pmb_tlp"];

	if ($add = mysqli_query($konek, "INSERT INTO tbl_pembeli ( pmb_id,
															   pmb_nama,
                                                               pmb_identitas,
															   pmb_ktp,
                                                               pmb_email,
                                                               pmb_tlp)
	VALUES(	'$pmb_id',
            '$pmb_nama',
            '$pmb_identitas',
			'$pmb_ktp',
			'$pmb_email',
			'$pmb_tlp')"))
	{
		header('Location: page_event_invoice.php');
	exit();
	
	}
	die("Terdapat kesalahan : " . mysqli_error($konek));
?>