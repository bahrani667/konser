<?php
session_start();
include "koneksi/koneksi.php";

$event_id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <title>Artatix - Event Detail</title>
    <!-- Library CSS -->
    <?php
    include "bundle_css_enduser.php";
    ?>
</head>

<body>

    <!-- Start Header Area -->
    <header class="default-header">
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
                            <li><a href="index.php">Home</a></li>
                            <li class="menu-active"><a href="page_kategori.php">Kategori Event</a></li>
                            <li><a href="page_login.php">Login</a></li>
                        </ul>
                    </nav>
                    <!--######## #nav-menu-container -->
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->

    <!-- Start Event Card Area -->
    <section class="relative">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <?php
                        $queryevent = mysqli_query($konek, "SELECT tbl_event.*, tbl_period.*, tbl_ticket.tkt_category
                                                            FROM tbl_event
                                                            LEFT JOIN tbl_period ON tbl_event.event_id = tbl_period.event_id
                                                            LEFT JOIN tbl_ticket ON tbl_period.period_id = tbl_ticket.period_id
                                                            WHERE tbl_event.event_id = '$event_id'");
                        if ($queryevent == false) {
                            die("Terjadi Kesalahan : " . mysqli_error($konek));
                        }
                        while ($event = mysqli_fetch_array($queryevent)) {
                            $event_picture      =  $event['event_picture'];
                            $event_name         =  $event['event_name'];
                            $event_category     =  $event['event_category'];
                            $event_desc         =  $event['event_description'];
                            $event_date_start   =   date('d M yy', strtotime($event['event_date_start']));
                            $event_date_finish  =   date('d M yy', strtotime($event['event_date_finish']));
                            $event_time_start   =   date('H:i', strtotime($event['event_time_start']));
                            $event_time_finish  =   date('H:i', strtotime($event['event_time_finish']));
                            $event_location     =  $event['event_location'];
                        }
                        ?>
                        <section class="home-banner-area relative" id="home">
                            <div class="col-lg-12 col-md-6 col-xs-6">
                                <div class="section-top-border">
                                    <div class="row gallery-item">
                                        <div class="col-md-12">
                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    <!-- Slide One - Set the background image for this slide in the line below -->
                                                    <div class="carousel-item active" style="background-image: url('img/event_banner/<?php echo $event_picture; ?>')">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <!--<h2 class="display-4">First Slide</h2>
                                                                <p class="lead">This is a description for the first slide.</p>-->
                                                        </div>
                                                    </div>
                                                    <!-- Slide Three - Set the background image for this slide in the line below -->

                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-b-20 p-l-35 ">
                                    <div class="col-md-12">
                                        <h3><?php echo $event_name; ?></h3>
                                        <span class="card-content-span">&nbsp;<?php echo $event_category; ?></span>
                                        <hr>
                                    </div>
                                    <div class="col-6 col-md-5">
                                        <span class="card_detail_admin card-position">Tanggal & Waktu</span><br>
                                        <span class="card-content-span"><i class="fa fa-calendar "></i>&nbsp;&nbsp;<?php echo $event_date_start ?> - <?php echo $event_date_finish ?></span><br>
                                        <span class="card-content-span"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo $event_time_start ?> - <?php echo $event_time_finish ?> </span>
                                    </div>
                                    <div class="col-6 col-md-5">
                                        <span class="card_detail_admin">Lokasi</span><br>
                                        <span class="card-content-span"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $event_location ?></span><br>
                                    </div>
                                    <div class="col-6 col-md-2">

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="tabset">
                            <input type="radio" name="tabset" id="tab1" aria-controls="deskripsi" checked>
                            <label for="tab1">Deskripsi</label>
                            <input type="radio" name="tabset" id="tab2" aria-controls="kategori">
                            <label for="tab2">Kategori Ticket</label>
                            <div class="tab-panels">
                                <section id="deskripsi" class="tab-panel">
                                    <div class="container">
                                        <p class="card-text-detail"><?php echo $event_desc ?></p>
                                    </div>
                                </section>
                                <section id="kategori" class="tab-panel">
                                <div class="container">
                                    <?php
                                    $categories = array();
                                    mysqli_data_seek($queryevent, 0); // Reset pointer to start of result set
                                    while ($row = mysqli_fetch_assoc($queryevent)) {
                                        $category = $row['tkt_category'];
                                        if (!in_array($category, $categories)) {
                                            $categories[] = $category;
                                            ?>
                                            <div class="bp-card bg-ticket" data-clickthrough="link">
                                                <div class="bp-card_label">
                                                    <div class="bd-border_solid"></div>
                                                    <div class="bd-border_dotted"></div>
                                                </div>
                                                <div class="bp-card_content">
                                                    <p class="secondary"><?php echo $category; ?></p>
                                                    <h4>Ticket name</h4>
                                                    <ul>
                                                        <span>Including:</span>
                                                        <li>Minimal 1</li>
                                                        <li>Minimal 1</li>
                                                        <li>Minimal 1</li>
                                                    </ul>
                                                    <a href="" class="price">€ 9,-</a>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="card">
                    <?php
                    mysqli_data_seek($queryevent, 0); // Reset pointer to start of result set
                    while ($row = mysqli_fetch_assoc($queryevent)) {
                        $period_id = $row['period_id'];
                        $period_name = $row['period_name'];
                        $period_date = date('d M Y', strtotime($row['period_date']));
                        ?>
                        <div class="blockquotes">
                            <blockquote class="generic-blockquote">
                                <h5 class="card-content-h4 bg-btn-secondary"><?php echo $period_name; ?></h5>
                                <span class="card-content-span"><?php echo $period_date; ?></span>
                            </blockquote>
                        </div>
                        <?php
                    }
                    ?>
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