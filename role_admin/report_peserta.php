<?php
include "auth.php";
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
            
            <?php
            include "navbar.php";
            ?>


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
                                <li class="pcoded ">
                                    <a href="event.php">
                                        <span class="pcoded-micon "><i class="feather icon-calendar"></i></span>
                                        <span class="pcoded-mtext">Event</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">

                                <li class="pcoded-hasmenu pcoded-trigger">
                                    <a href="javascript:void(0)">

                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext">Report</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="report_event.php">
                                                <span class="pcoded-mtext">Report Penjualan</span>
                                            </a>
                                        </li>

                                    </ul>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="report_peserta.php">
                                                <span class="pcoded-mtext">Data Peserta</span>
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



                            </ul>

                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="page-header">
                                            <div class="row align-items-end">
                                                <div class="col-lg-8">
                                                    <div class="page-header-title">
                                                        <div class="d-inline">
                                                            <h4>Data Peserta</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="page-header-breadcrumb">
                                                        <ul class="breadcrumb-title">
                                                            <li class="breadcrumb-item">
                                                                <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                            </li>
                                                            <li class="breadcrumb-item"><a href="#!">Report</a>
                                                            </li>
                                                            <li class="breadcrumb-item"><a href="#!">Data Peserta</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-block">
                                                            <div class="dt-responsive table-responsive">
                                                                <table id="excel-bg" class="table table-striped table-bordered nowrap">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Position</th>
                                                                            <th>Office</th>
                                                                            <th>Age</th>
                                                                            <th>Start date</th>
                                                                            <th>Salary</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Tiger Nixon</td>
                                                                            <td>System Architect</td>
                                                                            <td>Edinburgh</td>
                                                                            <td>61</td>
                                                                            <td>2011/04/25</td>
                                                                            <td>$320,800</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Garrett Winters</td>
                                                                            <td>Accountant</td>
                                                                            <td>Tokyo</td>
                                                                            <td>63</td>
                                                                            <td>2011/07/25</td>
                                                                            <td>$170,750</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Ashton Cox</td>
                                                                            <td>Junior Technical Author</td>
                                                                            <td>San Francisco</td>
                                                                            <td>66</td>
                                                                            <td>2009/01/12</td>
                                                                            <td>$86,000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Cedric Kelly</td>
                                                                            <td>Senior Javascript Developer</td>
                                                                            <td>Edinburgh</td>
                                                                            <td>22</td>
                                                                            <td>2012/03/29</td>
                                                                            <td>$433,060</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Airi Satou</td>
                                                                            <td>Accountant</td>
                                                                            <td>Tokyo</td>
                                                                            <td>33</td>
                                                                            <td>2008/11/28</td>
                                                                            <td>$162,700</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Brielle Williamson</td>
                                                                            <td>Integration Specialist</td>
                                                                            <td>New York</td>
                                                                            <td>61</td>
                                                                            <td>2012/12/02</td>
                                                                            <td>$372,000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Herrod Chandler</td>
                                                                            <td>Sales Assistant</td>
                                                                            <td>San Francisco</td>
                                                                            <td>59</td>
                                                                            <td>2012/08/06</td>
                                                                            <td>$137,500</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Rhona Davidson</td>
                                                                            <td>Integration Specialist</td>
                                                                            <td>Tokyo</td>
                                                                            <td>55</td>
                                                                            <td>2010/10/14</td>
                                                                            <td>$327,900</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Colleen Hurst</td>
                                                                            <td>Javascript Developer</td>
                                                                            <td>San Francisco</td>
                                                                            <td>39</td>
                                                                            <td>2009/09/15</td>
                                                                            <td>$205,500</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Sonya Frost</td>
                                                                            <td>Software Engineer</td>
                                                                            <td>Edinburgh</td>
                                                                            <td>23</td>
                                                                            <td>2008/12/13</td>
                                                                            <td>$103,600</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Jena Gaines</td>
                                                                            <td>Office Manager</td>
                                                                            <td>London</td>
                                                                            <td>30</td>
                                                                            <td>2008/12/19</td>
                                                                            <td>$90,560</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Quinn Flynn</td>
                                                                            <td>Support Lead</td>
                                                                            <td>Edinburgh</td>
                                                                            <td>22</td>
                                                                            <td>2013/03/03</td>
                                                                            <td>$342,000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Charde Marshall</td>
                                                                            <td>Regional Director</td>
                                                                            <td>San Francisco</td>
                                                                            <td>36</td>
                                                                            <td>2008/10/16</td>
                                                                            <td>$470,600</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Haley Kennedy</td>
                                                                            <td>Senior Marketing Designer</td>
                                                                            <td>London</td>
                                                                            <td>43</td>
                                                                            <td>2012/12/18</td>
                                                                            <td>$313,500</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Tatyana Fitzpatrick</td>
                                                                            <td>Regional Director</td>
                                                                            <td>London</td>
                                                                            <td>19</td>
                                                                            <td>2010/03/17</td>
                                                                            <td>$385,750</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Michael Silva</td>
                                                                            <td>Marketing Designer</td>
                                                                            <td>London</td>
                                                                            <td>66</td>
                                                                            <td>2012/11/27</td>
                                                                            <td>$198,500</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Paul Byrd</td>
                                                                            <td>Chief Financial Officer (CFO)</td>
                                                                            <td>New York</td>
                                                                            <td>64</td>
                                                                            <td>2010/06/09</td>
                                                                            <td>$725,000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Gloria Little</td>
                                                                            <td>Systems Administrator</td>
                                                                            <td>New York</td>
                                                                            <td>59</td>
                                                                            <td>2009/04/10</td>
                                                                            <td>$237,500</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Bradley Greer</td>
                                                                            <td>Software Engineer</td>
                                                                            <td>London</td>
                                                                            <td>41</td>
                                                                            <td>2012/10/13</td>
                                                                            <td>$132,000</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Dai Rios</td>
                                                                            <td>Personnel Lead</td>
                                                                            <td>Edinburgh</td>
                                                                            <td>35</td>
                                                                            <td>2012/09/26</td>
                                                                            <td>$217,500</td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Position</th>
                                                                            <th>Office</th>
                                                                            <th>Age</th>
                                                                            <th>Start date</th>
                                                                            <th>Salary</th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="styleSelector"></div>
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