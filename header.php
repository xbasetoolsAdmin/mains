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
<html>
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="L4juOQYBnGImEttBbdNpTy6sMZLChXqGpMmOYtgI" />
    <title>Home | LuFix</title>
    
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
 
    <script async src="//www.googletagmanager.com/gtag/js?id=UA-177092549-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
 
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('set', {
            '$usrid': 'USER_ID'
        }); // Set the user ID using signed-in user_id.
        gtag('config', 'UA-177092549-1');
    </script>
    <link rel="stylesheet" href="../buyer/layout/css/all.min.css" />
    <link rel="stylesheet" href="../buyer/layout/css/main.css?v=12.9" />
    <link rel="stylesheet" href="../buyer/layout/css/util.css" />
    <style>
        body {
            padding-top: 80px
        }
    </style>
    <link rel="stylesheet" href="../buyer/layout/fonts/iconic/css/material-design-iconic-font.min.css">
    <script src="../buyer/layout/js/main.js"></script>
    <script type="text/javascript">
        // Notice how this gets configured before we load Font Awesome
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        }
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

  </d<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Main - Admin Panel</title>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./assets/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../buyer/assets/flags.css">
    <link rel="stylesheet" type="text/css" href="css/tickets.css">
<script type="text/javascript" src="./assets/jquery.js"></script>
<script type="text/javascript" src="./assets/bootstrap.js"></script>
<script type="text/javascript" src="./assets/bootbox.min.js"></script>
<script type="text/javascript" src="./assets/sorttable.js"></script>
<font face="Arial">
    <link href="./assets/style.css" rel="stylesheet">
		
<style>

.alert.alert-shadowed {
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
    box-shadow: 0 1px 2px rgba(0,0,0,.2);
}


.alert {
    margin-bottom: 20px;
    margin-top: 0;
    color: #fff;
    border-width: 0;
    border-left-width: 5px;
    padding: 10px;
    border-radius: 0;
}

.alert.alert-danger {
    border-color: #df5138;
    background: #001f3f;
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
	display:none;
}

</style>
    <style>
.sort {
  .sortable
}
.sort th:not(.sorttable_sorted):not(.sorttable_sorted_reverse):not(.sorttable_nosort):after { 
    content: " \25BE" 
}
</style>
</head>

<body>
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
                    <li><a href="./Tickets.html" style="cursor: pointer;"><span class="glyphicon glyphicon-time"></span> Pending Tickets <span id="menu_tickets"><span class="label label-danger">1</span></span></a></li>
                    <li><a href="./Reports.html" style="cursor: pointer;"><span class="glyphicon glyphicon-time"></span> Pending Reports <span id="menu_tickets"><span class="label label-danger">0</span></span></a></li>                
				<li><a href="./Users.html"><span class="glyphicon glyphicon-user"></span> Users List <span class="label label-info">14</span></a></li>
                    <li><a href="./WithdrawalRequests.html"><span class="glyphicon glyphicon-credit-card"></span> Withdraw Approval <span class="label label-danger">0</span></a></li>
                    <li><a href="./Sellers.html"><span class="glyphicon glyphicon-fire"></span> Sellers <span class="label label-info">5</span></a></li>
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
<br><br><script>

function deletrdps(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=rdps",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}
function deletshells(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=stufs",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}
function deletcpanels(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=cpanels",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}
function deletmailers(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=mailers",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}
function deletsmtps(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=smtps",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}
function deletleads(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=leads",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}
function deletbanks(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=banks",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}
function deletpremium(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=accounts",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}
function deletscam(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=scampages",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}
function delettuto(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=tutorials",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}
</script>
<div class="alert alert-danger fade in radius-bordered alert-shadowed"><b>Visualize Tools</b></div>

<center>
<a href="toolsvis.php?show=rdps"><input type="submit" class="btn btn-danger" value="Rdps"/></a> | 
<a href="toolsvis.php?show=shells"><input type="submit" class="btn btn-danger" value="Shells"/></a> | 
<a href="toolsvis.php?show=cpanels"><input type="submit" class="btn btn-danger" value="Cpanels"/></a> | 
<a href="toolsvis.php?show=mailers"><input type="submit" class="btn btn-danger" value="Mailers"/></a> | 
<a href="toolsvis.php?show=smtps"><input type="submit" class="btn btn-danger" value="Smtps"/></a> | 
<a href="toolsvis.php?show=leads"><input type="submit" class="btn btn-danger" value="Leads"/></a> | 
<a href="toolsvis.php?show=banks"><input type="submit" class="btn btn-danger" value="Banks"/></a> | 
<a href="toolsvis.php?show=accounts"><input type="submit" class="btn btn-danger" value="Accounts"/> </a>| 
<a href="toolsvis.php?show=scampages"><input type="submit" class="btn btn-danger" value="Scampages"/> </a>| 
<a href="toolsvis.php?show=tutorials"><input type="submit" class="btn btn-danger" value="Tutorials"/></a> 

</center>
<br>
 
<table width="100%" id="dataTable" class="table table-striped table-bordered table-condensed sticky-header dataTable no-footer" role="grid" aria-describedby="dataTable_info" style="width: 100%;">        <thead>
  <thead>
  <tr>
  <th>ID</th>
  <th>Seller</th>
  <th>Country</th>
  <th>Site Name</th>
  <th>Information</th>
  <th>Open</th>
  <th>Date added</th>
  <th>Price</th>
  <th>Action</th>
  </tr>
 </thead>
<tbody id='tbody2'>
 <tr class='accounts-tabel'>
   <th> 132 </th>
  <th> OMERMAKSUTI </th>
    <th> American Samoa </th>
    <th> https://lexoje.al/ </th>
    <th> dsfds </th>
	<th>  	</th>
    <th> 13/05/2020 01:30:46 am </th>
    <th> 15</th>
    <th></td>
	
	
    </tr>
	
	    
<a data-toggle="modal" class="btn btn-primary btn-xs" data-target="#myModald132" >
<font color=white>Open #132 </a></center> <div class="modal fade" id="myModald132" >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">
                                           <font color="black"> Premium/Shop/Dating #132 </font>
                                            </h4>
                                        </div>
                                        <div class="modal-body">
					<font color="black">			https://lexoje.al/ | dfgsdfgfdgsfd  </font>
					</div>								
					<div class="modal-footer">
<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
</div>
	    <div id="shop132" type="delete"><a onclick="javascript:deletpremium(132);" class="btn btn-danger btn-xs">remove</a></div>	
		
