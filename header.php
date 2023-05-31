<?php
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
 <!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Main - home</title>
<link rel="stylesheet" href="../buyer/layout/css/bootstrap.min.css">
<link rel="stylesheet" href="../buyer/layout/css/all.min.css">
<link rel="stylesheet" href="../buyer/layout/css/main.css">
<link rel="stylesheet" href="../buyer/layout/css/util.css">
<script type="text/javascript" src="../buyer/layout/js/jquery-3.4.1-min.js"></script>
<script type="text/javascript" src="../buyer/layout/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../buyer/layout/js/bootbox.min.js"></script>
<script type="text/javascript" src="../buyer/js/jquery.datatables.min.js"></script>
<font face="Arial">
<link rel="stylesheet" href="../buyer/layout/css/bootstrap.min.css">
     <style>

.alert.alert-info {
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
    box-shadow: 0 1px 2px rgba(0,0,0,.2);
}


.alert {
    margin-bottom: 20px;
    margin-top: 0;
    color: var(--font-color);
    border-width: 0;
    border-left-width: 5px;
    padding: 10px;
    border-radius: 0;
}

.alert.alert-danger {
    border-color: #df5138;
    background-color: #2196f3;
}

.teddy-text {
  background: #f2f1ef;
  padding: 1.2em 1em;
  border-radius: 5px 5px 0px 0px;
}   

.teddy-follow {
  background: #17C0FB;
  padding: 0.7em 0em 0.7em 0em;
}
.teddy-followred {
  background: #D41010;
  padding: 0.7em 0em 0.7em 0em;
}
</style>
<style>
.content {
	display:td :
    th;
}

</style>
    <script>
    var v_aa =0;
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        if (v_aa == 1) {
          $("#menu-toggle").html('<span class="glyphicon glyphicon-indent-right"></span>').show();
          v_aa =0;
        }
        else {
          $("#menu-toggle").html('<span class="glyphicon glyphicon-indent-left"></span>').show();
          v_aa =1;     
        }
        
    });

    </script>
    <script>
	$(function() {
		$(".preload").fadeOut(500, function() {
			$(".content").fadeIn(0);
		});
	});
</script> 
     <div class="preload">
<div id="mydiv"><img src="assets/wait.gif" class="ajax-loader"></div>  

  </div>
 	<div class="content">
<br><br>

<script type="text/javascript">
    function ajaxinfo(){
      $.ajax({
      type:       'GET',
      url:        'ajaxinfo.html',
      timeout: 10000 ,

           success: function(data){
              if (data != '01'){
                var data = JSON.parse(data);
                  for (var prop in data) {
                  $("#"+prop).html(data[prop] ).show();
                }
              }
              else {
                window.location = "logout.html";
              }
           }
         });

  }
    setInterval(function(){ajaxinfo()}, 3000);

 ajaxinfo();
	</script>
</head>


<body>


