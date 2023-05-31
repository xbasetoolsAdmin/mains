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
                <li class="nav-item">        <li class="dropdown"><a href="./index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account  <span class="glyphicon glyphicon-user"></span></a>
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

                <li class="sidebar-brand"><a href="./index"><div class="navbar-brand" onclick="location.href=&#39;index.html&#39;"><font color="white"><b><span class="glyphicon glyphicon-fire"></span> Seller Panel</b></font></div></a></li>
                <li><a href="https://jerux.to/buyer/index.html" onclick="window.open(this.href);return false;"><font color="white">Back to Jerux SHOP <span class="glyphicon glyphicon-share-alt"></span></font></a></li>

                <li><font color="white"><b>Seller Dashboard</b></font></li>
                    <li><a href="./index.html" style="cursor: pointer;">Main</a></li>
		  <?php
          $uid     = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
          $qerd = mysqli_query($dbcon, "SELECT * FROM resseller WHERE username='$uid'")or die(mysqli_error());
          $rers = mysqli_fetch_assoc($qerd);
        ?>
                    <li><a href="./sales.html" style="cursor: pointer;">Sales <div id="sales" class="label label-info"></div></a></li>
                    <li><a href="./withdraw.html" style="cursor: pointer;">Withdraw</a></li>
                    <li><a href="./reports.html" style="cursor: pointer;">My Reports <?php 
					$s1 = mysqli_query($dbcon, "SELECT * FROM reports WHERE resseller='$uid' AND status='1' OR status='2'");
					$r1=mysqli_num_rows($s1);
					if (strpos($r1,'0') !== false) {
} else {
echo '<div id="reports" class="label label-danger"></div>'; }?></a></li>			

                <li><font color="white"><b>Tools Management</b></font></li>
                    <li><a href="./rdp.html" style="cursor: pointer;">RDP <span id="rdp" class="label label-info"></span></a></li>
                    <li><a href="./shell.html" style="cursor: pointer;">Shell <span id="shell" class="label label-info"></span></a></li>
                    <li><a href="./cpanel.html" style="cursor: pointer;">cPanel <span id="cpanel" class="label label-info"></span></a></li>
				<li><a href="./mailer.html">PHP Mailer <span id="mailer" class="label label-info"></span></a></li>
	<li><a href="./smtp.html">SMTP <span id="smtp" class="label label-info"></span></a></li>
                    <li><a href="./leads.html">Leads <span id="leads" class="label label-info"></span></a></li>
                    <li><a href="./scampage.html">Scampage <span id="scams" class="label label-info"></span></a></li>
                    <li><a href="./tutorial.html">Tutorial/Method <span id="tutorials" class="label label-info"></span></a></li>
           <li><a href="./banks.html">Bank Accounts <span id="banks" class="label label-info"></span></a></li>
	      <li><a href="./premium.html">Premium/Shop/Dating <span id="premium" class="label label-info"></span></a></li>		
                    <li><a href="./index.html" style="cursor: pointer;"><span class="glyphicon glyphicon-home"></span> Main</a></li>
                  pan> Support Dashboard</b></font></li>
                    <li><a href="./index.html" style="cursor: pointer;"><span class="glyphicon glyphicon-home"></span> Main</a></li>
                    <li><a href="./News.html" style="cursor: pointer;"><span class="glyphicon glyphicon-plus"></span> Add News</a></li>
                    <li><a href="./Tickets.html" style="cursor: pointer;"><span class="glyphicon glyphicon-time"></span> Pending Tickets <span id="menu_tickets"><span class="label label-danger"><?php $s12 = mysqli_query($dbcon, "SELECT * FROM ticket where status='1' OR status='2'");$r11=mysqli_num_rows($s12);
 echo $r11;?></span></span></a></li>
                    <li><a href="./Reports.html" style="cursor: pointer;"><span class="glyphicon glyphicon-time"></span> Pending Reports <span id="menu_tickets"><span class="label label-danger"><?php $s12 = mysqli_query($dbcon, "SELECT * FROM reports where status='1' OR status='2'");$r11=mysqli_num_rows($s12);
 echo $r11;?></span></span></a></li>                
				<li><a href="./Users.html"><span class="glyphicon glyphicon-user"></span> Users List <span class="label label-info"><?php $s12 = mysqli_query($dbcon, "SELECT * FROM users");$r11=mysqli_num_rows($s12);
 echo $r11;?></span></a></li>
                   


l

        <!-- Page Content -->
        <b><span id="menu-toggle" onmouseover="this.style.cursor=&#39;pointer&#39;"><span class="glyphicon glyphicon-indent-right"></span></span></b>
        <div id="page-content-wrapper">
            <div class="container-fluid">
            <div id="divPage">
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

