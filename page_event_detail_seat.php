<?php
session_start();
error_reporting(0);
include "koneksi/koneksi.php";

$query = mysqli_query($konek, "SELECT max(pmb_id) as setTerbesar FROM tbl_seat");
$data = mysqli_fetch_array($query);
$setBarang = $data['setTerbesar'];
// mengambil angka dari kode barang terbesar, menggunakan fungsi substr dan diubah ke integer dengan (int)
$urutan = (int) substr($setBarang, 3, 3);
// nomor yang diambil akan ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;
// membuat kode barang baru
// string sprintf("%03s", $urutan); berfungsi untuk membuat string menjadi 3 karakter
// misalnya string sprintf("%03s", 22); maka akan menghasilkan '022'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya PC
$huruf = "PMB";
$setBarang = $huruf . sprintf("%03s", $urutan);
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">


<head>
    <title>Artatix - Cart Seat</title>
    <!-- Library CSS -->
    <?php
    include "bundle_css_enduser.php";
    ?>
</head>

<style>
    #Username {
        border: none;

    }

    .screen {
        width: 100%;
        height: 20px;
        background: #4388cc;
        color: #fff;
        line-height: 20px;
        font-size: 15px;
    }

    .smallBox::before {
        content: ".";
        width: 15px;
        height: 15px;
        float: left;
        margin-right: 10px;
    }

    .greenBox::before {
        content: "";
        background: Green;
    }

    .redBox::before {
        content: "";
        background: Red;
    }

    .emptyBox::before {
        content: "";
        box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        background-color: #ccc;
    }

    .seats {
        border: 1px solid red;
        background: yellow;
    }



    .seatGap {
        width: 40px;
    }

    .seatVGap {
        height: 40px;
    }

    table {
        text-align: center;
        overflow: auto;
    }


    .Displaytable {
        text-align: center;
    }

    .Displaytable td,
    .Displaytable th {
        border: 1px solid;
        text-align: center;
        position: inherit;
    }

    textarea {
        border: none;
        background: transparent;
    }



    input[type=checkbox] {
        width: 0px;
        margin-right: 18px;
    }

    input[type=checkbox]:before {
        content: "";
        width: 15px;
        height: 15px;
        display: inline-block;
        vertical-align: middle;
        text-align: center;
        box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
        background-color: #ccc;
    }

    input[type=checkbox]:checked:before {
        background-color: Green;
        font-size: 15px;
    }
</style>

