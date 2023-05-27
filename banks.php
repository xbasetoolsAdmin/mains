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
 `<!-- DataTables CSS -->
     <link href="vendor/datatables-plugins/dataTables.bootstrap.css" 
     rel="stylesheet">
     <!-- DataTables Responsive CSS -->
     <link href="vendor/datatables-responsive/dataTables.responsive.css" 
     rel="stylesheet">

<script>
$('#banks_data').dataTable( {
    
  "lengthChange": false
});
function delet(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./data/objects.php?id="+id,
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}

</script>
    <div class="alert alert-info text-center" role="alert" style="margin: 15px;">
<ul class="nav nav-tabs">
	<h2><center>Banks</h2></center>
	</ul>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="static"> 
<div class="well well-sm">
<h4>Rules</h4>
<ul class="user-info">
<li><b>Do not insert a bank account without SCREENSHOT of it (USE : prntscr.com)</b></li>
<li><b>ONLY INSERT WORKING ACCOUNT</b></li>
<li>If you have mistaken or need to edit a tool just remove it and add it again</li>
<li><b>Deleted</b> mean that the tools is not working !</li>
</ul>
<h4>Static</h4>
<ul class="user-info">
<li>Number of Bank Accounts : <b><?php $s12 = mysqli_query($dbcon, "SELECT * FROM banks where resseller='$uid'");$r11=mysqli_num_rows($s12);
 echo $r11;?></b></li>
<li>Unsold Bank Accounts : <b><?php $s12 = mysqli_query($dbcon, "SELECT * FROM banks where resseller='$uid' and sold='0'");$r11=mysqli_num_rows($s12);
 echo $r11;?></b></li>
<li>Sold Bank Accounts : <b><?php $s12 = mysqli_query($dbcon, "SELECT * FROM banks where resseller='$uid' and sold='1'");$r11=mysqli_num_rows($s12);
 echo $r11;?></b></li>
<li>Deleted Bank Accounts : <b><?php $s12 = mysqli_query($dbcon, "SELECT * FROM banks where resseller='$uid' and sold='deleted'");$r11=mysqli_num_rows($s12);
 echo $r11;?></b></li>
</ul>
      </div>
      </div>
	  
	<div class="tab-pane fade" id="all"></div>
    <div class="tab-pane fade" id="add"></div>

</div>
</div></div>
            </div>
            </div>
        </div>
<table width="100%" id="banks_data" class="table table-striped table-bordered table-condensed sticky-header dataTable no-footer" role="grid" aria-describedby="dataTable_info" style="width: 100%;">        <thead>
  <thead>
  <tr>
  <th>ID</th>
  <th>Type</th>
  <th>Country</th>
  <th>Bank Name</th>
  <th>Balance</th>
  <th>Information</th>
  <th>Open</th>
  <th>Date added</th>
  <th>Price</th>
  <th>Action</th>
  </tr>
        </thead>
		 <tbody id='banks_data'>
 <?php
$uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$qu = mysqli_query($dbcon, "SELECT * FROM banks WHERE acctype='banks' AND resseller='$uid' and sold='0' ORDER BY id DESC")or die(mysqli_error());

 while($row = mysqli_fetch_assoc($qu)){
	 
    echo "<tr class='banks-tabel'>
    <td> ".htmlspecialchars($row['id'])." </td>
    <td> ".strtoupper(htmlspecialchars($row['acctype']))." </td>
    <td> ".htmlspecialchars($row['country'])." </td>
    <td> ".htmlspecialchars($row['bankname'])." </td>
	<td> ".htmlspecialchars($row['balance'])." </td>
    <td> ".htmlspecialchars($row['infos'])." </td>
	<td>  "; ?>
<?php
  echo '
 
<div class="modal fade" id="myModald' . $row['id'] . '" >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">
                                           <font color="black"> Banks #' . $row['id'] . ' </font>
                                            </h4>
                                        </div>
                                        <div class="modal-body">
					<font color="black">			'.htmlspecialchars($row['url']).' </font>
					</div>								
					<div class="modal-footer">
<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
</div>';?>
<?php
echo "
</td>
    <td> ".htmlspecialchars($row['date'])." </td>
    <td> ".htmlspecialchars($row['price'])."</td>
    <td> ";
if ($row['sold'] == "0") {
 echo '<div id="shop'.$row["id"].'" type="delete"><a onclick="javascript:delet('.$row["id"].');" class="btn btn-danger btn-xs">remove</a></div>';
 }elseif ($row['sold'] == "deleted") {
	echo "<font color=gray>Deleted</font>"; } else {
echo "<font color=green>[Sold]</font>";	    
	}
    echo "</td>
    </tr>";
 }

 

 ?>

 	<a data-toggle="modal" class="btn btn-primary btn-xs" data-target="#myModald<?php echo  $row['id']; ?>" >
<font color=white>Open #<? echo htmlspecialchars($row['id']); ?> </a></center> 

 </tbody>
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
