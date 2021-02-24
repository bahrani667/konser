<?php

session_start();
error_reporting(0);
include "../koneksi/koneksi.php";


$event_id = $_GET["id"];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Member | Dashboard</title>
    <!-- Library CSS -->
    <?php
    include "../bundle_css.php";
    ?>

</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index.php">
                            <img class="img-fluid" src="..\files\assets\images\logo.png" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="..\files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Fifi</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="..\files\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="..\files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="..\files\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>Fifi</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user_profil.php">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.htm">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.htm">
                                                <i class="feather icon-lock"></i> Lock Screen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-normal-sign-in.htm">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-inner-header">
                                <div class="back_chatBox">
                                    <div class="right-icon-control">
                                        <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                        <div class="form-icon">
                                            <i class="icofont icofont-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="..\files\assets\images\avatar-3.jpg" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="..\files\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="..\files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="..\files\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="..\files\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-chevron-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="..\files\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="..\files\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="feather icon-navigation"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Menu</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded">
                                    <a href="index.php">
                                        <span class="pcoded-micon "><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Management</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded pcoded-trigger">
                                    <a href="event.php">
                                        <span class="pcoded-micon "><i class="feather icon-calendar"></i></span>
                                        <span class="pcoded-mtext">Event</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">

                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext">Report</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="report_event.php">
                                                <span class="pcoded-mtext">Report Event</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="report_event.php">
                                                <span class="pcoded-mtext">Report Checkin</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-command"></i></span>
                                        <span class="pcoded-mtext">Withdraw</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="icon-font-awesome.htm">
                                                <span class="pcoded-mtext">Status</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>

                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>Event</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Event</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="page-body">

                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <?php
                                                    $queryevent = mysqli_query($konek, "SELECT*FROM tbl_event where event_id='$event_id'");
                                                    if ($queryevent == false) {
                                                        die("Terjadi Kesalahan : " . mysqli_error($konek));
                                                    }
                                                    while ($event = mysqli_fetch_array($queryevent)) {
                                                    ?>

                                                        <div class="carousel slide">
                                                            <div class="carousel-inner" role="listbox">
                                                                <div class="carousel-item active">
                                                                    <img class="d-block img-fluid w-100" src="../img/event_banner/<?php echo $event['event_picture']; ?>" alt="First slide">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-lg-12"><br>
                                                            <div class="row m-b-20 p-l-35 ">
                                                                <div class="col col-md-10">
                                                                    <span>
                                                                        <h6 class="card-content-h6"><?php echo $event['event_name']; ?></h6>
                                                                    </span>
                                                                    <span class="card_detail_kategori"><?php echo $event['event_category']; ?></span>
                                                                </div>
                                                                <div class="col col-md-2">
                                                                    <button type="button" class="text-sm-right btn btn-secondary btn-sm waves-effect p-l-100" data-toggle="modal" data-target="#ModalEditStatus"><i class="fa fa-pencil"></i>Edit Status</button>

                                                                </div>
                                                                <!-- Edit Status -->
                                                                <div class="modal fade" id="ModalEditStatus" tabindex="-1" role="dialog">
                                                                    <div class="modal-dialog" role="document">
                                                                        <form action="event_edit_status.php" name="modal_popup" method="POST">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title">Edit Status</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    <input type="hidden" class="form-control" value="<?php echo $ticket2['tkt_id']; ?>">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-4 col-form-label">Ubah Status</label>
                                                                                        <div class="col-sm-8">
                                                                                            <select name="event_status" class="form-control">
                                                                                                <option value="Active">Active</option>
                                                                                                <option value="Cancel">Cancel</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light ">Save</button>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <hr>
                                                            <div class="row m-b-20 p-l-35 ">
                                                                <div class="col-6 col-md-5">
                                                                    <span class="card_detail_admin card-position">Tanggal & Waktu</span><br>
                                                                    <span class="card-content-span"><i class="fa fa-calendar "></i>&nbsp;&nbsp;<?php echo date('d M y', strtotime($event['event_date_start'])); ?> - <?php echo date('d M y', strtotime($event['event_date_finish'])); ?></span><br>
                                                                    <span class="card-content-span"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo date('H:i', strtotime($event['event_time_start'])); ?> - <?php echo date('H:i', strtotime($event['event_time_finish'])); ?> </span>
                                                                </div>
                                                                <div class="col-6 col-md-5">
                                                                    <span class="card_detail_admin">Lokasi</span><br>
                                                                    <span class="card-content-span"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $event['event_location']; ?></span><br>
                                                                </div>
                                                                <div class="col-6 col-md-2">
                                                                    <span class="card_detail_admin">Status</span><br>
                                                                    <span class="card-content-span"><i class="fa fa-ticket"></i>&nbsp;&nbsp;<?php echo $event['event_status']; ?></span><br>
                                                                </div>
                                                            </div>

                                                        </div>
                                                </div>

                                                <!-- Modal period -->
                                                <!-- ADD period -->
                                                <div class="modal fade" id="ModalAddperiod" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <form action="event_period_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
                                                            <div class="modal-content">
                                                                <div class="modal-header">

                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <input type="HIDDEN" name="period_id" class="form-control" value="<?php echo $prdTerbesar; ?>">
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-4 col-form-label">Nama period</label>
                                                                        <div class="col-sm-8">


                                                                            <input type="text" name="period_name" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-4 col-form-label">Tanggal period</label>
                                                                        <div class="col-sm-8">
                                                                            <div class="input-daterange input-group" id="datepicker01">
                                                                                <input type="text" class="input-sm form-control" name="period_date" placeholder="">
                                                                                <span class="input-group-addon ">
                                                                                    <span class="fa fa-calendar"></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php $event1 = $event['event_id']; ?>
                                                                    <input type="hidden" name="event_id" class="form-control" value="<?php echo $event1 ?>">
                                                                </div>
                                                                <div class="modal-footer">

                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light ">Save</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <!-- ADD period END -->

                                                <div class="tab-content">
                                                    <div class="card">
                                                        <div class="card-block box-list p-l-40">
                                                            <h4 class="sub-title ">Detail Event</h4>
                                                            <div class="form-group row">
                                                                <div class="col-sm-12">

                                                                </div>
                                                            </div>
                                                        <?php $tampilevent_id =  $event['event_id'];
                                                    } ?>

                                                        <div class="row">

                                                            <?php

                                                            $queryperiod = mysqli_query($konek, "SELECT*FROM tbl_period WHERE  event_id='$event_id'");
                                                            if ($queryperiod == false) {
                                                                die("Terjadi Kesalahan : " . mysqli_error($konek));
                                                            }
                                                            while ($period = mysqli_fetch_array($queryperiod)) {
                                                            ?>

                                                                <div class="col-lg-6">
                                                                    <div class="p-l-20 p-r-20 p-t-20 z-depth-bottom-0 waves-effect" data-toggle="tooltip" data-placement="top" title="period">
                                                                        <div class="row">
                                                                            <div class="col-10 col-md-10">
                                                                                <a href="event_detail_ticket.php?id=<?php echo $period['period_id']; ?>"><span class="card_detail_admin card-position">#<?php echo $period['period_name']; ?></span><br></span>
                                                                                    <span class="card-content-span">Opening Date<br><i class="fa fa-calendar "></i>&nbsp;&nbsp;<?php echo date('d M Y', strtotime($period['period_date'])); ?>&nbsp;<i class="fa fa-pencil" data-toggle="modal" data-target="#ModalEditperiod<?php echo $period['period_id']; ?>"></i></span><br><br>
                                                                                    <span class="card_detail_admin">#Ticket</span><br>
                                                                                    <span class="card-content-span"><i class="fa fa-ticket fa-lg"></i>&nbsp;&nbsp;VIP</span><br>

                                                                                    <!-- Modal period Edit -->
                                                                                    <div class="modal fade" id="ModalEditperiod<?php echo $period['period_id']; ?>" tabindex="-1" role="dialog">
                                                                                        <div class="modal-dialog" role="document">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h4 class="modal-title">Edit period</h4>
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                        <span aria-hidden="true">&times;</span>
                                                                                                    </button>
                                                                                                </div>
                                                                                                <form action="event_periode_edit_proses.php" method="POST" enctype="multipart/form-data">
                                                                                                    <div class="modal-body">
                                                                                                        <div class="form-group row">
                                                                                                            <label class="col-sm-4 col-form-label">Nama period</label>
                                                                                                            <div class="col-sm-8">
                                                                                                                <input type="hidden" class="form-control" name="period_id" value="<?php echo $period['period_id']; ?>">
                                                                                                                <input type="text" class="form-control" name="period_name" value="<?php echo $period['period_name']; ?>">


                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group row">
                                                                                                            <label class="col-sm-4 col-form-label">Tanggal period</label>
                                                                                                            <div class="col-sm-8">
                                                                                                                <div class="input-daterange input-group" id="datepicker11">
                                                                                                                    <input type="text" class="input-sm form-control" name="period_date" placeholder=" " value="<?php echo date('d M y', strtotime($period['period_date'])); ?>">
                                                                                                                    <span class="input-group-addon ">
                                                                                                                        <span class="fa fa-calendar"></span>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                                <input type="hidden" class="form-control" name="event_id" value="<?php echo $period['event_id']; ?>">

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="modal-footer">

                                                                                                        <button type="submit" class="btn btn-primary waves-effect waves-light ">Save</button>
                                                                                                    </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Modal period Edit -->
                                                                                    
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Library Scripts -->
    <?php
    include "../bundle_script.php";
    ?>

    </script>
</body>

</html>