<body onload="onLoaderFunc()">

    <div class="container">
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
                                <li><a href="page_kategori.php">Kategori Event</a></li>
                                <li><a href="page_contact.php">Hubungi Kami</a></li>
                                <li><a href="page_login.php">Login</a></li>
                            </ul>
                        </nav>
                        <!--######## #nav-menu-container -->
                    </div>
                </div>
            </div>
        </header>

        <section class=" pt-50" id="home">
            <div class="row fluid">

                <div class="col-md-6">
                    <div class="card">
                        <div class="inputForm">
                            <?php
                                $querypmb = mysqli_query($konek, "SELECT*FROM tbl_pembeli ");
                                if ($querypmb == false) {
                                    die("Terjadi Kesalahan : " . mysqli_error($konek));
                                }
                                while ($pmb = mysqli_fetch_array($querypmb)) {
                                ?>
                            ?>
                            <?php
                                $nama = $pmb['pmb_nama'];
                            ?>
                            <div class="mt-10">
                                <input type="text" id="Username" placeholder="Name" onfocus="this.placeholder = ''" 
                                onblur="this.placeholder = 'Name'" required class="single-input" value="<?php echo $nama; ?>" readonly>
                            </div>
                            <?php
                                }
                            ?>
                            <div class="mt-10">
                                <input type="Number" id="Numseats" placeholder="QTY" onfocus="this.placeholder = ''" onblur="this.placeholder = 'QTY'" required class="single-input" value="" readonly>
                            </div>
                            <div class="mt-10">
                                <button onclick="takeData()" class="genric-btn danger circle medium">Start Seat</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="col-md-10 text-left">
                            <h1></h1>
                            <div class="row m-b-20 p-l-35 ">
                                <div class="col-md-12">
                                    <h3>Lomba Makan Kerupuk</h3>
                                    <span class="card-content-span">&nbsp;VIP</span>
                                    <hr>
                                </div>

                                <div class="col-6 col-md-5">

                                    <span class="card_detail_admin card-position">Tanggal & Waktu</span><br>
                                    <span class="card-content-span"><i class="fa fa-calendar "></i>&nbsp;&nbsp; - </span><br>
                                    <span class="card-content-span"><i class="fa fa-clock-o"></i>&nbsp;&nbsp; - </span>
                                </div>
                                <div class="col-6 col-md-5">
                                    <span class="card_detail_admin">Lokasi</span><br>
                                    <span class="card-content-span"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;</span><br>
                                </div>
                                <div class="col-6 col-md-2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <div class="card">
            <div class=" row fluid">
                <div class="col-md-6">
                    <center>
                        <div class="seatStructure">
                            <div class=" table-responsive">
                                <table id="seatsBlock">
                                    <p id="notification"></p>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td></td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>
                                        <td>12</td>
                                    </tr>

                                    <tr>
                                        <td>A</td>
                                        <td><input type="checkbox" class="seats" value="A1"></td>
                                        <td><input type="checkbox" class="seats" value="A2"></td>
                                        <td><input type="checkbox" class="seats" value="A3"></td>
                                        <td><input type="checkbox" class="seats" value="A4"></td>
                                        <td><input type="checkbox" class="seats" value="A5"></td>
                                        <td class="seatGap"></td>
                                        <td><input type="checkbox" class="seats" value="A6"></td>
                                        <td><input type="checkbox" class="seats" value="A7"></td>
                                        <td><input type="checkbox" class="seats" value="A8"></td>
                                        <td><input type="checkbox" class="seats" value="A9"></td>
                                        <td><input type="checkbox" class="seats" value="A10"></td>
                                        <td><input type="checkbox" class="seats" value="A11"></td>
                                        <td><input type="checkbox" class="seats" value="A12"></td>
                                    </tr>

                                    <tr>
                                        <td>B</td>
                                        <td><input type="checkbox" class="seats" value="B1"></td>
                                        <td><input type="checkbox" class="seats" value="B2"></td>
                                        <td><input type="checkbox" class="seats" value="B3"></td>
                                        <td><input type="checkbox" class="seats" value="B4"></td>
                                        <td><input type="checkbox" class="seats" value="B5"></td>
                                        <td></td>
                                        <td><input type="checkbox" class="seats" value="B6"></td>
                                        <td><input type="checkbox" class="seats" value="B7"></td>
                                        <td><input type="checkbox" class="seats" value="B8"></td>
                                        <td><input type="checkbox" class="seats" value="B9"></td>
                                        <td><input type="checkbox" class="seats" value="B10"></td>
                                        <td><input type="checkbox" class="seats" value="B11"></td>
                                        <td><input type="checkbox" class="seats" value="B12"></td>
                                    </tr>

                                    <tr>
                                        <td>C</td>
                                        <td><input type="checkbox" class="seats" value="C1"></td>
                                        <td><input type="checkbox" class="seats" value="C2"></td>
                                        <td><input type="checkbox" class="seats" value="C3"></td>
                                        <td><input type="checkbox" class="seats" value="C4"></td>
                                        <td><input type="checkbox" class="seats" value="C5"></td>
                                        <td></td>
                                        <td><input type="checkbox" class="seats" value="C6"></td>
                                        <td><input type="checkbox" class="seats" value="C7"></td>
                                        <td><input type="checkbox" class="seats" value="C8"></td>
                                        <td><input type="checkbox" class="seats" value="C9"></td>
                                        <td><input type="checkbox" class="seats" value="C10"></td>
                                        <td><input type="checkbox" class="seats" value="C11"></td>
                                        <td><input type="checkbox" class="seats" value="C12"></td>
                                    </tr>

                                    <tr>
                                        <td>D</td>
                                        <td><input type="checkbox" class="seats" value="D1"></td>
                                        <td><input type="checkbox" class="seats" value="D2"></td>
                                        <td><input type="checkbox" class="seats" value="D3"></td>
                                        <td><input type="checkbox" class="seats" value="D4"></td>
                                        <td><input type="checkbox" class="seats" value="D5"></td>
                                        <td></td>
                                        <td><input type="checkbox" class="seats" value="D6"></td>
                                        <td><input type="checkbox" class="seats" value="D7"></td>
                                        <td><input type="checkbox" class="seats" value="D8"></td>
                                        <td><input type="checkbox" class="seats" value="D9"></td>
                                        <td><input type="checkbox" class="seats" value="D10"></td>
                                        <td><input type="checkbox" class="seats" value="D11"></td>
                                        <td><input type="checkbox" class="seats" value="D12"></td>
                                    </tr>

                                    <tr>
                                        <td>E</td>
                                        <td><input type="checkbox" class="seats" value="E1"></td>
                                        <td><input type="checkbox" class="seats" value="E2"></td>
                                        <td><input type="checkbox" class="seats" value="E3"></td>
                                        <td><input type="checkbox" class="seats" value="E4"></td>
                                        <td><input type="checkbox" class="seats" value="E5"></td>
                                        <td></td>
                                        <td><input type="checkbox" class="seats" value="E6"></td>
                                        <td><input type="checkbox" class="seats" value="E7"></td>
                                        <td><input type="checkbox" class="seats" value="E8"></td>
                                        <td><input type="checkbox" class="seats" value="E9"></td>
                                        <td><input type="checkbox" class="seats" value="E10"></td>
                                        <td><input type="checkbox" class="seats" value="E11"></td>
                                        <td><input type="checkbox" class="seats" value="E12"></td>
                                    </tr>

                                    <tr class="seatVGap"></tr>

                                    <tr>
                                        <td>F</td>
                                        <td><input type="checkbox" class="seats" value="F1"></td>
                                        <td><input type="checkbox" class="seats" value="F2"></td>
                                        <td><input type="checkbox" class="seats" value="F3"></td>
                                        <td><input type="checkbox" class="seats" value="F4"></td>
                                        <td><input type="checkbox" class="seats" value="F5"></td>
                                        <td></td>
                                        <td><input type="checkbox" class="seats" value="F6"></td>
                                        <td><input type="checkbox" class="seats" value="F7"></td>
                                        <td><input type="checkbox" class="seats" value="F8"></td>
                                        <td><input type="checkbox" class="seats" value="F9"></td>
                                        <td><input type="checkbox" class="seats" value="F10"></td>
                                        <td><input type="checkbox" class="seats" value="F11"></td>
                                        <td><input type="checkbox" class="seats" value="F12"></td>
                                    </tr>

                                    <tr>
                                        <td>G</td>
                                        <td><input type="checkbox" class="seats" value="G1"></td>
                                        <td><input type="checkbox" class="seats" value="G2"></td>
                                        <td><input type="checkbox" class="seats" value="G3"></td>
                                        <td><input type="checkbox" class="seats" value="G4"></td>
                                        <td><input type="checkbox" class="seats" value="G5"></td>
                                        <td></td>
                                        <td><input type="checkbox" class="seats" value="G6"></td>
                                        <td><input type="checkbox" class="seats" value="G7"></td>
                                        <td><input type="checkbox" class="seats" value="G8"></td>
                                        <td><input type="checkbox" class="seats" value="G9"></td>
                                        <td><input type="checkbox" class="seats" value="G10"></td>
                                        <td><input type="checkbox" class="seats" value="G11"></td>
                                        <td><input type="checkbox" class="seats" value="G12"></td>
                                    </tr>

                                    <tr>
                                        <td>H</td>
                                        <td><input type="checkbox" class="seats" value="H1"></td>
                                        <td><input type="checkbox" class="seats" value="H2"></td>
                                        <td><input type="checkbox" class="seats" value="H3"></td>
                                        <td><input type="checkbox" class="seats" value="H4"></td>
                                        <td><input type="checkbox" class="seats" value="H5"></td>
                                        <td></td>
                                        <td><input type="checkbox" class="seats" value="H6"></td>
                                        <td><input type="checkbox" class="seats" value="H7"></td>
                                        <td><input type="checkbox" class="seats" value="H8"></td>
                                        <td><input type="checkbox" class="seats" value="H9"></td>
                                        <td><input type="checkbox" class="seats" value="H10"></td>
                                        <td><input type="checkbox" class="seats" value="H11"></td>
                                        <td><input type="checkbox" class="seats" value="H12"></td>
                                    </tr>

                                    <tr>
                                        <td>I</td>
                                        <td><input type="checkbox" class="seats" value="I1"></td>
                                        <td><input type="checkbox" class="seats" value="I2"></td>
                                        <td><input type="checkbox" class="seats" value="I3"></td>
                                        <td><input type="checkbox" class="seats" value="I4"></td>
                                        <td><input type="checkbox" class="seats" value="I5"></td>
                                        <td></td>
                                        <td><input type="checkbox" class="seats" value="I6"></td>
                                        <td><input type="checkbox" class="seats" value="I7"></td>
                                        <td><input type="checkbox" class="seats" value="I8"></td>
                                        <td><input type="checkbox" class="seats" value="I9"></td>
                                        <td><input type="checkbox" class="seats" value="I10"></td>
                                        <td><input type="checkbox" class="seats" value="I11"></td>
                                        <td><input type="checkbox" class="seats" value="I12"></td>
                                    </tr>

                                    <tr>
                                        <td>J</td>
                                        <td><input type="checkbox" class="seats" value="J1"></td>
                                        <td><input type="checkbox" class="seats" value="J2"></td>
                                        <td><input type="checkbox" class="seats" value="J3"></td>
                                        <td><input type="checkbox" class="seats" value="J4"></td>
                                        <td><input type="checkbox" class="seats" value="J5"></td>
                                        <td></td>
                                        <td><input type="checkbox" class="seats" value="J6"></td>
                                        <td><input type="checkbox" class="seats" value="J7"></td>
                                        <td><input type="checkbox" class="seats" value="J8"></td>
                                        <td><input type="checkbox" class="seats" value="J9"></td>
                                        <td><input type="checkbox" class="seats" value="J10"></td>
                                        <td><input type="checkbox" class="seats" value="J11"></td>
                                        <td><input type="checkbox" class="seats" value="J12"></td>
                                    </tr>


                                </table>
                                <br /><button class="genric-btn primary btn-sm circle" onclick="updateTextArea()">Confirm</button>
                            </div>
                    </center>
                </div>
            
            <div class="col-md-6">

                <div class="displayerBoxes">

                    <table class="Displaytable table-responsive">
                        <tr>
                            <th>Name</th>
                            <th>Number of Seats</th>
                            <th>Seats</th>
                        </tr>
                        <tr>
                            <td><textarea id="nameDisplay"></textarea></td>
                            <td><textarea id="NumberDisplay"></textarea></td>
                            <td><textarea id="seatsDisplay"></textarea></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>




    </center>
    </div>
    <!-- End Header Area -->

    </div>

</body>

<!-- Library Scripts -->

<!-- ========================= FOOTER ========================= -->
<!-- Library Scripts -->
<?php
include "footer.php";
?>

<?php
include "bundle_script_enduser.php";
?>



</html>