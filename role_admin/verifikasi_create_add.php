<?php
    include "auth.php";
?>

<?php
$uservl_id                  = $_POST["uservl_id"];
$user_id                    = $_POST["user_id"];
$uservl_img_identity1       = $_FILES['uservl_img_identity1']['name'];
$uservl_number_identity1    = $_POST["uservl_number_identity1"];
$uservl_name_identity1      = $_POST["uservl_name_identity1"];
$uservl_address_identity1   = $_POST["uservl_address_identity1"];

$uservl_img_identitas2      = $_FILES['uservl_img_identitas2']['name'];
$uservl_no_identitas2       = $_POST["uservl_no_identitas2"];
$uservl_nm_identitas2       = $_POST["uservl_nm_identitas2"];
$uservl_address_identitas2  = $_POST["uservl_address_identitas2"];

if ($add = mysqli_query($konek, "INSERT INTO tbl_user_vl ( uservl_id,
                                                          user_id,
                                                          uservl_img_identity1,
                                                          uservl_number_identity1,
                                                          uservl_name_identity1,
                                                          uservl_address_identity1,
                                                          uservl_img_identitas2,
                                                          uservl_no_identitas2,
                                                          uservl_nm_identitas2,
                                                          uservl_address_identitas2)
                                  VALUES('$uservl_id',
                                        '$user_id',
                                        '$uservl_img_identity1',
                                        '$uservl_number_identity1',
                                        '$uservl_name_identity1',
                                        '$uservl_address_identity1',
                                        '$uservl_img_identitas2',
                                        '$uservl_no_identitas2',
                                        '$uservl_nm_identitas2',
                                        '$uservl_address_identitas2')"))
{
  header("Location: user_profil.php?id=' . $user_id");
  move_uploaded_file($_FILES['uservl_img_identity1']['tmp_name'],'../img/idt1/'.$uservl_img_identity1);
  move_uploaded_file($_FILES['uservl_img_identitas2']['tmp_name'],'../img/idt2/'.$uservl_img_identitas2);
  exit();

  }
  die("Terdapat kesalahan : " . mysqli_error($konek));
  ?>
