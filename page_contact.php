<?php
session_start();
include "koneksi/koneksi.php";

?>


<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <title>Artatix | Term Condition</title>
    <!-- Library CSS -->
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav2.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->


    <!-- Library Scripts -->
    <?php
    include "bundle_css_enduser.php";
    ?>
</head>

<body>

    <!-- Start Header Area -->
    <header class="default-header border-bottom">
        <div class="main-menu">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <div class="container">
                            <a href="index.php"><img src="img/logo/Artatix2.png" width="130" height="30" alt="" title="" /></a>
                        </div>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="index.php">Home</a></li>
                            <li><a href="page_kategori.php">Kategori Event</a></li>
                            <li><a href="page_kontak_kami.php">Hubungi Kami</a></li>
                            <li><a href="page_login.php">Login</a></li>
                        </ul>
                    </nav>
                    <!--######## #nav-menu-container -->
                </div>
            </div>
        </div>
    </header><br>
    <!-- End Header Area -->
    <!-- End Header Area -->



    <!-- Start contact-page Area -->
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row mt-80">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Rejowinangun, Kec. Kotagede.</h6>
                            <p>Jalan Nogobondo No. 498 RT 25 RW 8 Kel. Rejowinangun, Kec. Kotagede, Yogyakarta 55171</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">0813-2589-3924</a></h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">infoartatix@gmail.com</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn primary-btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact-page Area -->

    <!-- ========================= FOOTER ========================= -->
    <!-- Library Scripts -->
    <?php
    include "footer.php";
    ?>

    <!-- ========================= FOOTER END // ========================= -->


    <!-- Library Scripts -->
    <?php
    include "bundle_script_enduser.php";
    ?>



    <!--End of Tawk.to Script-->
</body>

</html>