<body class="hold-transition sidebar-mini layout-fixed  ">
    <div class="wrapper">
        <input type="hidden" id="sr" value="0" c="0" />
        <input type="hidden" id="cr" value="0" />
        <input type="hidden" id="tr" value="0" />
        <input type="hidden" id="ch" value="0" />
        <input type="hidden" id="sidemob" value="0" />
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/home" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="/balance">Balance
                        <span class="badge-pill bg-primary" id="balance">$ 0.00</span>
                        <span class="fa fa-plus"></span>
                    </a>
                </li>
            </ul>
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input name="q" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit" id="searchbtn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link ref" href="#">
                        <i class="fas fa-redo-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge" id="m_notification"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div id="messages">
                        </div>
                        <a href="messages" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge" id="notification"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">
                            <span class="notifi" id="notification">0</span> Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="/tickets" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> Tickets
                            <span class="float-right text-muted text-sm"><span class="badge badge-success" id="tickets_n" data-toggle="tooltip" title="You didn't reply">0</span> <span class="badge badge-danger" id="tickets_r" data-toggle="tooltip" title="You replied">0</span></span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="/reports" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> Reports
                            <span class="float-right text-muted text-sm"><span class="badge badge-success" id="reports_n" data-toggle="tooltip" title="You didn't reply">0</span> <span class="badge badge-danger" id="reports_r" data-toggle="tooltip" title="You replied">0</span></span>
                        </a>
                        <div class="p_requests" hidden="true">
                            <div class="dropdown-divider"></div>
                            <a href="/request-products" class="dropdown-item">
                                <i class="fas fa-plus-circle mr-2"></i> Product Requests
                                <span class="float-right text-muted text-sm"><span class="badge badge-success" id="p_requests">0</span></span>
                            </a>
                        </div>
                        <div class="s_orders" hidden="true">
                            <div class="dropdown-divider"></div>
                            <a href="/service-orders" class="dropdown-item">
                                <i class="fas fa-suitcase mr-2"></i> Service Orders
                                <span class="float-right text-muted text-sm"><span class="badge badge-success" id="sorders_n" data-toggle="tooltip" title="You didn't reply">0</span> <span class="badge badge-danger" id="sorders_r" data-toggle="tooltip" title="You replied">0</span></span>
                            </a>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="/notifications" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item" id="side-button">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button" id="sidebar-button">
                        <i class="fas fa-user-circle"></i><span class="badge badge-success navbar-badge" id="orders_p"></span>
                    </a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="/home" class="brand-link">
                <img src="/dist/img/LuFixLogo.png" alt="luFix Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">LuFix Store</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/dist/img/avatar0.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="/settings" class="d-block">Skybaddes<span style="margin-left:8.6em;"></span></a>
                    </div>
                </div>
 
 
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
 
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu">
                        <li class="nav-item has-treeview">
                            <a href="/home" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/request-products" class="nav-link">
                                <i class="nav-icon fas fa-plus-circle"></i>
                                <p>
                                    Request Products
                                    <span class="badge badge-danger right">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/lufix-services" class="nav-link">
                                <i class="nav-icon fas fa-suitcase"></i>
                                <p>
                                    LuFix Services
                                    <span class="badge badge-info right">317</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Hosts
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">42186</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/shells" class="nav-link">
                                        <i class="fas fa-terminal nav-icon"></i>
                                        <p>Shells
                                            <span class="badge badge-primary right">10669</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/cpanels" class="nav-link">
                                        <i class="fab fa-cpanel nav-icon"></i>
                                        <p>cPanels<span class="badge badge-primary right">26172</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/rdps" class="nav-link">
                                        <i class="fas fa-laptop nav-icon"></i>
                                        <p>Rdps
                                            <span class="badge badge-primary right">1373</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/ssh" class="nav-link">
                                        <i class="fas fa-sitemap nav-icon"></i>
                                        <p>SSH/WHM
                                            <span class="badge badge-primary right">3972</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-paper-plane"></i>
                                <p>
                                    Send
                                    <i class="right fas fa-angle-left"></i>
                                    <span class="badge badge-info right">85304</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/mailers" class="nav-link">
                                        <i class="far fa-paper-plane nav-icon"></i>
                                        <p>Mailers
                                            <span class="badge badge-primary right">1905</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/smtps" class="nav-link">
                                        <i class="fas fa-reply-all nav-icon"></i>
                                        <p>SMTPs
                                            <span class="badge badge-primary right">83399</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Leads
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">121697</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/leads" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Leads
                                            <span class="badge badge-primary right">121697</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Checked Leads" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Checked Leads
                                            <span class="badge badge-primary right">842</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Emails Only" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Emails Only
                                            <span class="badge badge-primary right">96811</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Combo Email:Password" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Combo Email:Pass
                                            <span class="badge badge-primary right">6604</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Combo Username:Password" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Combo User:Pass
                                            <span class="badge badge-primary right">349</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Combo Email:Hash" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Combo Email:Hash
                                            <span class="badge badge-primary right">8</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Combo Phone:Password" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Combo Phone:Pass
                                            <span class="badge badge-primary right">16</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Email Access" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Email Access
                                            <span class="badge badge-primary right">41</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Phone Numbers Only" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Phone Numbers Only
                                            <span class="badge badge-primary right">12811</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Full Data" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Full Data
                                            <span class="badge badge-primary right">110</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Social Media Data" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Social Media Data
                                            <span class="badge badge-primary right">4</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/leads?type=Site List" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Site List
                                            <span class="badge badge-primary right">4101</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/cards" class="nav-link">
                                <i class="nav-icon fas fa-credit-card"></i>
                                <p>
                                    Cards
                                    <i class="right"></i>
                                    <span class="badge badge-info right">5488</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/webmails" class="nav-link">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>
                                    WebMails
                                    <i class="right"></i>
                                    <span class="badge badge-info right">167709</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-key"></i>
                                <p>
                                    Accounts
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">90832</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/accounts" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Accounts
                                            <span class="badge badge-primary right">90832</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type1" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Marketing
                                            <span class="badge badge-primary right">36624</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type2" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Hosting/Domain
                                            <span class="badge badge-primary right">6080</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type3" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Games
                                            <span class="badge badge-primary right">8668</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type4" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>VPN/Socks/Proxy
                                            <span class="badge badge-primary right">20406</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type5" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Shopping
                                            <span class="badge badge-primary right">362</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type6" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Program
                                            <span class="badge badge-primary right">2537</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type7" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Stream
                                            <span class="badge badge-primary right">13627</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type8" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dating
                                            <span class="badge badge-primary right">474</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type9" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Learning
                                            <span class="badge badge-primary right">1885</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type10" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Torrent/File Host
                                            <span class="badge badge-primary right">156</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type11" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Voip/Sip
                                            <span class="badge badge-primary right">2</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/accounts?type=type12" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Other
                                            <span class="badge badge-primary right">11</span>
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">Others</li>
                        <li class="nav-item">
                            <a href="/scripts" class="nav-link">
                                <i class="nav-icon fas fa-file-code"></i>
                                <p>
                                    Scripts/Programs
                                    <span class="badge badge-info right">409</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/scams" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Scam Pages/Letters
                                    <span class="badge badge-info right">3814</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/tutorials" class="nav-link">
                                <i class="nav-icon fas fa-suitcase"></i>
                                <p>
                                    Tutorials/Methods
                                    <span class="badge badge-info right">399</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <div style="display:none;" data-type="grabbed"></div>
            <script src="plugins/chart.js/Chart.min.js"></script>
            <div class="content-header">
                <div class="container-fluid">
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-home"></i> <strong>Hello, Skybaddes!</strong></h5>
                        Welcome back to LuFix Store.
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Home</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Home</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div> -->
        </nav>

