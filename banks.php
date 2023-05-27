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
ob_start();
session_start();

date_default_timezone_set('UTC');
include "../includes/config.php";

if(!isset($_SESSION['sname']) and !isset($_SESSION['spass'])){
   header("location: ../");
   exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?> 
<?php
function curl_get_contents($url)
{
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
  $data = curl_exec($curl);
  curl_close($curl);
  return $data;
}
function ambilKata($param, $kata1, $kata2)
{
    
if(strpos($param, $kata1) === FALSE) return FALSE;
    
if(strpos($param, $kata2) === FALSE) return FALSE;
    
$start = strpos($param, $kata1) + strlen($kata1);
    
$end = strpos($param, $kata2, $start);
    

    
$return = substr($param, $start, $end - $start);
    
return $return;
}
  $website = mysqli_real_escape_string($dbcon, $_POST['sitename']);
  

     $balance = mysqli_real_escape_string($dbcon, $_POST['balance']);
     
   $country = mysqli_real_escape_string($dbcon, $_POST['country']);
   


$infos = mysqli_real_escape_string($dbcon, $_POST['infos']);
    
$infos = mysqli_real_escape_string($dbcon, $_POST['inputs']);
  
$price = mysqli_real_escape_string($dbcon, $_POST['price']);
   $date = date("d/m/Y h:i:s a");
   $link = "$website | $url ";
  if(isset($_POST['start']) and $_POST['start'] == "work"){
      if ($price == 0)
{
	echo "<tr>
	
<td>".htmlspecialchars($website)."</td> .... <b>Price not valid!</b>
<br>";
} 
      else if (empty($website))
{
	echo "Complete all fields <br>";
} 
 else if (preg_match('/[^0-9]/', $price)) {
	echo "Price not valid!</b> <br>";
} else {
$check="SELECT * FROM banks WHERE url = '$link'";
$rs = mysqli_query($dbcon,$check);
$data = mysqli_fetch_array($rs, MYSQLI_NUM);
if($data[0] > 1) {
	echo "<br><b>".htmlspecialchars($website)."</b> .... <b>Already Added</b> <br>";
} else { 
    $query = mysqli_query($dbcon, "
  INSERT INTO banks
  (
acctype,
        country,
        
infos,

price,


url,

sold,

sto,

dateofsold,

date,

resseller,

reported,

bankname,

balance

)
  VALUES
  (
  'banks',
  '$country',
  '$infos',
  '$price',
  '$link',
  '0',
  '',
  '',
  '$date',
  '$uid',
  '',
  '$website',
  '$balance'
  )
  ")or die(mysqli_error($dbcon));

  if($query){
    echo "<b>".htmlspecialchars($website)."</b> ........ <b><font color=green>Added!</b></font>";

  }else{
    echo '<div class="alert alert-danger" role="alert">Not Added Contact Support</div>';
  } }  }
  } 
  ?>
    
    
    
    
    
    

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
