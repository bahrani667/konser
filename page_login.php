<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <title>Artatix - Login</title>
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
                                <p class="text-muted mb-4 text-center">Sudah punya akun ? silahkan login untuk melanjutkan</p>

                                <form action="page_login_vl.php" method="post">

                                    <div class="form-group mb-3">
                                        <input id="inputEmail" type="text" name="user_email" placeholder="Email" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4 ">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputPassword" type="password" name="user_password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 ">
                                    </div>
                                    <a href="" class="text-seondary">
                                        <p for="customCheck1" class="text-secondary">Lupa password ?</p>
                                    </a>

                                    <button type="submit" class="genric-btn primary rounded btn-block  mb-2 rounded-pill shadow-md">Masuk</button>

                                    <div class="text-center  justify-content-between mt-4">
                                        atau login melalui
                                        <div class="col sosmed_login">
                                            <a href="#" class="fb ">
                                                <i class="fa fa-facebook fa-fw fa-login"></i>
                                            </a>

                                            <a href="#" class="google ">
                                                <i class="fa fa-google fa-fw fa-login"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-center d-flex justify-content-between mt-4">
                                        <p>Belum punya akun ? daftar <a href="page_register.php">disini</a>
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