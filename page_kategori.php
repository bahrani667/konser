<?php
session_start();
include "koneksi/koneksi.php";

// Query untuk mengambil data kategori event
$queryCategory = "SELECT DISTINCT event_category FROM tbl_event";
$resultCategory = mysqli_query($konek, $queryCategory);

// Query untuk mengambil data event
$queryEvent = "SELECT * FROM tbl_event";
$resultEvent = mysqli_query($konek, $queryEvent);
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <title>Artatix - Kategori</title>
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


    <section class="property-area section-gap relative" id="property">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 header-text">
                    <h1>Temukan event disini</h1>
                    <p>Pilih dari kategori atau kata kunci dibawah ini untuk membantu kamu menemukan event sesuai minatmu</p>
                </div>
            </div>

            <!-- Blog Categorie Area -->
            <section class="blog_categorie_area">
                <div class="container">
                    <div class="row text-center">
                        <?php
                        while ($rowCategory = mysqli_fetch_assoc($resultCategory)) {
                            $eventCategory = $rowCategory['event_category'];
                        ?>
                            <div class="col-lg-3">
                                <div class="categories_post">
                                    <img src="img/blog/cat-post/cat-post-3.jpg" alt="post">
                                    <div class="categories_details">
                                        <div class="categories_text">
                                            <a href="#">
                                                <h5><?php echo $eventCategory; ?></h5>
                                            </a>
                                            <div class="border_line"></div>
                                            <p>Kategori event <?php echo $eventCategory; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <!-- Blog Categorie Area -->

        </div>
    </section>
    <!-- End Event Card2 Area -->

    <!-- Start blog Area -->
    <section class="blog-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 header-text">
                    <h1>Discover Event</h1>
                </div>
            </div>
            <div class="row">
                <?php
                while ($rowEvent = mysqli_fetch_assoc($resultEvent)) {
                    $eventId = $rowEvent['event_id'];
                    $eventName = $rowEvent['event_name'];
                    $eventDate = date('d M Y', strtotime($rowEvent['event_date_start']));
                    $eventLocation = $rowEvent['event_location'];
                    $eventPicture = $rowEvent['event_picture'];
                ?>
                    <div class="col-lg-3">
                        <a href="page_event_detail.php?id=<?php echo $eventId; ?>">
                            <div class="card-image">
                                <img src="img/event_banner/<?php echo $eventPicture; ?>" alt="">
                            </div>
                            <div class="single-property">
                                <span class="card-content-span"><?php echo $eventDate; ?></span>
                                <h4 class="card-content-h4"><?php echo $eventName; ?></h4>
                                <p class="card-content-p-location"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<?php echo $eventLocation; ?></p>
                                <hr>
                                <div class="card-content-more_event">
                                    <span>Lihat Event</span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End blog Area -->

    <div class="row d-flex justify-content-center">
        <div class="col-md-10 header-text">
            <a href="#" class="genric-btn primary-border circle">Lihat Event lainnya<span class="lnr"></span></a>
        </div>
    </div>

    <!-- Start Footer Area -->
    <?php include "footer.php"; ?>
    <!-- End Footer Area -->

    <!-- Library Script -->
    <?php include "bundle_script_enduser.php"; ?>
</body>

</html>