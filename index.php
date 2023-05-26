<?php require"header.php";
	ob_start();
	session_start();
	date_default_timezone_set('UTC');
	include "includes/config.php";
	if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
	    header("location: login");
	    exit();
	}
	$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
	?>
<style>
    .scroll-area-lg {
        height: 400px;
        overflow-x: hidden;
    }
 
    .scrollbar-sidebar,
    .scrollbar-container {
        position: relative;
        height: 100%;
    }
 
    .ps {
        overflow: hidden !important;
        overflow-anchor: none;
        touch-action: auto;
    }
 
    .heading {
        font-size: 16px;
        font-weight: bold;
    }
 
    .fa-plus-circle {
        color: green;
    }
 
    #tour {
        font-family: 'Raleway', sans-serif;
    }
</style>
 
<body class="them loading">
    <link rel="stylesheet" href="/buyer/layout/css/flexslider5.css" type="text/css">
    <script src="/buyer/layout/js/jquery.flexslider-min.js"></script>
    <style>
        #tour {
            font-family: 'Raleway', sans-serif;
        }
 
        #tour .flexslider {
            margin: 0 0 60px;
            background: #fff;
            border: 0px solid #fff;
            position: relative;
            zoom: 0;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
            -webkit-box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
            -o-box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
            box-shadow: '' 0 0px 0px rgba(0, 0, 0, 0.2);
        }
 
 
 
        #tour .flex-control-paging li a {
            width: 11px;
            height: 11px;
            display: block;
            background: #fff !important;
            border: 1px solid #3c8dbc;
            background: rgba(0, 0, 0, 0.5);
            cursor: pointer;
            text-indent: -9999px;
            -webkit-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
            -moz-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
            -o-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
            box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
        }
 
        #tour .flex-control-paging li a.flex-active {
            background: #3c8dbc !important;
        }
 
        #tour .modal-body {
            padding: 0px;
        }
 
        #tour .modal-footer {
            background: #fafafa;
            border: 0px;
        }
 
        #tour .flex-caption {
            padding: 20px 100px 20px 100px;
            text-align: center;
        }
 
        #tour .flex-caption .heading {
            font-weight: 600;
            font-size: 20px;
            color: #505050;
            padding-bottom: 15px;
        }
 
        #tour .flex-caption .caption-content {
            font-size: 15px;
            color: #505050;
        }
    </style>
 
    <div class="modal fade top" id="mod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
 
            <div class="modal-content">
 
                <div class="modal-body">
                    <div id="bodyTicket" class="row d-flex justify-content-center align-items-center">
                        <span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new replay ticket</span>
                        <a type="button" href="tickets" class="btn btn-success">Show tickets
                        </a>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
 
 
    <div class="modal fade top" id="modalrep" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
 
            <div class="modal-content">
 
                <div class="modal-body">
                    <div id="bodyreport" class="row d-flex justify-content-center align-items-center">
                        <span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new replay report</span>
                        <a type="button" href="reports" class="btn btn-danger">Show reports
                        </a>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
 
 
    <div class="modal fade top" id="modalreps" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
 
            <div class="modal-content">
 
                <div class="modal-body">
                    <div id="bodyreport" class="row d-flex justify-content-center align-items-center">
                        <span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new report</span>
                        <a type="button" href="./seller/reports" class="btn btn-danger">Show reports
                        </a>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
 
 
 
    <div class="modal fade top" id="modalrepss" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-danger" role="document">
 
            <div class="modal-content">
 
                <div class="modal-body">
                    <div id="bodyreport" class="row d-flex justify-content-center align-items-center">
                        <span class="pt-3 mx-4" style="font-size: 14 px"><b>You have new replay report</span>
                        <a type="button" href="./seller/reports" class="btn btn-danger">Show reports
                        </a>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
    <script defer src="/buyer/layout/js/jquery.flexslider.js"></script>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12" style="text-align:center;"><a href="shell"><img style="border: 3px solid;" src="buyer/layout/images/shells.gif"></a></div>
                <div class="col-lg-3 col-md-6 col-sm-12" style="text-align:center;"><a href="smtp"><img style="border: 3px solid;" src="buyer/layout/images/smtps.gif"></a></div>
                <div class="col-lg-3 col-md-6 col-sm-12" style="text-align:center;"><a href="accounts-7"><img style="border: 3px solid;" src="buyer/layout/images/accs.gif"></a></div>
            </div><br>
            <div class="header-body">
 
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Balance</h5>
                                        <span class="h2 font-weight-bold mb-0">
                                            0 </span>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fa fa-money-bill-alt "></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-nowrap"><a href="addBalance"> [Add Funds] </a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Orders</h5>
                                        <span class="h2 font-weight-bold mb-0">0
                                    </div>
                                    <div class="col-md-2">
                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-nowrap"><a href="orders"> [ Show ] </a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Tickets</h5>
                                        <span class="h2 font-weight-bold mb-0">0
                                    </div>
                                    <div class="col-md-2">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <i class="fa fa-cog"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-nowrap"><a href="tickets"> [ Show ]</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="card card-stats" style="background-color: #fb3!important;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Reports</h5>
                                        <span class="h2 font-weight-bold mb-0">
                                            0 <span>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fas fa-receipt"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-nowrap"><a href="reports"> [ Show ]</a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
 
            <div class="main-home mt-5 mb-5">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                            <div class="card-header">
                                <i class="fas fa-user-shield"></i>
                                Welcome <a class="badge badge-pill badge-success">hustlersfather</a><br>
                            </div>
                            <div class="card-body" style="color: var(--font-color); background-color: var(--color-card);">
                                <br>
                                If you have any Question ,Problem, Suggestion or Request Please feel free to Open a
                                <a href="tickets" class="btn btn-success btn-sm"> New Ticket <i class="fa fa-paper-plane"></i></a>
                                <br>
                                if you want to report an order , just go to <a class="btn btn-success btn-sm" data-title="My Orders" href="orders"> My Orders <i class="fa fa-shopping-cart"></i></a> then click on Report #[Order Id] button.
                                <br>
                                Our Domains are <p><span style="color: #ff0000;"><strong>odinshop.io</strong> || <strong>odin.pw</strong> || <strong>odinshop.se</strong> || <strong>odin.pm</strong> ||</span><strong><span style="color: #ff0000;">Tor Mirror odinshoyi3y5clejn3klyggxrmq5sy5efdiremz353z6ucdujgdiccad.onion ||</span> </strong></p> - Please Save them!
                                <br>
                                <a href="https://odinshop.se/Tos.php" data-title="Terms Of Service " class="btn btn-primary btn-sm"> Terms Of Service <i class="fa fa-newspaper-o"></i></a>
                                <br>
                            </div>
                        </div>
                        <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                            <div class="card-header">
                                <i class="fas fa-users"></i>
                                Invite Users<br>
                            </div>
                            <div class="card-body" style="color: var(--font-color); background-color: var(--color-card);">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-sm-12">
                                        <div class="input-group mb-3" style="align-items: center;">
                                            <input type="text" class="form-control form-control-lg" id="code_user" value="https://odinshop.io/?referral=18229" disabled>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary copydiv" data-clipboard-text="https://odinshop.io/?referral=18229" type="button">COPY</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3" style=" align-items: center; display: flex; ">
                                        <p style=" color: #000; font-size: 18px; font-weight: bold; ">Total Bonus :- </p>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3" style=" align-items: center; display: flex; ">
                                        <p style=" color: #000; font-size: 18px; font-weight: bold; ">Total Referrals :- 0</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                            <div class="card-header">
                                <i class="fas fa-newspaper"></i>
                                Our News
                            </div>
                            <div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
                                <ul>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>News buyer</b></span><span><small><b>2023/05/19 01:09:56</small></span></b>
                                        <br>Limited Time offer Credit 500$+ and enjoy 20% bonus
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>News buyer</b></span><span><small><b>2023/03/01 05:13:01</small></span></b>
                                        <br>New Premium Section Available Best for SEO Users , now you have the Ability to see the full domain and server info before purchase + many more Features Check it out in the premium section , More Features will be added to it soon
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>News buyer</b></span><span><small><b>2022/08/24 06:56:08</small></span></b>
                                        <br>We are currently working to improve the checkers in all sections ,, stay tuned good things are coming.
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>New section</b></span><span><small><b>2022/08/02 09:30:54</small></span></b>
                                        <br>Bulk Offers Section has been activated ,, you can buy bulk tools with cheap prices 50% Off, Visit our new section and enjoy the sellers offers.
                                        https://odinshop.io/offers
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Report time</b></span><span><small><b>2022/07/29 01:18:06</small></span></b>
                                        <br>Dear Buyers
                                        report/refund time increased to 12hours to give our buyers time to report their bad items, also please rate your purchases to help other buyers and help us to flag the bad sellers and remove them from our platform
                                        we are here to serve you ,If you have any questions , please don't hesitate to contact us if you have any problem with one of our sellers message us.
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Seller apply</b></span><span><small><b>2022/02/03 07:07:04</small></span></b>
                                        <br>now you can upgrade your account to seller status and start selling with us instantly without support tickets,,for more information visit https://odinshop.io/become-seller
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Requests</b></span><span><small><b>2021/11/20 08:39:24</small></span></b>
                                        <br>Odin's offers you the peace of mind you need to make any purchase. We’ll not release the funds to the Seller until you have received the item and are satisfied with the transaction. We also make sure the Seller provides the required information for the transaction.
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Update</b></span><span><small><b>2021/11/06 08:43:23</small></span></b>
                                        <br>Now you can rate \ review \ comment about the item you've purchased go to MyOrders or Report Items and choose Rate Seller and submit your comment / rate ,, rating will help other clients to easily find the good sellers you can also check the seller's profile by clicking on seller's number button in blue color inside of sections
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Update</b></span><span><small><b>2021/08/03 07:52:03</small></span></b>
                                        <br>CMS / Technology detectors installed in cPanel & Shell sections to extract the platform [ Wordpress - Joomla - Drupal - WooCommerce - etc.. ] and extract back side technologies such as [ Laravel - Codeigniter - Yii - Zend - Vue JS - React Js - etc.. ] plus extract Server Technologies such as [ Apache - Nginx - MySQL - Tomcat - etc..] and more updates coming soon.
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Email</b></span><span><small><b>2020/10/14 04:57:06</small></span></b>
                                        <br>Dear users please use a VALID email in your profile incase you lost your password so you can recover it.
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Warning</b></span><span><small><b>2020/04/06 06:18:01</small></span></b>
                                        <br>Orders will be automatically refunded after 6hours of the report time if the seller didnt replay.
                                        <br>
                                    </li>
                                    <li class='mb-2'><span class='btn btn-info btn-sm mr-2 mt-1 mb-1'><b>Free bonus $</b></span><span><small><b>2020/03/17 06:14:10</small></span></b>
                                        <br>every time your deposit starts from $50 you will receive a 5% bonus.
                                        <br>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3 pb-1">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="added-tab" data-toggle="tab" data-target="#added" type="button" role="tab" aria-controls="added" aria-selected="true">Latest Added Tools</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="sold-tab" data-toggle="tab" data-target="#sold" type="button" role="tab" aria-controls="sold" aria-selected="false">Latest Sold Tools</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade  show active" id="added" role="tabpanel" aria-labelledby="added-tab">
                                    <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                                        <div class="card-header">
                                            <i class="fas fa-table"></i>
                                            Latest 10 Added Tools
                                        </div>
                                        <div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
                                            <div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
                                                <div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
                                                    <div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
                                                        <ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>4</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">
                                                                            cpanel </a></b></font> section.
                                                                By <b>Seller397</b>, 2023-05-26 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>57</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">
                                                                            cpanel </a></b></font> section.
                                                                By <b>Seller341</b>, 2023-05-26 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>38</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="shell">
                                                                            shell </a></b></font> section.
                                                                By <b>Seller460</b>, 2023-05-26 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>113</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">
                                                                            cpanel </a></b></font> section.
                                                                By <b>Seller254</b>, 2023-05-26 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>6</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">
                                                                            cpanel </a></b></font> section.
                                                                By <b>Seller341</b>, 2023-05-25 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>11</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">
                                                                            cpanel </a></b></font> section.
                                                                By <b>Seller389</b>, 2023-05-25 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>12</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="shell">
                                                                            shell </a></b></font> section.
                                                                By <b>Seller460</b>, 2023-05-25 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>28</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">
                                                                            cpanel </a></b></font> section.
                                                                By <b>Seller309</b>, 2023-05-25 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>9</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">
                                                                            cpanel </a></b></font> section.
                                                                By <b>Seller476</b>, 2023-05-25 </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>35</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">
                                                                            cpanel </a></b></font> section.
                                                                By <b>Seller397</b>, 2023-05-25 </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sold" role="tabpanel" aria-labelledby="sold-tab">
                                    <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                                        <div class="card-header">
                                            <i class="fas fa-table"></i>
                                            Latest 10 Sold Tools
                                        </div>
                                        <div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
                                            <div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
                                                <div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
                                                    <div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
                                                        <ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller376</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer18047</b>, 2023-05-26 09:03:37
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller376</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer15241</b>, 2023-05-26 08:57:02
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller382</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="smtp">smtp</a></b></font> To <b>Buyer21588</b>, 2023-05-26 08:52:04
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller471</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="smtp">smtp</a></b></font> To <b>Buyer21588</b>, 2023-05-26 08:47:45
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller474</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer4760</b>, 2023-05-26 08:21:43
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller309</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">premium_shell</a></b></font> To <b>Buyer21644</b>, 2023-05-26 08:09:28
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller420</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">premium_shell</a></b></font> To <b>Buyer21644</b>, 2023-05-26 08:01:43
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller353</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer21506</b>, 2023-05-26 07:19:41
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller376</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer21506</b>, 2023-05-26 07:00:09
                                                            </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                <b>Seller376</b> Sold <font color="green"><b>
                                                                        <a class="text-success" href="cPanel">cpanel</a></b></font> To <b>Buyer21506</b>, 2023-05-26 06:57:45
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 pb-1">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="offer-tab" data-toggle="tab" data-target="#offer" type="button" role="tab" aria-controls="offer" aria-selected="true">Latest Sellers Offers</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="request-tab" data-toggle="tab" data-target="#request" type="button" role="tab" aria-controls="request" aria-selected="false">Latest Buyers Requests</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade  show active" id="offer" role="tabpanel" aria-labelledby="offer-tab">
                                    <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                                        <div class="card-header">
                                            <i class="fas fa-table"></i>
                                            Latest 10 Added Sellers Offers
                                        </div>
                                        <div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
                                            <div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
                                                <div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
                                                    <div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
                                                        <ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>100 mixed shells</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="offers">Offers</a></b></font> section.
                                                                By <b>Seller447</b>, 19/01/2023 05:15:10 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Fully Verified CashApp Account BTC Enable</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="offers">Offers</a></b></font> section.
                                                                By <b>Seller466</b>, 02/01/2023 12:56:28 am </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Fully Verified Wise Account [Business] [id+pass+email+documents]</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="offers">Offers</a></b></font> section.
                                                                By <b>Seller466</b>, 02/01/2023 12:51:15 am </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>ETH, BSC, MATIC Drainer</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="offers">Offers</a></b></font> section.
                                                                By <b>Seller455</b>, 03/11/2022 06:41:27 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Creation of PMTA and SMTP for turnkey distribution</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="offers">Offers</a></b></font> section.
                                                                By <b>Seller455</b>, 03/11/2022 06:37:35 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>ETH Drainer</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="offers">Offers</a></b></font> section.
                                                                By <b>Seller447</b>, 04/10/2022 08:05:59 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>20 cpanels mixed country</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="offers">Offers</a></b></font> section.
                                                                By <b>Seller447</b>, 26/09/2022 03:10:22 pm </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="request" role="tabpanel" aria-labelledby="request-tab">
                                    <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                                        <div class="card-header">
                                            <i class="fas fa-table"></i>
                                            Latest 10 Added Buyers Requests
                                        </div>
                                        <div class="card-body " style="color: var(--font-color); background-color: var(--color-card);">
                                            <div id="roncaa" style="color: var(--font-color); background-color: var(--color-card);">
                                                <div class="scroll-area-lg" style="color: var(--font-color); background-color: var(--color-card);">
                                                    <div class="scrollbar-container ps--active-y" style="color: var(--font-color); background-color: var(--color-card);">
                                                        <ul class="list-group list-group-flush" style="color: var(--font-color); background-color: var(--color-card);">
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Need kagoya smtp</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer12709</b>, 2023/05/22 15:51:20 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>I want a paid zoominfo account</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer12709</b>, 2023/05/22 15:49:40 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Office 365</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer10605</b>, 2023/05/21 17:18:08 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Webmails - cPanel</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer21686</b>, 2023/05/14 03:15:24 am </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>I want to buy a paid or unpaid zoominfo account</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer12709</b>, 2023/05/12 09:17:40 am </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>.EDU ADMIN</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer15241</b>, 2023/05/07 02:00:20 am </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>[WTB] subdomain creation access to high authority websites</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer21446</b>, 2023/05/04 05:11:34 am </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Netflix account needed</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer16482</b>, 2023/04/30 15:13:27 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>KAGOYA SMTO</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer15241</b>, 2023/04/26 21:18:19 pm </li>
                                                            <li class="list-group-item" style="color: var(--font-color); background-color: var(--color-card);">
                                                                Added <font color="red"><b>Accounts/No MFA for passport.aliyun.com</b></font> items in The <font color="green"><b>
                                                                        <a class="text-success" href="requests">Requests</a></b></font> section.
                                                                By <b>Buyer7560</b>, 2023/04/04 19:30:12 pm </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 pb-1" style="color: var(--font-color); background-color: var(--color-card);">
                            <div class="card-header">
                                <i class="fab fa-btc"></i>
                                Become Seller
                            </div>
                            <div class="card-body payment_methods" style="color: var(--font-color); background-color: var(--color-card);">
                                Interested in becoming a <b>Seller <i class="fab fa-btc">
                                    </i></b> at OdinShop ?
                                <a href="become-seller" class="btn btn-primary">
                                    Become a Seller & Seller Rules<i class="fab fa-btc"></i>
                                </a>
                                <br><br>
                                Available Payment Methods
                                <br>
                                <a href="addBalance"><img src="buyer/layout/images/pmlogo2.png" height="48" width="49" title="PerfectMoney" /></a>
                                <a href="addBalance"><img src="buyer/layout/images/btclogo.png" height="48" width="49" title="Bitcoin" /></a>
                                <a href="addBalance"><img src="buyer/layout/images/ltclogo.png" height="48" width="49" title="Litecoin" /></a>
                                <a href="addBalance"><img src="buyer/layout/images/bnb.png" height="48" width="49" title="Binance Token" /></a>
                                <a href="addBalance"><img src="buyer/layout/images/ethereum.png" height="48" width="49" title="Etherum" /></a>
                                <a href="addBalance"><img src="buyer/layout/images/trc.png" height="48" width="49" title="Tether [USDT/TRC20]" /></a>
                                <a href="addBalance"><img src="buyer/layout/images/bch.png" height="48" width="49" title="Bitcoin Cash" /></a>
                                <a href="addBalance"><img src="buyer/layout/images/dgc.jpg" height="48" width="49" title="Dogecoin" /></a>
                                <a href="addBalance"><img src="buyer/layout/images/monero.png" height="48" width="49" title="Monero" /></a>
                                <a href="addBalance"><img src="buyer/layout/images/erc20.png" height="58" width="59" title="USDT.ERC20" /></a>
                            </div>
                        </div>
                        <div class="card mb-3" style="color: var(--font-color); background-color: var(--color-card);">
                            <div class="card-header">
                                <i class="fas fa-chart-pie"></i>
                                Our Stuff
                            </div>
                            <div class="card-body" style="color: var(--font-color); background-color: var(--color-card);">
                                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                        </div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:200%;height:200%;left:0; top:0">
                                        </div>
                                    </div>
                                </div>
                                <canvas id="myPieChart" width="278" height="278" style="display: block; width: 278px; height: 278px;" class="chartjs-render-monitor"></canvas>
                            </div>
                            <div class="card-footer small text-primary" style="color: var(--font-color); background-color: var(--color-card);">Page Loaded in 1.0885 Seconds</div>
                        </div>
                    </div>
                </div>
            </div>
 
            <script type="text/javascript">

            </script>
 
            <script type="text/javascript" src="buyer/layout/js/Chart.min.js"></script>
            <script>
                var clipboard = new Clipboard('.copydiv');
            </script>
            <script type="text/javascript">
                // Set new default font family and font color to mimic Bootstrap's default styling
l
            </script>
        </div>
    </div>
</body>
 
</html>