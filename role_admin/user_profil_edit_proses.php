<?php
    include "auth.php";
?>

<?php
// menangkap data yang di kirim dari form
$user_id                  = $_POST["user_id"];
$user_email               = $_POST["user_email"];
$user_nmlengkap           = $_POST["user_nmlengkap"];
$user_notelp              = $_POST["user_notelp"];

// update data ke database
if ($edit = mysqli_query($konek, "UPDATE tbl_user SET 
													user_email		='$user_email', 
                                                    user_nmlengkap	='$user_nmlengkap', 
                                                    user_notelp	    ='$user_notelp'
                                WHERE user_id='$user_id'")); 

{
    header('Location: user_profil.php?id=' . $user_id);
    
    exit();
}
die("Terdapat kesalahan : " . mysqli_error($konek));
