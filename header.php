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
</head>
<body class="them">
<style>
    .navbar-nav .dropdown-menu {
        margin: 0 !important
    }
 
    .theme-light {
        --color-primary: #0060df;
        --color-secondary: #ffffff;
        --color-secondary2: #ecf0f1;
        --color-accent: #fd6f53;
        --font-color: #000000;
        --color-nav: #ffffff;
        --color-dropdown: #ffffff;
        --color-card: #ffffff;
        --color-card2: #d1ecf1;
        --color-info: #0c5460;
        --color-backinfo: #d1ecf1;
        --color-borderinfo: #bee5eb;
 
    }
 
    .theme-dark {
        --color-primary: #17ed90;
        --color-secondary: #353B50;
        --color-secondary2: #353B50;
        --color-accent: #12cdea;
        --font-color: #ffffff;
        --color-nav: #363947;
        --color-dropdown: rgba(171, 205, 239, 0.3);
        --color-card: #262A37;
        --color-card2: #262A37;
        --color-info: #4DD0E1;
        --color-backinfo: #262A37;
        --color-borderinfo: #262A37;
    }
 
    .them {
 
        background: var(--color-secondary);
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
 
    .them h1 {
        color: var(--font-color);
        font-family: sans-serif;
    }
 
    .card-body {
        color: var(--font-color);
    }
 
    .them button {
        color: var(--font-color);
        background-color: #ffffff;
        padding: 10px 20px;
        border: 0;
        border-radius: 5px;
    }
 
    .navbar.navbar-light .navbar-toggler {
        color: var(--font-color);
    }
 
    /* The switch - the box around the slider */
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }
 
    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }
 
    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: 0.4s;
        transition: 0.4s;
    }
 
    .slider:before {
        position: absolute;
        content: "";
        height: 40px;
        width: 40px;
        left: 0px;
        bottom: 4px;
        top: 0;
        bottom: 0;
        margin: auto 0;
        -webkit-transition: 0.4s;
        transition: 0.4s;
        box-shadow: 0 0px 15px #2020203d;
        background: white url('https://i.ibb.co/FxzBYR9/night.png');
        background-repeat: no-repeat;
        background-position: center;
    }
 
    input:checked+.slider {
        background-color: #2196f3;
    }
 
    input:focus+.slider {
        box-shadow: 0 0 1px #2196f3;
    }
 
    input:checked+.slider:before {
        -webkit-transform: translateX(24px);
        -ms-transform: translateX(24px);
        transform: translateX(24px);
        background: white url('https://i.ibb.co/7JfqXxB/sunny.png');
        background-repeat: no-repeat;
        background-position: center;
    }
 
    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }
 
    .slider.round:before {
        border-radius: 50%;
    }
</style>
    


<script>
    function setTheme(themeName) {
        localStorage.setItem('theme', themeName);
        document.documentElement.className = themeName;
    }
 
    // function to toggle between light and dark theme
    function toggleTheme() {
        if (localStorage.getItem('theme') === 'theme-dark') {
            setTheme('theme-light');
        } else {
            setTheme('theme-dark');
        }
    }
 
    // Immediately invoked function to set the theme on initial load
    (function() {
        if (localStorage.getItem('theme') === 'theme-dark') {
            setTheme('theme-dark');
            document.getElementById('slider').checked = false;
        } else {
            setTheme('theme-light');
            document.getElementById('slider').checked = true;
        }
    })();
</script>
<nav class="navbar navbar-expand-xl navbar  navbar-light " style="
                                                          position:fixed;
                                                          background-color: var(--color-nav);
                                                          z-index:1;
                                                          top:0;
                                                          left:0;
                                                          right:0;
                                                          line-height: 1.5;
                                                          font-family: 'Lato', sans-serif;
                                                          font-size: 15px;
                                                          padding-top: 0.5rem;
                                                          padding-right: 1rem;
                                                          padding-bottom: 0.5rem;
                                                          padding-left: 1rem;
                                                        ">

