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
        <center><ul>
            <li>We Have Fresh E-mails Lists for Diffrents Countries ( You Can Use it for Spam ). </li>
            <li>Our E-mails Lists Guarante for you Good results because most of them are from Shops and Big Sites .</li>
            <li>Combo use for cracking (Brute forcing attack) not use for login to email.</li>
            <li>There is <b> 3 </b> Available.</li>
        </ul></center>
    </div>
    <input type=hidden id="type" name="type" value="7" />
    <div class="row m-3 pt-1" style="color: var(--font-color);">
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="infos" style="margin-bottom: 10px; margin-top: 5px">Description:</label>
            <input type="search" class="form-control" id="infos" style="color: var(--font-color); background-color: var(--color-card);">
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="Country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
            
            
<select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
              
               
  <option value="">All Countries</option>

  <option value="Belarus">Belarus</option>
  
   <option value="Russia">Russia</option>
  
  <option value="Ukraine">Ukraine</option>
            </select>
        </div>
        
          
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
            <select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>
                <option value="Seller467">Seller467</option>
            </select>
        </div>
    </div>
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
	<div class="form-group col-lg-3 ">
    
		<label for="site">Bankname</label>
    
  <input type="text" name="site" id="site" class="form-control input-sm" placeholder="Bank of America" required="">
	</div>
  </div>
		<div class="form-group col-lg-3 ">
		<label for="balance">Balance</label>
		<input type="text" name="balance" id="balance" class="form-control input-sm" placeholder="5000$" required="">
	</div>
</div>
<div class="row">
	<div class="form-group col-lg-3 ">
		<label for="infos">Available Information</label>
		<input type="text" name="infos" id="infos" class="form-control input-sm" placeholder="SSN/DOB/BILLING/IP/User Agent..." required="">
	</div>
	<div class="form-group col-lg-3 ">
		<label for="country">Country</label>
<select name="country" class="form-control input-sm" required="">
	<option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
</select>
		</div>
</div>

<label for="text">ALL ACCOUNT INFO HERE</label>
<textarea name="inputs" class="form-control " rows="3" placeholder="User : XXXXXXX | Pass : XXXXXXX" required></textarea>
<div class="col-md-3">
				<label for="price">Price</label>
	<tr>
		
		<td><input placeholder="5" type="text" name="price" class="form-control input-sm" required=""></td><br>
	</tr>
</tbody></table>
</div>
<div class="form-group col-lg-10">
	<button type="submit" name="submit" class="btn btn-primary btn-md">Add  <span class="glyphicon glyphicon-indent-left"></span></button>
<input type="hidden" name="start" value="work" />

	</div>
</div>
</form>


<div class="row">
	<div class="well well-sm col-md-6"><b>[Response]</b><div id="result"></div></div>
</div>

        
        
        
        
        
        
        
        
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

        