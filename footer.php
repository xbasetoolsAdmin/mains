<?php require"header.php";
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
<div class="alert alert-info text-center" role="alert" style="margin: 15px;">
</div>
<style>
	.display td {
	background: var(--color-card);
	color: var(--font-color);
	}
	.dataTables_wrapper .dataTables_paginate .paginate_button {
	color: var(--font-color);
	}
	#cpanel_table_paginate .paginate_button {
	color: var(--font-color);
	}
	.alert-info {
	color: var(--color-info);
	background-color: var(--color-backinfo);
	border-color: var(--color-borderinfo);
	}
	#cpanel_table_filter {
	color: var(--font-color);
	}
	#cpanel_table_length {
	color: var(--font-color);
	}
	#cpanel_table_paginate {
	color: var(--font-color);
	}
	#cpanel_table_info {
	color: var(--font-color);
	}
</style>
<ul class="nav nav-tabs">
	<li class="active"><a href="#filter" data-toggle="tab">Filter</a></li>
</ul>
<div id="myTabContent" class="tab-content" >
	<div class="tab-pane active in" id="filter">
		<table class="table">
			<thead>
				<tr>
					<th>Country</th>
					<th>Domain TLD</th>
					<th>Detected Hosting</th>
					<th>Seller</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<select class='filterselect form-control input-sm' name="cpanel_country">
							<option value="">ALL</option>
							<?php
								$query = mysqli_query($dbcon, "SELECT DISTINCT(`country`) FROM `cpanels` WHERE `sold` = '0' ORDER BY country ASC");
									while($row = mysqli_fetch_assoc($query)){
									echo '<option value="'.$row['country'].'">'.$row['country'].'</option>';
									}
								?>
						</select>
					</td>
					<td><input class='filterinput form-control input-sm' name="cpanel_tld" size='3'></td>
					<td><input class='filterinput form-control input-sm' name="cpanel_hosting" size='3'></td>
					<td>
						<select class='filterselect form-control input-sm' name="cpanel_seller">
							<option value="">ALL</option>
							<?php
								$query = mysqli_query($dbcon, "SELECT DISTINCT(`resseller`) FROM `cpanels` WHERE `sold` = '0' ORDER BY resseller ASC");
									while($row = mysqli_fetch_assoc($query)){
										 $qer = mysqli_query($dbcon, "SELECT DISTINCT(`id`) FROM resseller WHERE username='".$row['resseller']."' ORDER BY id ASC")or die(mysql_error());
										   while($rpw = mysqli_fetch_assoc($qer))
											 $SellerNick = "seller".$rpw["id"]."";
									echo '<option value="'.$SellerNick.'">'.$SellerNick.'</option>';
									}
								?>
						</select>
					</td>
					<td><button id='filterbutton'class="btn btn-primary btn-sm" disabled>Filter <span class="glyphicon glyphicon-filter"></span></button></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="row m-2 pt-3" style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
	<div class="col-sm-12 table-responsive">
		<table id="cpanel_table" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);" ">
			<thead>
				<tr>
					<th scope="col" >Country</th>
					<th scope="col">TLD</th>
					<th scope="col">Detect Hosting</th>
					<th scope="col">Seller</th>
					<th scope="col">Check</th>
					<th scope="col">Price</th>
					<th scope="col">Added on </th>
					<th scope="col">Buy</th>
				</tr>
			</thead>
		</table>
	</div>
	<!--<span><a href=" addBalance.php?do=balance" class="btn btn-primary" style="color:#fff; font-size: 12 px">Add Balance</a></span>--->
	<!--<span><a href="addBalance.php?do=details" class="btn btn-primary" style="color:#fff; font-size: 12 px">Balance Info</a></span>--->
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel"></h4>
			</div>
			<div class="modal-body" id="modelbody">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title" id="myModalLabel"></h4>
			</div>
			<div class="modal-body" id="modelbody">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			<h4 class="modal-title" id="myModalLabel"></h4>
		</div>
		<div class="modal-body" id="modelbody">
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>

