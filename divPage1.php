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
   <div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
<div class="col-sm-12 table-responsive">
<table id="rdp_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
             <thead>
				<tr>
				                	<th data-priority="1"></th>
							<th class="all">ID</th>
							<th data-priority="3">Country</th>
							<th data-priority="8">Type</th>
							<th data-priority="15">TLD</th>
							<th data-priority="14">Domain</th>
							<th data-priority="11">Hosting</th>
							<th data-priority="12">CMS</th>
					<th class="all" style="width:9% !important;">Ip Blacklist</th>
							<th class="all">Buy</th>
						</tr>
	  	  </thead>
	    <tbody>
		    <?php
include("cr.php");
$q = mysqli_query($dbcon,"SELECT * FROM accounts WHERE sold='0' ORDER BY RAND()")or die(mysql_error());					
	while($row = mysqli_fetch_assoc($q)){
	 	 $countryfullname = $row['country'];
		 $code = array_search("$countryfullname", $countrycodes);
		 $countrycode = strtolower($code);
	 	 $tld = end(explode(".", parse_url($row['url'], PHP_URL_HOST))); 
		 $qer = mysqli_query($dbcon, "SELECT * FROM resseller WHERE username='".$row['resseller']."'")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
                                        
		                                   echo " <tr>    
     
     
    <th data-priority='1'>                                                                                           </th> 
    <th data-priority='1'>                                                                                           </th>
    <td id='rdp_country'><i class='flag-icon flag-icon-$countrycode'></i>&nbsp;".htmlspecialchars($row['country'])." </td>
    <td>				 ".htmlspecialchars($row['city']).					    "</td>
    <td id='rdp_windows'>		 ".htmlspecialchars($row['windows']).					   "</td>
    <td>				 ".htmlspecialchars($row['ram']).					   "</td>
    <td id='rdp_access'>		 ".htmlspecialchars($row['access']).                                       "</td>
    <td id='rdp_hosting'>		 ".htmlspecialchars($row['hosting']).			   		   "</td>
    <td id='rdp_seller'>		 ".htmlspecialchars($SellerNick).			    		   "</td>
    <td> " 				.htmlspecialchars($row['price']).    			     	           "</td>
    <td> "				.htmlspecialchars($row['date']). 					  " </td>
    <td>";                                         
		                                          echo '
    <span id="rdp'				.$row['id'].'  			            " title="buy" type="cpanel">
    <a onclick="                   javascript:buythistool('.$row['id'].')              " class="btn btn-primary btn-xs">
    <font color=white>					Buy				     </font></a> </span><center>
                                                                                                                     </td>
                                                       </tr> ';
 }

 ?> 	    
  <tfoot>
			    <tr>
                                                	<th data-priority="1"></th>
							<th class="all">ID</th>
							<th data-priority="3">Country</th>
							<th data-priority="8">Type</th>
							<th data-priority="15">TLD</th>
							<th data-priority="14">Domain</th>
							<th data-priority="11">Hosting</th>
							<th data-priority="12">CMS</th>
					<th class="all" style="width:9% !important;">Ip Blacklist</th>
							<th class="all">Buy</th>
                            </tr>
	       </tfoot>
</table>
