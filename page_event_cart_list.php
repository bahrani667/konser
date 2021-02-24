<?php

session_start();
include "koneksi/koneksi.php";
error_reporting(0);




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
            <?php if ($_SESSION['message'] != "") : ?>
                <div class="row">
                    <aside class="col-lg-8">
                        <div class="alert alert-success">
                            <?= $_SESSION['message'] ?>
                        </div>
                    </aside>
                </div>
                <?php $_SESSION['message'] = "" ?>
            <?php endif ?>
            <div class="row">
                <aside class="col-lg-8">
                    <div class="card">
                        <table class="table  table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col">Event Name</th>
                                    <th scope="col" width="120">Price (Unit)</th>
                                    <th scope="col" width="120">Class</th>
                                    <th scope="col" width="120">Quantity</th>
                                    <th scope="col" width="120">Price</th>
                                    <th scope="col" width="120">Admin Fee</th>
                                    <th scope="col" class="text-right" width="200"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($_SESSION['cart'] as $list) {
                                    $id = $list['id'];
                                    $query = "SELECT * FROM `tbl_ticket`
                                            INNER JOIN `tbl_period` ON `tbl_ticket`.`period_id`=`tbl_period`.`period_id`
                                            INNER JOIN `tbl_event` ON `tbl_period`.`event_id`=`tbl_event`.`event_id`
                                            WHERE `tbl_ticket`.`tkt_id`='{$id}'";
                                    // var_dump($query);
                                    $res = mysqli_query($konek, $query);
                                    foreach ($res as $row) {
                                ?>
                                        <tr>
                                            <td style="width:35%;">
                                                <figure class="itemside align-items-center">
                                                    <figcaption class="info">
                                                        <h5><a href="#" class="title text-dark"><?= $row['event_name'] ?></a></h5>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td style="width:20%;">
                                                <div class="price-wrap">
                                                    <var class="price text-horizontal-middle">IDR <?= number_format($row['tkt_price']) ?></var>
                                                </div> <!-- price-wrap .// -->
                                            </td>
                                            <td style="width:5%;">
                                                <figure class="itemside align-items-right">
                                                    <figcaption class="info">
                                                        <p class="small text-muted"><?= $row['tkt_category'] ?></p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td style="width:5%;">
                                                <select class="form-control">
                                                  
                                                    <option value="1" <?= ($list['qty'] == 1) ? "selected" : "" ?>>1</option>
                                                    <option value="2" <?= ($list['qty'] == 2) ? "selected" : "" ?>>2</option>
                                                </select>
                                            </td>
                                            <td style="width:15%;">
                                                <div class="price-wrap">
                                                    <var class="price text-horizontal-middle">IDR <?= number_format($row['tkt_price'] * $list['qty']) ?></var>
                                                </div> <!-- price-wrap .// -->
                                            </td>
                                            <td style="width:15%;">
                                                <div class="price-wrap">
                                                    <var class="price text-horizontal-middle">IDR <?= $row['tkt_ppn'] ?></var>
                                                </div> <!-- price-wrap .// -->
                                            </td>
                                            <td class="text-right" style="width:5%;">
                                                <a href="del_cart_proses.php?id=<?= $list['id'] ?>" class="btn btn-light btn-round">x</a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } ?>
                            </tbody>

                        </table>

                        <div class="card-body border-top">

                        </div> <!-- card-body.// -->

                    </div> <!-- card.// -->

                </aside> <!-- col.// -->
                <aside class="col-lg-4">

                    <?php
                    $total_price = 0;
                    $admin_price = 0;
                    foreach ($_SESSION['cart'] as $list) {
                        $id = $list['id'];
                        $query = "SELECT * FROM `tbl_ticket`
                                  INNER JOIN `tbl_period` ON `tbl_ticket`.`period_id`=`tbl_period`.`period_id`
                                  INNER JOIN `tbl_event` ON `tbl_period`.`event_id`=`tbl_event`.`event_id`
                                  WHERE `tbl_ticket`.`tkt_id`='{$id}'";
                        // var_dump($query);
                        $res = mysqli_query($konek, $query);
                        foreach ($res as $row) {
                            $total_price += ($list['qty'] * $row['tkt_price']);
                            $admin_price += ($list['qty'] * $row['tkt_ppn']);
                        }
                    } ?>
                    <div class="card">
                        <div class="card-body">
                            <dl class="dlist-align">
                                <dt>Total price:</dt>
                                <dd class="text-right">IDR <?= number_format($total_price) ?></dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Admin Fee:</dt>
                                <dd class="text-right text-danger">IDR <?= number_format($admin_price) ?></dd>
                            </dl>
                            <dl class="dlist-align">
                                <dt>Total:</dt>
                                <dd class="text-right text-dark b"><strong>IDR <?= number_format($total_price + $admin_price) ?></strong></dd>
                            </dl>
                            <hr>
                            
                            <a href="page_event_cart_form.php" class="genric-btn primary btn-block circle"> Lanjut Pesan -> </a>

                        </div> <!-- card-body.// -->
                    </div> <!-- card.// -->

                </aside> <!-- col.// -->

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