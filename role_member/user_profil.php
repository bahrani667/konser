<?php
include "auth.php";
?>

<?php
$user_id = $_GET["id"];

$query = mysqli_query($konek, "SELECT max(uservl_id) as kodeUservl FROM tbl_user_vl");
$data = mysqli_fetch_array($query);
$kodeUservl = $data['kodeUservl'];
// mengambil angka dari kode barang terbesar, menggunakan fungsi substr dan diubah ke integer dengan (int)
$urutan = (int) substr($kodeUservl, 3, 3);
// nomor yang diambil akan ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;
// membuat kode barang baru
// string sprintf("%03s", $urutan); berfungsi untuk membuat string menjadi 3 karakter
// misalnya string sprintf("%03s", 22); maka akan menghasilkan '022'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya PC
$huruf = "USRVL";
$kodeUservl = $huruf . sprintf("%03s", $urutan);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Member | Dashboard</title>
    <!-- Library CSS -->
    <?php
    include "../bundle_css.php";
    ?>

</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">


            <?php
            include "navbar.php";
            ?>


            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Menu</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded">
                                    <a href="index.php">
                                        <span class="pcoded-micon "><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Management</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded pcoded-trigger">
                                    <a href="event.php">
                                        <span class="pcoded-micon "><i class="feather icon-calendar"></i></span>
                                        <span class="pcoded-mtext">Event</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">

                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext">Report</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="report_event.php">
                                                <span class="pcoded-mtext">Report Event</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="report_event.php">
                                                <span class="pcoded-mtext">Report Checkin</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4><?php echo $_SESSION['user_email']; ?></h4>
                                                        <?php $membersession = $_SESSION['user_level']; ?>
                                                        <span>Edit Your Information in here ! <?php echo $membersession ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">User Profile</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">User Profile</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- tab header start -->

                                                <!-- tab header end -->
                                                <!-- tab content start -->
                                                <div class="tab-content">
                                                    <!-- tab panel personal start -->
                                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                                        <!-- personal card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>About Me</h5>
                                                                <a href="user_profil_edit.php?id=<?php echo $user_id; ?>"><button type=" button" class="btn btn-sm btn-secondary waves-effect waves-light f-right">
                                                                        <i class="icofont icofont-edit"></i>
                                                                    </button></a>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="view-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <!-- end of table col-lg-6 -->
                                                                                    <div class="col-lg-12 col-xl-12">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table">
                                                                                                <?php
                                                                                                $queryuser = mysqli_query($konek, "SELECT*FROM tbl_user where user_id='$user_id'");
                                                                                                if ($queryuser == false) {
                                                                                                    die("Terjadi Kesalahan : " . mysqli_error($konek));
                                                                                                }
                                                                                                while ($user = mysqli_fetch_array($queryuser)) {
                                                                                                    $user_id = $user['user_id'];
                                                                                                ?>

                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <th scope="row">Nama Lengkap</th>
                                                                                                            <td><a href="#!"><span><?php echo $user['user_nmlengkap']; ?></span></a></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <th scope="row">Email</th>
                                                                                                            <td><?php echo $user['user_email']; ?></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <th scope="row">No Telepon</th>
                                                                                                            <td><?php echo $user['user_notelp']; ?></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                <?php } ?>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of general info -->
                                                                        </div>
                                                                        <!-- end of col-lg-12 -->
                                                                    </div>
                                                                    <!-- end of row -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>Verifikasi Data</h5>

                                                            </div>
                                                            <div class="card-block">
                                                                <div class="view-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="form-group row">
                                                                                <div class="col">
                                                                                    <button type="button" class="btn  btn-primary btn-sm form-control" data-toggle="modal" data-target="#ModalAddVerifikasi"><i class="fa fa-plus "></i>Add </button>
                                                                                </div>
                                                                                <div class="col-sm-10">

                                                                                </div>


                                                                                <div class="col">

                                                                                </div>
                                                                            </div>
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-xl-12">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table">
                                                                                                <?php
                                                                                                $queryusrvl = mysqli_query($konek, "SELECT*FROM tbl_user_vl where user_id='$user_id'");
                                                                                                if ($queryusrvl == false) {
                                                                                                    die("Terjadi Kesalahan : " . mysqli_error($konek));
                                                                                                }
                                                                                                while ($uservl = mysqli_fetch_array($queryusrvl)) {
                                                                                                ?>

                                                                                                    <tbody>

                                                                                                        <tr>
                                                                                                            <th>Identitas #1</th>
                                                                                                            <td><?php echo $uservl['uservl_number_identity1']; ?></td>
                                                                                                            <td><?php echo $uservl['uservl_name_identity1']; ?></td>
                                                                                                            <td><?php echo $uservl['uservl_address_identity1']; ?></td>
                                                                                                            <td><img src="../img/verification/identity1/<?php echo $uservl['uservl_img_identity1']; ?>" width="100" height="100"></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <th>Identitas #2</th>
                                                                                                            <td><?php echo $uservl['uservl_number_identity1']; ?></td>
                                                                                                            <td><?php echo $uservl['uservl_name_identity1']; ?></td>
                                                                                                            <td><?php echo $uservl['uservl_address_identity1']; ?></td>
                                                                                                            <td> <img  src="../img/verification/identity2/<?php echo $uservl['uservl_img_identity2']; ?>"width="100" height="100"></td>
                                                                                                        </tr>

                                                                                                    </tbody>
                                                                                                <?php } ?>
                                                                                            </table>
                                                                                        </div>

                                                                                    </div>

                                                                                    <!-- end of table col-lg-6 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <div class="modal fade" id="ModalAddVerifikasi" tabindex="-1" role="dialog">
                                                                                <div class="modal-dialog modal-lg" role="document">
                                                                                    <form action="user_vl_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h4 class="modal-title">Add Verification</h4>
                                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                    <span aria-hidden="true">&times;</span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label">Upload KTP</label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="hidden" class="form-control" name="uservl_id" value="<?php echo $kodeUservl ?>" readonly>
                                                                                                        <input type="hidden" class="form-control" name="user_id" value="<?php echo $user_id ?>">

                                                                                                        <input type="file" name="uservl_img_identity1" class="form-control" multiple="multiple">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label"></label>
                                                                                                    <div class="col-sm-5">

                                                                                                        <input type="text" class="form-control" name="uservl_number_identity1" placeholder="No KTP">
                                                                                                    </div>
                                                                                                    <div class="col-sm-5">
                                                                                                        <input type="text" class="form-control" name="uservl_name_identity1" placeholder="Nama Sesuai KTP">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label"></label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <textarea rows="5" cols="5" class="form-control" name="uservl_address_identity1" placeholder="Alamat sesuai KTP"></textarea>
                                                                                                    </div>
                                                                                                </div>


                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label">Upload SIM/NPWP</label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="file" name="uservl_img_identity2" class="form-control" multiple="multiple">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label"></label>
                                                                                                    <div class="col-sm-5">
                                                                                                        <input type="text" class="form-control" name="uservl_number_identity2" placeholder="No SIM/NPWP">
                                                                                                    </div>
                                                                                                    <div class="col-sm-5">
                                                                                                        <input type="text" class="form-control" name="uservl_name_identity2" placeholder="Nama Sesuai SIM/NPWP">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label"></label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <textarea rows="5" cols="5" class="form-control" name="uservl_address_identity2" placeholder="Alamat sesuai SIM/NPWP"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label"></label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <div class="border-checkbox-group border-checkbox-group-default">
                                                                                                            <input class="border-checkbox" type="checkbox" id="checkbox0" required>
                                                                                                            <small>Dengan ini saya menyatakan dengan sesungguhnya bahwa semua informasi yang disampaikan dalam seluruh lampiran-lampirannya ini adalah benar adanya. Apabila diketemukan dan/atau dibuktikan adanya kesalahan/penipuan/pemalsuan atas informasi yang saya sampaikan <b>Artatix</b> dibebaskan dari setiap akibat dari penggunaan data/dokumen tersebut.</small>
                                                                                                            <label class="border-checkbox-label" for="checkbox0"></label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="modal-footer">

                                                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light ">Save</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- ADD Ticket END -->
                                                                        <!-- end of general info -->
                                                                    </div>
                                                                    <!-- end of col-lg-12 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                        </div>
                                                        <!-- end of card-block -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Library Scripts -->
                                <?php
                                include "../bundle_script.php";
                                ?>

                                </script>
</body>

</html>