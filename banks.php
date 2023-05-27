 <?php
ob_start();
session_start();
date_default_timezone_set('UTC');
require "header.php";
include "includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
header("location: ../");
exit(); }
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>
<style>
.display td {
background:var(--color-card);
color:var(--font-color)
}
.dataTables_wrapper .dataTables_paginate .paginate_button{color:var(--font-color)}#bank_data_paginate .paginate_button{color:var(--font-color)}.alert-info{color:var(--color-info);background-color:var(--color-backinfo);border-color:var(--color-borderinfo)}#banks_data_filter{color:var(--font-color)}#banks_data_length{color:var(--font-color)}#banks_data_paginate{color:var(--font-color)}#banks_data_info{color:var(--font-color)}</style>
<ul class="nav nav-tabs">
    <div class="alert alert-info text-center" role="alert" style="margin: 15px;">

 `<!-- DataTables CSS -->
     <link href="vendor/datatables-plugins/dataTables.bootstrap.css" 
     rel="stylesheet">

     <!-- DataTables Responsive CSS -->
     <link href="vendor/datatables-responsive/dataTables.responsive.css" 
     rel="stylesheet">



    <div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive">
            <table id="banks_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
        <thead>
            <tr>
            <th>First Name</th>
            <th>Surname</th>
            <th>Gender</th>
            <th>Birth Date</th>
            <th>Address</th>
            <th>Nationality</th>
            <th>County</th>
            <th>Student Type</th>
            <th>Class</th>
            <th>Operations</th>
 // DONT USE COLSPAN WHILE USING DATATABLES
            <th></th>
            <th></th>
        </tr>
     </thead>
     <tbody>
 <?php
include("cr.php");
$q = mysqli_query($dbcon, "SELECT * FROM accounts WHERE sold='0' ORDER BY RAND()")or die(mysqli_error());
 while($row = mysqli_fetch_assoc($q)){
	 
	 	 $countryfullname = $row['country'];
	  $code = array_search("$countryfullname", $countrycodes);
	 $countrycode = strtolower($code);
	    $qer = mysqli_query($dbcon, "SELECT * FROM resseller WHERE username='".$row['resseller']."'")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";?>
            
            
      <tr>
        <td><?php echo htmlentities($row['acctype']) ?></td>
        <td><?php echo htmlentities($row['country']) ?></td>
        <td><?php echo htmlentities($row['infos']) ?></td>
        <td><?php echo htmlentities($row['url']) ?></td>
        <td><?php echo htmlentities($row['sold']) ?></td>
        <td><?php echo htmlentities($row['sto']) ?></td>
        <td><?php echo htmlentities($row['dateofsold'])?></td>
        <td><?php echo htmlentities($row['date'])?></td>
        <td><?php echo htmlentities($row['resseller'])?></td>

    </table>

    
    
    
    
    
    
    
    

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

   <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js">
    </script>


    <script>
    $(document).ready(function() {
     $('#banks_data').DataTable({
         responsive: true
     });
    });
    </script> `  
