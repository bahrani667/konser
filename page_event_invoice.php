<?php
session_start();
include "koneksi/koneksi.php";
//library phpqrcode
include "barcode/phpqrcode/qrlib.php";
 
//direktory tempat menyimpan hasil generate qrcode jika folder belum dibuat maka secara otomatis akan membuat terlebih dahulu
$tempdir = "temp/"; 
if (!file_exists($tempdir))
    mkdir($tempdir);
 

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <title>Artatix - Invoice</title>
    <!-- Library CSS -->
    <?php
    include "bundle_css_enduser.php";
    ?>
</head>




<body>
        <?php
            $no = 1;
            $queryQR= mysqli_query($konek, "SELECT*FROM tbl_pembeli");
            if ($queryQR == false) {
                die("Terjadi Kesalahan : " . mysqli_error($konek));
            }
            while ($QR = mysqli_fetch_array($queryQR)) {

                $teks = $QR['pmb_ktp'];
 
                //Isi dari QRCode Saat discan
                $isi_teks1 = $teks;
                //Nama file yang akan disimpan pada folder temp 
                $namafile1 = $teks.".png";
                //Kualitas dari QRCode 
                $quality1 = 'H'; 
                //Ukuran besar QRCode
                $ukuran1 = 4; 
                $padding1 = 0; 
                QRCode::png($isi_teks1,$tempdir.$namafile1,$quality1,$ukuran1,$padding1);
        ?>
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
                            <li><a href="index.php">Home</a></li>
                            <li class="menu-active"><a href="page_kategori.php">Kategori Event</a></li>
                            <li><a href="page_contact.php">Hubungi Kami</a></li>
                            <li><a href="page_login.php">Login</a></li>
                        </ul>
                    </nav>
                    <!--######## #nav-menu-container -->
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->
    <div class="white-space-30"></div>
    <!-- Start Event Card Area -->
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="single-property">
                <widget type="ticket" class="--flex-column">
                    <div class="top --flex-column">

                        <center><a class="buy" href="#">VIP TICKET</a></center>
                        <br>
                        <div class="bandname -bold">Test Event</div>
                        <div class="tourname">Host: HYPE EVENTS</div>

                        <div class="tourname">
                            <small>Gates open at 6:00PM. This pass admits <b>1 (One)</b>.</small></div>
                        <img src="https://www.tikiti.acuteschool.com/images/events/IMA669428.jpeg" alt="" />
                        <div class="deetz --flex-row-j!sb">
                            <div class="event --flex-column">
                                <div class="date">3rd March 2017</div>
                                <div class="location -bold">Carnivore Grounds, (Nairobi, Kenya)</div>
                            </div>

                            <div class="price --flex-column">
                                <div class="label">Price</div>
                                <div class="cost -bold">Kes. 3,000</div>

                            </div>

                        </div>

                    </div>
                    <div class="rip"></div>
                    <div class="bottom --flex-row-j!sb">
                        <div class="barcode"><img src="barcode/temp/<?php echo $namafile1; ?>" width="100px"></div>
                        <a class="buy" href="#">silahkan scan barcode anda</a>
                        <br>
                    
                    <div class="rip"></div>
                    </div>
                    <div class="bottom --flex-row-j!sb">
                        <div class="barcode"></div>
                        <a class="buy" href="#">PRINT TICKET</a>
                        <br>

                    </div>
                    <br>
                    </center>
                </widget>
            </div>
        </div>
    </div>
            <?php } ?>

    <!-- ========================= FOOTER ========================= -->
    <!-- Library Scripts -->
    <?php
    include "footer.php";
    ?>

    <!-- ========================= FOOTER END // ========================= -->


    <!-- Library Script -->
    
    <?php
    include "bundle_script_enduser.php";
    ?>
    
</body>

</html>