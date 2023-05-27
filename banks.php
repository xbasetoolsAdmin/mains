 <?php require "header.php"; ?>






<?php

date_default_timezone_set('UTC');

if(!isset($_SESSION['sname']) and !isset($_SESSION['spass'])){
   header("location: ../");
   exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?> 
        
										
								
								
								
		   <div class="alert alert-info text-center" role="alert" style="margin: 15px;">
<ul class="nav nav-tabs">
		<li class="active"><a href="#static" data-toggle="tab" aria-expanded="true">Static</a></li>
		
		
		


	<h2>Banks</h2>
		
		<li class=""><a href="#all" data-toggle="tab" aria-expanded="false" onclick="TabDiv('all','banksTab1.php')">All</a></li>
		
		
		
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





























 <?php require "footer.php"; ?>
<script>
$('#dataTable').dataTable( {
  "lengthChange": false
});
function delet(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./ajax/dbanks.php?id="+id,
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}
		</script>