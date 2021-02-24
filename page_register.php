<?php
session_start();
include "koneksi/koneksi.php";
$query = mysqli_query($konek, "SELECT max(user_id) as kodeTerbesar FROM tbl_user");
$data = mysqli_fetch_array($query);
$kodeUser = $data['kodeTerbesar'];
// mengambil angka dari kode barang terbesar, menggunakan fungsi substr dan diubah ke integer dengan (int)
$urutan = (int) substr($kodeUser, 3, 3);
// nomor yang diambil akan ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;
// membuat kode barang baru
// string sprintf("%03s", $urutan); berfungsi untuk membuat string menjadi 3 karakter
// misalnya string sprintf("%03s", 22); maka akan menghasilkan '022'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya PC
$huruf = "USR";
$kodeUser = $huruf . sprintf("%03s", $urutan);
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <title>Artatix - Register</title>
    <!-- Library CSS -->
    <?php
    include "bundle_css_enduser.php";
    ?>
</head>

<body>

    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-7 d-none d-md-flex bg-image"></div>


            <!-- The content half -->
            <div class="col-md-5 white">
                <div class="login d-flex align-items-center py-5">

                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <a href="index.php"><img src="img/logo/Artatix2.png" alt="logo" width="100%" height="60" class="mb-4 logo_login "></a>
                                <p class="text-muted mb-4 text-center">Belum punya akun ? mohon mendaftar untuk melanjutkan</p>

                                <form action="page_register_add.php" method="post">

                                    <div class="form-group mb-3">
                                        <input type="text" name="user_id" value="<?php echo $kodeUser ?>"required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>

                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="email" name="user_email" placeholder="Email" required="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>

                                    <div class="form-group mb-3">
                                        <input id="inputPassword" type="password" name="user_password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>

                                    <div class="form-group mb-3">
                                        <input type="text" name="user_nmlengkap" placeholder="Nama Lengkap" required="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>

                                    <div class="form-group mb-3">
                                        <input type="number" name="user_notelp" placeholder="Nomor Ponsel" required="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>

                                    <div class="form-group mb-3">
                                        <input type="hidden" name="user_level" placeholder="status" value="member" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>

                                    <button type="submit" class="genric-btn primary rounded btn-block  mb-2 rounded-pill shadow-md">Registrasi</button>
                                    <div class="text-center d-flex justify-content-between mt-4">
                                        <p>Sudah punya akun ? login <a href="page_register.php">disini</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->

        </div>
    </div>
    <!-- Library Script -->
    <?php
    include "bundle_script_enduser.php";
    ?>
</body>

</html>