<?php
ob_start(); session_start(); date_default_timezone_set('UTC'); include "includes/config.php"; if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) { header("location: ../"); exit(); } $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>. 

<!DOCTYPE html>
<html>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
       <script src="js/jquery.dataTables.min.js"></script><script src="buyer/layout/js/main.js"></script>
       <link rel="stylesheet" href="buyer/layout/css/bootstrap.min.css"><link rel="stylesheet" type="text/css" href="buyer/layout/css/flags.css" />
        <script src="buyer/layout/js/clipboard.min.js"></script><script src="buyer/layout/js/bootstrap.min.js"></script>
        <script src="buyer/layout/js/bootbox.min.js"></script>  <style>body{padding-top:80px}</style>	
