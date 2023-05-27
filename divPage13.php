<?php
ob_start();
session_start();
date_default_timezone_set('UTC');

include "includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
header("location: ../");
exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>

<<div id="myTabContent" class="tab-content p-5">
<div id="addBalance">
<div id="balance">
<div class="row">
<div class="container col-md-4" style="color: var(--font-color); background-color: var(--color-card);">
<h4>Add Balance</h4>
<form id="formAddBalance" class="mt-2">
<div class="row">
<div class="form-group col-md-12">
<label for="method">Method</label>
<select name="methodpay" class="form-control" size="5" style="color: var(--font-color); background-color: var(--color-card);">
<option value="BitcoinPayment" selected="">Bitcoin</option>
<option value="PerfectMoneyPayment">Perfect Money</option>
</select>
</div>
</div>

<div class="row">
<div class="form-group col-md-12">
<label for="amount" class="active">Amount</label> <input placeholder="20" pattern="[0-9]*" type="number" name="amount" class="form-control input-normal" style="color: var(--font-color); background-color: var(--color-card);" required="">
</div>
</div>
<button type="submit" form="formAddBalance" class="btn btn-success btn-md waves-effect waves-light">Add Balance <span class="glyphicon glyphicon-plus"></span></button>
<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
<input type="hidden" name="action" value="validate_captcha">
</form>
</div>

<div class="col-md-8">
<div class="bs-component">
<div class="well well">
<ul style="color: var(--font-color); background-color: var(--color-card2);">
<li>If you sent <b>Money</b> but it don't appear in your account please <a class="btn btn-danger btn-sm  waves-effect waves-light" href="tickets"><span class="glyphicon glyphicon-pencil"></span> Write Ticket</a></li>
<li>After payment funds will be added automatically to your account <b>INSTANTLY</b></li>
<li><b>PerfectMoney</b>/<b>Bitcoin</b> is a secure way to fund your account </li>
<li>Min is 10 USD For Bitcoin</li>
<li>Min is 10 USD For Perfect Money</li>
<li><b>Buyer Protection</b>
</li></ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script>
if(window.location.hash != "") {
$("#method").val(window.location.hash.substring(1));
}
$("#formAddBalance").submit(function() {
$('button').prop('disabled', true);
$.ajax({
type: "POST",
url: 'addBalanceAction.php',
data: $("#formAddBalance").serialize(), // serializes the form's elements.
success: function(data)
{
if (data == 01) {
alert('Please enter a valid amount and Minimum of $5 for bitcoin / $10 for PM');
$('button').prop('disabled', false);
}
if (data != 01 ) {
//$("#balance").html(data).show();
pageDiv('payment'+data,'Add Balance - XBASETOOLS','Payment.php?p_data='+data,0);
}
}
});
return false; // avoid to execute the actual submit of the form.
});
</script>
