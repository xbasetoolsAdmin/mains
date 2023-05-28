<?php
include "./header.php";

$uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$q = mysqli_query($dbcon, "SELECT * FROM users WHERE username='$uid'")or die();
$r = mysqli_fetch_assoc($q);

if($r['resseller'] != "1"){
  header("location: ../");
  exit ();
}


?>

	<h2>Banks</h2>
<?php

date_default_timezone_set('UTC');

if(!isset($_SESSION['sname']) and !isset($_SESSION['spass'])){
   header("location: ../");
   exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?> 
        
        


 <center> <h4> Banks Logs(Fullz Info)</h4></center>

<ul class="user-info">

<div class="alert alert-info text-left" role="alert" style="margin: 15px;">
<center>
        <ul>
            <li>We Have Fresh E-mails Lists for Diffrents Countries ( You Can Use it for Spam ). </li>
            <li>Our E-mails Lists Guarante for you Good results because most of them are from Shops and Big Sites .</li>
            <li>Combo use for cracking (Brute forcing attack) not use for login to email.</li>
            <li>Number of Bank Accounts : <b><?php $s12 = mysqli_query($dbcon, "SELECT * FROM banks where resseller='$uid'");$r11=mysqli_num_rows($s12); echo $r11;?></b></li>
            <li>Unsold Bank Accounts : <b><?php $s12 = mysqli_query($dbcon, "SELECT * FROM banks where resseller='$uid' and sold='0'");$r11=mysqli_num_rows($s12); echo $r11;?></b></li>
            <li>Sold Bank Accounts : <b><?php $s12 = mysqli_query($dbcon, "SELECT * FROM banks where resseller='$uid' and sold='1'");$r11=mysqli_num_rows($s12); echo $r11;?></b></li>
            <li>Deleted Bank Accounts : <b><?php $s12 = mysqli_query($dbcon, "SELECT * FROM banks where resseller='$uid' and sold='deleted'");$r11=mysqli_num_rows($s12); echo $r11;?></b></li>
        </ul>
</center>
    </div>



			

      <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
        	<label for="infos">Description 1</label>
	<input type="search" class="form-control" id="infos" style="color: var(--font-color); background-color: var(--color-card);">
			</div>
      
      
			<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
				<label for="infos" style="margin-bottom: 10px; margin-top: 5px">Description: 2</label>
				<input type="search" class="form-control" id="infos" style="color: var(--font-color); background-color: var(--color-card);">
			</div>
            
      <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
			<label for="country">Country 1</label>
			<select name="country" Id=“country”class="form-control”>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
		</div>
        
		<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
			<label for="Country" style="margin-bottom: 10px; margin-top: 5px">Country 2 :</label>
			<select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
			</select>
		</div>
        
		<div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
			<label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
			<select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
				<option value="all">All</option>
				<option value="1">All1</option>
        <option value="2">All2</option>
				<option value="3">All3</option>
				<option value="4">All4</option>
                <option value="5">All6</option>
			</select>
		</div>		
    
    </div>		
                   <div id="page-content-wrapper">
            <div class="container-fluid">
      <div id="divPage">
<table id="lead_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
<table id="dataList" class="display" style="width:100%">
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Created</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Created</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>
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
<div class="row">
<script>
	$(function() {
		$(".preload").fadeOut(900, function() {
			$(".content").fadeIn(0);
		});
	});
	function TabDiv(n,u){
    $("#all").html('').show();
    $("#add").html('').show();
    $("#massadd").html('').show();
    $("#unsold").html('').show();

    $("#"+n).html('<div id="mydiv"><img  src="../img/loadTab.gif" class="ajax-loader"></div>').show();
    $.ajax({
    type:       'GET',
    url:        u,
    success:    function(data)
    {
    $("#"+n).html(data).show();
    newTableObject = document.getElementById('table');sorttable.makeSortable(newTableObject);
    }
});  
}
</script>  
     <div class="preload">
<div id="mydiv"><img src="img/wait.gif" class="ajax-loader"></div>  

  </div>
     <div class="content">


        
        <script type="text/javascript">
$("#banksAdd").submit(function() {
  $('button').prop('disabled', true);
    $.ajax({
           type: "POST",
           url: 'banksAdd.html',
           data: $("#banksAdd").serialize(),
           success: function(data){
            $('button').prop('disabled', false);
            $("#result").html(data).show();
            var data = JSON.parse(data);
            if (data['result'] ==1){
				      $('#site').val('');
				 $('#balance').val('');
              $('#infos').val('');
			  
            }
            $("#result").html(data['text']).show();
            }

});

    return false; // avoid to execute the actual submit of the form.
});
</script>
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

        
