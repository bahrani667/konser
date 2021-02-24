<?php
session_start();
include "koneksi/koneksi.php";

$result = mysqli_query($konek, "SELECT*FROM tbl_event");
while ($ambilevent = mysqli_fetch_array($result)) {
    $event_picture = $ambilevent['event_picture'];
?>



    <!DOCTYPE html>
    <html lang="zxx" class="no-js">

    <head>
        <title>Artatix Home</title>
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
                                <li><a href="page_contact.php">Hubungi Kami</a></li>
                                <li><a href="page_login.php">Login</a></li>
                            </ul>
                        </nav>
                        <!--######## #nav-menu-container -->
                    </div>
                </div>
            </div>
        </header><br>
        <!-- End Header Area -->

        <!-- start banner Area -->
        <section class="home-banner-area relative" id="home">
            <img src="img/event_banner/<?php echo $ambilevent['event_picture']; ?>" class="img-fluid" alt="Responsive image">

           
            <div class="white-space-10"></div>
            <div class="container">
                <div class="banner-content col-lg-12 col-md-12">

                    <div class="search-field">
                        <form class="search-form" action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Cari event ">
                                </div>
                                <div class="col-lg-3 col-md-6 col-xs-6">
                                    <select name="location" class="app-select form-control" required>
                                        <option data-display="Category">Kategori Event</option>
                                        <option value="1">Workshop</option>
                                        <option value="2">Olahraga</option>
                                        <option value="3">Music</option>
                                    </select>
                                </div>


                                <div class="col-lg-3 col-md-6 col-xs-6">
                                    <button class="primary-btn btn-square">Search now<span class="lnr lnr-arrow-right"></span></button>
                                </div>



                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start Event Card2 Area --->
        <section class="property-area section-gap relative " id="property">
            <div class="container">

                <div class="tabset">
                    <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
                    <label for="tab1">All Event</label>

                    <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
                    <label for="tab2">Sport</label>

                    <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
                    <label for="tab3">Music</label>

                    <div class="tab-panels">
                        <section id="marzen" class="tab-panel">
                            <div class="row">

                                <div class="col-lg-3">
                                    <a href="page_event_detail.php?id=<?php echo $ambilevent['event_id']; ?>">
                                        <div class="card-image">
                                            <img class="page_event_detail.php" src="img/event_banner/<?php echo $ambilevent['event_picture']; ?>" alt="">
                                        </div>
                                        <div class="single-property">
                                            <span class="card-content-span"><?php echo $ambilevent['event_category']; ?></span>
                                            <h4 class="card-content-h4"><?php echo $ambilevent['event_name']; ?></h4>

                                            <p class="card-content-p-location"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<?php echo $ambilevent['event_location']; ?></p>

                                            <hr>
                                            <div class="card-content-more_event">
                                                <a href="page_event_detail.php?id=<?php echo $ambilevent['event_id']; ?>" class="genric-btn btn-sm primary circle">Beli Tiket</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                            <?php } ?>

                        </section>
                        <section id="rauchbier" class="tab-panel">

                        </section>
                        <section id="dunkles" class="tab-panel">

                        </section>
                    </div>

                </div>
            </div>

            </div>
        </section>



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