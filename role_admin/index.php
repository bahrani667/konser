<?php
session_start();
if($_SESSION['user_level'] == ""){
    header("location:page_login.php?pesan=gagal");
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Dashboard</title>
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
                                            <a href="user-profile.htm">
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
                                        <p>Halo, Anda telah login sebagai <b><?php echo $_SESSION['user_level']; ?></b>.</p>
                                            <a href="../page_logout.php">
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
                                <li class="pcoded  pcoded-trigger">
                                    <a href="index.php">
                                        <span class="pcoded-micon active"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Management</div>
                            <ul class="pcoded-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-calendar"></i></span>
                                        <span class="pcoded-mtext">Event</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="Active">
                                            <a href="event.php">
                                                <span class="pcoded-mtext active">Semua</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext">Report</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="icon-font-awesome.htm">
                                                <span class="pcoded-mtext">Report Event</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-font-awesome.htm">
                                                <span class="pcoded-mtext">Report Revenue</span>
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
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded">
                                        <a href="dt_user.php">
                                            <span class="pcoded-micon "><i class="feather icon-user"></i></span>
                                            <span class="pcoded-mtext">User</span>
                                        </a>
                                    </li>
                                </ul>
                            </ul>

                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">

                                            <!-- statustic-card start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-yellow text-white">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <p class="m-b-5">New Customer</p>
                                                                <h4 class="m-b-0">852</h4>
                                                            </div>
                                                            <div class="col col-auto text-right">
                                                                <i class="feather icon-user f-50 text-c-yellow"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-green text-white">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <p class="m-b-5">Income</p>
                                                                <h4 class="m-b-0">$5,852</h4>
                                                            </div>
                                                            <div class="col col-auto text-right">
                                                                <i class="feather icon-credit-card f-50 text-c-green"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-pink text-white">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <p class="m-b-5">Ticket</p>
                                                                <h4 class="m-b-0">42</h4>
                                                            </div>
                                                            <div class="col col-auto text-right">
                                                                <i class="feather icon-book f-50 text-c-pink"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-blue text-white">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <p class="m-b-5">Orders</p>
                                                                <h4 class="m-b-0">$5,242</h4>
                                                            </div>
                                                            <div class="col col-auto text-right">
                                                                <i class="feather icon-shopping-cart f-50 text-c-blue"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- statustic-card start -->

                                            <!-- statustic-card start -->
                                            <div class="col-xl-8 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="card-header-left ">
                                                            <h5>Monthly View</h5>
                                                            <span class="text-muted">For more details about usage, please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block-big">
                                                        <div id="monthly-graph" style="height:250px"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card feed-card">
                                                    <div class="card-header">
                                                        <h5>Feeds</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row m-b-30">
                                                            <div class="col-auto p-r-0">
                                                                <i class="feather icon-bell bg-simple-c-blue feed-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted f-right f-13">Just Now</span></h6>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-30">
                                                            <div class="col-auto p-r-0">
                                                                <i class="feather icon-shopping-cart bg-simple-c-pink feed-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">New order received <span class="text-muted f-right f-13">Just Now</span></h6>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-30">
                                                            <div class="col-auto p-r-0">
                                                                <i class="feather icon-file-text bg-simple-c-green feed-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted f-right f-13">Just Now</span></h6>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-30">
                                                            <div class="col-auto p-r-0">
                                                                <i class="feather icon-shopping-cart bg-simple-c-pink feed-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">New order received <span class="text-muted f-right f-13">Just Now</span></h6>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-30">
                                                            <div class="col-auto p-r-0">
                                                                <i class="feather icon-file-text bg-simple-c-green feed-icon"></i>
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted f-right f-13">Just Now</span></h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- statustic-card start -->

                                            <!-- income start -->
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Total Leads</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <p class="text-c-green f-w-500"><i class="feather icon-chevrons-up m-r-5"></i> 18% High than last month</p>
                                                        <div class="row">
                                                            <div class="col-4 b-r-default">
                                                                <p class="text-muted m-b-5">Overall</p>
                                                                <h5>76.12%</h5>
                                                            </div>
                                                            <div class="col-4 b-r-default">
                                                                <p class="text-muted m-b-5">Monthly</p>
                                                                <h5>16.40%</h5>
                                                            </div>
                                                            <div class="col-4">
                                                                <p class="text-muted m-b-5">Day</p>
                                                                <h5>4.56%</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas id="tot-lead" height="150"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Total Vendors</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <p class="text-c-pink f-w-500"><i class="feather icon-chevrons-down m-r-15"></i> 24% High than last month</p>
                                                        <div class="row">
                                                            <div class="col-4 b-r-default">
                                                                <p class="text-muted m-b-5">Overall</p>
                                                                <h5>68.52%</h5>
                                                            </div>
                                                            <div class="col-4 b-r-default">
                                                                <p class="text-muted m-b-5">Monthly</p>
                                                                <h5>28.90%</h5>
                                                            </div>
                                                            <div class="col-4">
                                                                <p class="text-muted m-b-5">Day</p>
                                                                <h5>13.50%</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas id="tot-vendor" height="150"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Invoice Generate</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <p class="text-c-green f-w-500"><i class="feather icon-chevrons-up m-r-15"></i> 20% High than last month</p>
                                                        <div class="row">
                                                            <div class="col-4 b-r-default">
                                                                <p class="text-muted m-b-5">Overall</p>
                                                                <h5>68.52%</h5>
                                                            </div>
                                                            <div class="col-4 b-r-default">
                                                                <p class="text-muted m-b-5">Monthly</p>
                                                                <h5>28.90%</h5>
                                                            </div>
                                                            <div class="col-4">
                                                                <p class="text-muted m-b-5">Day</p>
                                                                <h5>13.50%</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <canvas id="invoice-gen" height="150"></canvas>
                                                </div>
                                            </div>
                                            <!-- income end -->

                                            <!-- ticket and update start -->
                                            <div class="col-xl-6 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Recent Tickets</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Status</th>
                                                                        <th>Subject</th>
                                                                        <th>Department</th>
                                                                        <th>Date</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><label class="label label-success">open</label></td>
                                                                        <td>Website down for one week</td>
                                                                        <td>Support</td>
                                                                        <td>Today 2:00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-primary">progress</label></td>
                                                                        <td>Loosing control on server</td>
                                                                        <td>Support</td>
                                                                        <td>Yesterday</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-danger">closed</label></td>
                                                                        <td>Authorizations keys</td>
                                                                        <td>Support</td>
                                                                        <td>27, Aug</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-success">open</label></td>
                                                                        <td>Restoring default settings</td>
                                                                        <td>Support</td>
                                                                        <td>Today 9:00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-primary">progress</label></td>
                                                                        <td>Loosing control on server</td>
                                                                        <td>Support</td>
                                                                        <td>Yesterday</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-success">open</label></td>
                                                                        <td>Restoring default settings</td>
                                                                        <td>Support</td>
                                                                        <td>Today 9:00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-danger">closed</label></td>
                                                                        <td>Authorizations keys</td>
                                                                        <td>Support</td>
                                                                        <td>27, Aug</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-success">open</label></td>
                                                                        <td>Restoring default settings</td>
                                                                        <td>Support</td>
                                                                        <td>Today 9:00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><label class="label label-primary">progress</label></td>
                                                                        <td>Loosing control on server</td>
                                                                        <td>Support</td>
                                                                        <td>Yesterday</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div class="text-right m-r-20">
                                                                <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-12">
                                                <div class="card latest-update-card">
                                                    <div class="card-header">
                                                        <h5>Latest Updates</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="latest-update-box">
                                                            <div class="row p-t-20 p-b-30">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">2 hrs ago</p>
                                                                    <i class="feather icon-twitter bg-info update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>+ 1652 Followers</h6>
                                                                    <p class="text-muted m-b-0">You’re getting more and more followers, keep it up!</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">4 hrs ago</p>
                                                                    <i class="feather icon-briefcase bg-simple-c-pink update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>+ 5 New Products were added!</h6>
                                                                    <p class="text-muted m-b-0">Congratulations!</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">1 day ago</p>
                                                                    <i class="feather icon-check bg-simple-c-yellow  update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>Database backup completed!</h6>
                                                                    <p class="text-muted m-b-0">Download the <span class="text-c-blue">latest backup</span>.</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-0">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">2 day ago</p>
                                                                    <i class="feather icon-facebook bg-simple-c-green update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>+2 Friend Requests</h6>
                                                                    <p class="text-muted m-b-10">This is great, keep it up!</p>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-hover">
                                                                            <tr>
                                                                                <td class="b-none">
                                                                                    <a href="#!" class="align-middle">
                                                                                        <img src="..\files\assets\images\avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                        <div class="d-inline-block">
                                                                                            <h6>Jeny William</h6>
                                                                                            <p class="text-muted m-b-0">Graphic Designer</p>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="b-none">
                                                                                    <a href="#!" class="align-middle">
                                                                                        <img src="..\files\assets\images\avatar-1.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                                        <div class="d-inline-block">
                                                                                            <h6>John Deo</h6>
                                                                                            <p class="text-muted m-b-0">Web Designer</p>
                                                                                        </div>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ticket and update end -->

                                            <!-- latest activity end -->
                                            <div class="col-xl-8 col-md-12">
                                                <div class="card latest-activity-card">
                                                    <div class="card-header">
                                                        <h5>Latest Activity</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="latest-update-box">
                                                            <div class="row p-t-20 p-b-30">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">just now</p>
                                                                    <i class="feather icon-sunrise bg-simple-c-blue update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>John Deo</h6>
                                                                    <p class="text-muted m-b-15">The trip was an amazing and a life changing experience!!</p>
                                                                    <img src="..\files\assets\images\mega-menu\01.jpg" alt="" class="img-fluid img-100 m-r-15 m-b-10">
                                                                    <img src="..\files\assets\images\mega-menu\03.jpg" alt="" class="img-fluid img-100 m-r-15 m-b-10">
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">5 min ago</p>
                                                                    <i class="feather icon-file-text bg-simple-c-blue update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>Administrator</h6>
                                                                    <p class="text-muted m-b-0">Free courses for all our customers at A1 Conference Room - 9:00 am tomorrow!</p>
                                                                </div>
                                                            </div>
                                                            <div class="row p-b-30">
                                                                <div class="col-auto text-right update-meta">
                                                                    <p class="text-muted m-b-0 d-inline">3 hours ago</p>
                                                                    <i class="feather icon-map-pin bg-simple-c-blue update-icon"></i>
                                                                </div>
                                                                <div class="col">
                                                                    <h6>Jeny William</h6>
                                                                    <p class="text-muted m-b-15">Happy Hour! Free drinks at <span class="text-c-blue">Cafe-Bar all </span>day long!</p>
                                                                    <div id="markers-map" style="height:200px;width:100%"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="text-right">
                                                            <a href="#!" class=" b-b-primary text-primary">View all Activity</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card per-task-card">
                                                    <div class="card-header">
                                                        <h5>Your Tasks</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row per-task-block text-center">
                                                            <div class="col-6">
                                                                <div data-label="45%" class="radial-bar radial-bar-45 radial-bar-lg radial-bar-primary"></div>
                                                                <h6 class="text-muted">Finished</h6>
                                                                <p class="text-muted">642</p>
                                                                <button class="btn btn-primary btn-round btn-sm">Manage</button>
                                                            </div>
                                                            <div class="col-6">
                                                                <div data-label="30%" class="radial-bar radial-bar-30 radial-bar-lg radial-bar-primary"></div>
                                                                <h6 class="text-muted">Remaining</h6>
                                                                <p class="text-muted">495</p>
                                                                <button class="btn btn-primary btn-outline-primary btn-round btn-sm">Manage</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="card feed-card">
                                                    <div class="card-header">
                                                        <h5>Upcoming Deadlines</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row m-b-25">
                                                            <div class="col-auto p-r-0">
                                                                <img src="..\files\assets\images\mega-menu\01.jpg" alt="" class="img-fluid img-50">
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">New able - Redesign</h6>
                                                                <p class="text-c-pink m-b-0">2 Days Remaining</p>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-25">
                                                            <div class="col-auto p-r-0">
                                                                <img src="..\files\assets\images\mega-menu\02.jpg" alt="" class="img-fluid img-50">
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">New Admin Dashboard</h6>
                                                                <p class="text-c-pink m-b-0">Proposal in 6 Days</p>
                                                            </div>
                                                        </div>
                                                        <div class="row m-b-25">
                                                            <div class="col-auto p-r-0">
                                                                <img src="..\files\assets\images\mega-menu\03.jpg" alt="" class="img-fluid img-50">
                                                            </div>
                                                            <div class="col">
                                                                <h6 class="m-b-5">Logo Design</h6>
                                                                <p class="text-c-green m-b-0">10 Days Remaining</p>
                                                            </div>
                                                        </div>

                                                        <div class="text-center">
                                                            <a href="#!" class="b-b-primary text-primary">View all Feeds</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- latest activity end -->
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