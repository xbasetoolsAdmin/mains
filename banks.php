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
.dataTables_wrapper .dataTables_paginate .paginate_button{color:var(--font-color)}#banks_data_paginate .paginate_button{color:var(--font-color)}.alert-info{color:var(--color-info);background-color:var(--color-backinfo);border-color:var(--color-borderinfo)}#banks_data_filter{color:var(--font-color)}#banks_data_length{color:var(--font-color)}#banks_data_paginate{color:var(--font-color)}#banks_data_info{color:var(--font-color)}</style>
<ul class="nav nav-tabs">
    <div class="alert alert-info text-center" role="alert" style="margin: 15px;">
        <ul>
            <li>  . </li>
            <li>Our E-mails Lists Guarante for you Good results because most of them are from Shops and Big Sites .</li>
            <li>Combo use for cracking (Brute forcing attack) not use for login to email.</li>
            <li>There is <b> 0 </b> Available.</li>
        </ul>
    </div>
    <input type=hidden id="type" name="type" value="8" />
    <div class="row m-3 pt-1" style="color: var(--font-color);">
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="infos" style="margin-bottom: 10px; margin-top: 5px">Description:</label>
            <input type="search" class="form-control" id="infos" style="color: var(--font-color); background-color: var(--color-card);">
        </div>
        
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="Country" style="margin-bottom: 10px; margin-top: 5px">Country :</label>
            <select name="country" id="country" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All Countries</option><?php
                $query = mysqli_query($dbcon, "SELECT DISTINCT(`country`) FROM `banks` WHERE `sold` = '0' ORDER BY country ASC");
                while($row = mysqli_fetch_assoc($query)){
                echo '<option value="'.$row['country'].'">'.$row['country'].'</option>';
                }
            ?>   </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
            <label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
            <select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option><?php
                $query = mysqli_query($dbcon, "SELECT DISTINCT(`resseller`) FROM `banks` WHERE `sold` = '0' ORDER BY resseller ASC");
                while($row = mysqli_fetch_assoc($query)){
                $qer = mysqli_query($dbcon, "SELECT DISTINCT(`id`) FROM resseller WHERE username='".$row['resseller']."' ORDER BY id ASC")or die(mysql_error());
                while($rpw = mysqli_fetch_assoc($qer))
                $SellerNick = "seller".$rpw["id"]."";
                echo '<option value="'.$SellerNick.'">'.$SellerNick.'</option>';
                }
                ?>
            </select>
        </div>
    </div>
    <div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive">
            <table id=" " class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Country</th>
                        <th>Balance</th>
                        <th>Description</th>
                        <th>Seller</th>
                        <th>Added on</th>
                        <th>Buy</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    
</div>
<?php require"footer.php";?>
<script type="text/javascript">
$(document).ready((function ()
{ $("#banks_data").DataTable( {
lengthMenu: [ [10, 25, 100, 500, -1],
[10, 25, 100, 500, "All"] ],
iDisplayLength: 1e3,
aaSorting: []
})
})),
$(document).keydown((function(event){"17"==event.which&&(cntrlIsPressed=!0)})),$(document).keyup((function(){cntrlIsPressed=!1}));var cntrlIsPressed=!1;function setTooltip(btn,message){$(btn).tooltip("hide").attr("data-original-title",message).tooltip("show")}function hideTooltip(btn){setTimeout((function(){$(btn).tooltip("hide")}),1e3)}$(window).on("popstate",(function(e){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),pageDiv(8,"bank-logs - xBaseTools","banks",1),new Clipboard(".copyit").on("success",(function(e){setTooltip(e.trigger,"Copied!"),hideTooltip(e.trigger),e.clearSelection()}))}));
</script>
</body>
</html>
