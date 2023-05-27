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
    
    
    </div>


    <div class="alert alert-info text-center" role="alert" style="margin: 15px;">
    
    
    

<div class="table-row m-2 pt-3" style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">

<div class="col-sm-12 table-responsive" id="banks_data">

<table class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);" Id="banks_data">
             <thead>
                 <tr>
                 <th>ID </th>
                <th>Country</th>
                <th>BankName</th>
                <th>Balance</th>
                <th>Details</th>
                <th>Seller</th>
                <th>Price</th>
             <th>spammed date</th>
                <th>Buy</th>
            </tr>
        </thead>
    </table>
</div> 
<script  src="controllers/0fgdgfddffkjhgdfxd.js">

</script>                                                                                                                                                
<?php require"footer.php";?>
<script  type="text/javascript">
$(document).ready(function () {
$('#banks_data').DataTable({
lengthMenu: [ [10, 25, 50, -1],
[10, 25, 50, 'All'],],
                               });
load_data(8,"bank-logs - xBaseTools","banks",1),
new Clipboard(".copyit").on("success",(function(e){setTooltip(e.trigger,"Copied!"),hideTooltip(e.trigger),e.clearSelection()}))}));
</script>
</div>
</body>
</html>
