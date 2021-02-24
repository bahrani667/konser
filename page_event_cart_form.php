<?php
  session_start();
  error_reporting(0);
  include "koneksi/koneksi.php";

$query = mysqli_query($konek, "SELECT max(pmb_id) as pmbTerbesar FROM tbl_pembeli");
$data = mysqli_fetch_array($query);
$pmbBarang = $data['pmbTerbesar'];
// mengambil angka dari kode barang terbesar, menggunakan fungsi substr dan diubah ke integer dengan (int)
$urutan = (int) substr($pmbBarang, 3, 3);
// nomor yang diambil akan ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;
// membuat kode barang baru
// string sprintf("%03s", $urutan); berfungsi untuk membuat string menjadi 3 karakter
// misalnya string sprintf("%03s", 22); maka akan menghasilkan '022'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya PC
$huruf = "PMB";
$pmbBarang = $huruf . sprintf("%03s", $urutan);
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
    </header>
    <!-- End Header Area -->
    <div class="white-space-30"></div>
    <!-- Start Event Card Area -->
    <section class="home-banner-area relative" id="home">
        <div class="container">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h3 class="mb-30">Form Data Pembeli</h3>
                        <form action="page_event_cart_form_proses.php" method="post">
                            <div class="mt-10">
                            <input type="hidden" name="pmb_id" placeholder="Nama Lengka" value="<?php echo $pmbBarang ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" required class="single-input">
                                <input type="text" name="pmb_nama" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" required class="single-input">
                            </div>
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa-credit-card" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select">
                                    <select style=" display: none;" name="pmb_identitas" >
                                        <option>---Kartu Identitas---</option>
                                        <option value="KTP ">KTP</option>
                                        <option value="SIM ">SIM</option>
                                        <option value="KTM ">KTM</option>

                                    </select>
                                    <div class="nice-select" tabindex="0"><span class="current">Kartu Identitas</span>
                                        <ul class="list">

                                            <li data-value="KTP " class="option">KTP</li>
                                            <li data-value="SIM " class="option">SIM</li>
                                            <li data-value="KTM " class="option">KTM</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10">
                                <input type="text" name="pmb_ktp" placeholder="No Identitas KTP/SIM/KTM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No Identitas KTP/SIM/KTM'" required class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="email" name="pmb_email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="pmb_tlp" placeholder="Notelepon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No Whatsapp'" required class="single-input">
                            </div>
                            <div class="mt-10">
                                <a href="page_event_invoice.php"><button type="submit" class="genric-btn primary circle">Checkout</button></a>
                            </div>
                        </form>
                    </div>
                    <aside class="col-lg-4">
                        <div class="card">
                            <div class="body">
                                <dl class="dlist-align">
                                    <dt>Your Item:</dt>
                                    <dd class="text-right">Event Lomba Makan</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Jumlah:</dt>
                                    <dd class="text-right">10</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Subtotal:</dt>
                                    <dd class="text-right">RP 20.000</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Admin fee:</dt>
                                    <dd class="text-right">$69.97</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Transaction Fee:</dt>
                                    <dd class="text-right text-danger">- Rp 10.000</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Bonus Item:</dt>
                                    <dd class="text-right">Kaos</dd>
                                </dl>
                                <hr>
                                <dl class="dlist-align">
                                    <dt>Total:</dt>
                                    <dd class="text-right text-dark b"><h5>#Rp 90.000</h5></dd>
                                </dl>
                            </div> <!-- card-body.// -->
                        </div> <!-- card.// -->

                    </aside> <!-- col.// -->
                </div>

                <script>
                    function myFunction() {
                        alert("Maaf Stok Tidak Cukup!");
                    }
                </script>


            </div>
    </section>
    <!-- End Event Card Area -->

    <section class="white-space">

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