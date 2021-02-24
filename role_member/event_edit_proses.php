<?php
    include "auth.php";
?>

<?php
$event_id           = $_POST["event_id"];
$event_name         = $_POST["event_name"];
$event_category     = $_POST["event_category"];

$event_picture      = $_FILES['event_picture']['name'];
$event_description  = $_POST["event_description"];
$event_location     = $_POST["event_location"];
$event_date_start   = date("Y-m-d", strtotime($_POST["event_date_start"]));
$event_date_finish  = date("Y-m-d", strtotime($_POST["event_date_finish"]));
$event_time_start   = $_POST["event_time_start"];
$event_time_finish  = $_POST["event_time_finish"];
$event_status       = $_POST["event_status"];

// Jika Gambar Tidak di Update
if (empty($event_picture)){

  if ($edit = mysqli_query($konek, "UPDATE tbl_event SET  event_name='$event_name',
                                                          event_category='$event_category',
                                                          event_description='$event_description',
                                                          event_location='$event_location',
                                                          event_date_start='$event_date_start',
                                                          event_date_finish='$event_date_finish',
                                                          event_time_start='$event_time_start',
                                                          event_time_finish='$event_time_finish',
                                                          event_status='$event_status'
                                    WHERE event_id='$event_id'"))
  
  {
    header('Location: event_detail.php?id=' . $event_id);
	  move_uploaded_file($_FILES['event_picture']['tmp_name'], '../img/event_banner/' . $event_picture);
    exit();
	}
    die ("Terdapat kesalahan : ". mysqli_error($konek));


}else{

   $hapus= $konek->query("SELECT*FROM tbl_event where event_id='$event_id'");
    // menghapus gambar yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['event_picture'];
    // alamat tempat foto
    $hapus_gambar="../img/event_banner/$lokasi";
    // script untuk menghapus gambar dari folder
    unlink($hapus_gambar);
    header('Location: event_detail.php?id=' . $event_id);
    move_uploaded_file($_FILES['event_picture']['tmp_name'], '../img/event_banner/' . $event_picture);
}
die ("Terdapat kesalahan : ". mysqli_error($konek));
?>