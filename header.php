<!DOCTYPE html>
   <html>   
     <head>
 <meta charset="utf-8">
 <title>Felux-Shop Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="buyer/layout/css/bootstrap.min.css"><link rel="stylesheet" type="text/css" href="buyer/layout/css/flags.css" /><link rel="stylesheet" href="buyer/layout/css/main.css" />
<link rel="stylesheet" href="buyer/layout/css/util.css" /><link rel="stylesheet" href="buyer/layout/fonts/iconic/css/material-design-iconic-font.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script><script src="buyer/js/jquery.dataTables.min.js"</script> <script src="buyer/layout/js/main.js"></script> 
<script src="buyer/layout/js/bootbox.min.js"></script>  <script src="buyer/layout/js/clipboard.min.js"></script><script src="buyer/layout/js/bootstrap.min.js"></script>
<script src="buyer/layout/js/main.js"></script> <script src="buyer/dt/js/jquery.dataTables.min.js"></script> <link rel="stylesheet" href="layout/css/all.min.css" /> <style>  body {adding-top: 80px }</style>
<script type="text/javascript"> /* Notice how this gets configured before we load Font Awesome */ window.FontAwesomeConfig = { autoReplaceSvg: false }</script>
<style>  @import url(//fonts.googleapis.com/css?family=Roboto:400); .navbar-nav .dropdown-menu { margin: 0 !important   } </style>
</head>   
	<?php
ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) { header("location: login"); exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?> 