<nav class="navbar navbar-default navbar-fixed-top ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <div class="navbar-brand" onclick="location.href='index.html'" onmouseover="this.style.cursor='pointer'"><b> JeruxSHOP <small><span class="glyphicon glyphicon-refresh"></span></small></b></div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="topFixedNavbar1">
         
                    <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown"><a href="./index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account  <span class="glyphicon glyphicon-user"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="./account.html">Settings<span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                                    <li class="divider"></li>
                                    <li><a href="./logout.html">Logout <span class="glyphicon glyphicon-off pull-right"></span></a></li>
                                </ul>
                            </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    <div id="wrapper">
    <div id="sidebar-wrapper">
                     <ul class="sidebar-nav">

                <li class="sidebar-brand"><a href="./index.php"><div class="navbar-brand" onclick="location.href=&#39;index.html&#39;"><font color="white"><b><span class="glyphicon glyphicon-fire"></span> Admin Panel</b></font></div></a></li>
                <li><a href="https://jerux.to" onclick="window.open(this.href);return false;"><font color="white">Back to Jerux SHOP <span class="glyphicon glyphicon-share-alt"></span></font></a></li>

                <li><font color="white"><b><span class="glyphicon glyphicon-dashboard"></span> Admin Dashboard</b></font></li>
                    <li><a href="./index.html" style="cursor: pointer;"><span class="glyphicon glyphicon-home"></span> Main</a></li>
                    <li><a href="./Status.html" style="cursor: pointer;"><span class="glyphicon glyphicon-usd"></span> Financial status</a></li>
                    <li><a href="./Sales.html" style="cursor: pointer;"><span class="glyphicon glyphicon-shopping-cart"></span> Orders</a></li>
                    <li><a href="./NewsBuyer.html" style="cursor: pointer;"><span class="glyphicon glyphicon-plus"></span> Add News </a></li>
                    <li><a href="./Tools.html" style="cursor: pointer;"><span class="glyphicon glyphicon-eye-open"></span> Visualize Tools</a></li>
                    <li><a href="./Tickets.html" style="cursor: pointer;"><span class="glyphicon glyphicon-time"></span> Pending Tickets <span id="menu_tickets"><span class="label label-danger"><?php $s12 = mysqli_query($dbcon, "SELECT * FROM ticket where status='1' OR status='2'");$r11=mysqli_num_rows($s12);
 echo $r11;?></span></span></a></li>
                    <li><a href="./Reports.html" style="cursor: pointer;"><span class="glyphicon glyphicon-time"></span> Pending Reports <span id="menu_tickets"><span class="label label-danger"><?php $s12 = mysqli_query($dbcon, "SELECT * FROM reports where status='1' OR status='2'");$r11=mysqli_num_rows($s12);
 echo $r11;?></span></span></a></li>                
				<li><a href="./Users.html"><span class="glyphicon glyphicon-user"></span> Users List <span class="label label-info"><?php $s12 = mysqli_query($dbcon, "SELECT * FROM users");$r11=mysqli_num_rows($s12);
 echo $r11;?></span></a></li>
                    <li><a href="./WithdrawalRequests.html"><span class="glyphicon glyphicon-credit-card"></span> Withdraw Approval <?php $s12 = mysqli_query($dbcon, "SELECT * FROM resseller where withdrawal='requested'");$r11=mysqli_num_rows($s12);
 echo '<span class="label label-danger">'.$r11.'</span>';?></a></li>
                    <li><a href="./Sellers.html"><span class="glyphicon glyphicon-fire"></span> Sellers <span class="label label-info"><?php $s12 = mysqli_query($dbcon, "SELECT * FROM resseller");$r11=mysqli_num_rows($s12);
 echo $r11;?></span></a></li>
                    <li><a href="./Logout.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					
            </ul>


        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <b><span id="menu-toggle" onmouseover="this.style.cursor=&#39;pointer&#39;"><span class="glyphicon glyphicon-indent-right"></span></span></b>
        <div id="page-content-wrapper">
            <div class="container-fluid">
            <div id="divPage">

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