
<?php
    include "auth.php";
    
$uservl_id                  = $_POST["uservl_id"];
$user_id                    = $_POST["user_id"];
$uservl_img_identity1       = $_FILES['uservl_img_identity1']['name'];
$uservl_number_identity1    = $_POST["uservl_number_identity1"];
$uservl_name_identity1      = $_POST["uservl_name_identity1"];
$uservl_address_identity1   = $_POST["uservl_address_identity1"];

$uservl_img_identity2       = $_FILES['uservl_img_identity2']['name'];
$uservl_number_identity2    = $_POST["uservl_number_identity2"];
$uservl_name_identity2      = $_POST["uservl_name_identity2"];
$uservl_address_identity2   = $_POST["uservl_address_identity2"];

if ($add = mysqli_query($konek, "INSERT INTO tbl_user_vl ( uservl_id,
                                                          user_id,
                                                          uservl_img_identity1,
                                                          uservl_number_identity1,
                                                          uservl_name_identity1,
                                                          uservl_address_identity1,
                                                          uservl_img_identity2,
                                                          uservl_number_identity2,
                                                          uservl_name_identity2,
                                                          uservl_address_identity2)
                                  VALUES('$uservl_id',
                                        '$user_id',
                                        '$uservl_img_identity1',
                                        '$uservl_number_identity1',
                                        '$uservl_name_identity1',
                                        '$uservl_address_identity1',
                                        '$uservl_img_identity2',
                                        '$uservl_number_identity2',
                                        '$uservl_name_identity2',
                                        '$uservl_address_identity2')"))
{
  header("Location: user_profil.php?id=' . $user_id");
  move_uploaded_file($_FILES['uservl_img_identity1']['tmp_name'], '../img/verification/identity1/' . $uservl_img_identity1);
  move_uploaded_file($_FILES['uservl_img_identity2']['tmp_name'], '../img/verification/identity2/' . $uservl_img_identity2);
  exit();

  }
  die("Terdapat kesalahan : " . mysqli_error($konek));
  ?>
