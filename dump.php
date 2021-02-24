    <!-- Start Event Card Area -->
    <section class="relative">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <?php
                        $queryevent = mysqli_query($konek, "SELECT*FROM tbl_event, tbl_period, tbl_ticket WHERE tbl_event. event_id='$event_id'");
                        if ($queryevent == false) {
                            die("Terjadi Kesalahan : " . mysqli_error($konek));
                        }
                        while ($event = mysqli_fetch_array($queryevent)) {

                        ?>
                        <?php
                            $event_picture      =  $event['event_picture'];
                            $event_name         =  $event['event_name'];
                            $event_category     =  $event['event_category'];
                            $event_desc         =  $event['event_description'];
                            $event_date_start   =   date('d M yy', strtotime($event['event_date_start']));
                            $event_date_finish  =   date('d M yy', strtotime($event['event_date_finish']));
                            $event_time_start   =   date('H:i', strtotime($event['event_time_start']));
                            $event_time_finish  =   date('H:i', strtotime($event['event_time_finish']));
                            $event_location     =  $event['event_location'];

                            $period_id          =  $event['period_id'];
                            $tkt_id             =  $event['tkt_id'];
                            $tkt_category       =  $event['tkt_category'];
                        }
                        ?>
                        <section class="home-banner-area relative" id="home">
                            <div class="col-lg-12 col-md-6 col-xs-6">
                                <div class="section-top-border">
                                    <img src="img/event_banner/<?php echo $event_picture; ?>" class="img-fluid" alt="Responsive image">
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="row">
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
            </div>
            <div class="row">
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
                                        <p class="card-text-detail"><?php echo $event_desc ?>
                                        </p>
                                    </div>
                                </section>



                                <section id="kategori" class="tab-panel">
                                    <div class="container">
                                        <div class="row">
                                            <?php
                                            $queryticket = mysqli_query($konek, "SELECT*FROM tbl_ticket WHERE tkt_id='$tkt_id'");
                                            if ($queryticket == false) {
                                                die("Terjadi Kesalahan : " . mysqli_error($konek));
                                            }
                                            while ($ticket = mysqli_fetch_array($queryticket)) {

                                            ?>
                                                <div class="col-md-8">
                                                    <article class="card-ticket fl-left">
                                                        <section class="date">
                                                            <time datetime="23th feb">
                                                                <span></span>
                                                            </time>
                                                        </section>
                                                        <section class="card-cont">
                                                            <small><?php echo $ticket['tkt_category']; ?></small><br>
                                                            <i class="fa fa-map-marker"></i>
                                                            <p>nexen square for people australia, sydney</p>
                                                            <a href="page_event_cart_list.php?=<?php echo $ticket['tkt_id']; ?>" class="genric-btn  circle">Add</a>

                                                        </section>
                                                    </article>
                                                </div>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="card">
                        <?php
                        $queryperiod = mysqli_query($konek, "SELECT*FROM tbl_period WHERE event_id='$event_id' ORDER BY period_date ASC ");
                        if ($queryperiod == false) {
                            die("Terjadi Kesalahan : " . mysqli_error($konek));
                        }
                        while ($period = mysqli_fetch_array($queryperiod)) {

                        ?>
                            <div class="blockquotes">
                                <blockquote class="generic-blockquote">
                                    <h5 class="card-content-h4 bg-btn-secondary"><?php echo $period['period_name']; ?></h5>
                                    <span class="card-content-span"><?php echo date('d M Y', strtotime($period['period_date'])); ?></span>
                                </blockquote>
                            </div>
                        <?php } ?>
                    </div>
                </div>


            </div>


    </section>