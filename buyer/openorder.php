<?php
ob_start();
session_start();
date_default_timezone_set( 'UTC' );
include "../includes/config.php";
include( "cr.php" );
if ( !isset( $_SESSION[ 'sname' ] ) and !isset( $_SESSION[ 'spass' ] ) )
										{
										header( "location: ../" );
										exit( );
										}
function srl( $item )
										{
										$item0 = $item;
										$item1 = rtrim( $item0 );
										$item2 = ltrim( $item1 );
										return $item2;
										}
$usrid   = mysqli_real_escape_string( $dbcon, $_SESSION[ 'sname' ] );
$orderid = mysqli_real_escape_string( $dbcon, $_GET[ 'id' ] );
$q = mysqli_query( $dbcon, "SELECT * FROM purchases WHERE buyer='$usrid' and id='$orderid'" ) or die( mysql_error() );
while ( $row = mysqli_fetch_assoc( $q ) )
										{
										///////////////// Cpanel
										if ( $row[ 'type' ] == "cpanel" )
																				{
																				$itemid = $row[ 's_id' ];
																				$qe = mysqli_query( $dbcon, "SELECT * FROM cpanels WHERE id='$itemid'" ) or die( mysql_error() );
																				while ( $rowe = mysqli_fetch_assoc( $qe ) )
																														{
																														$country     = $rowe[ 'country' ];
																														$hosting     = $rowe[ 'infos' ];
																														$information = $rowe[ 'url' ];
																														$d           = explode( "|", $information );
																														$url         = srl( $d[ 0 ] );
																														$login       = srl( $d[ 1 ] );
																														$pass        = srl( $d[ 2 ] );
																														$maindom     = parse_url( $url, PHP_URL_HOST );
																														$domain      = $rowe[ 'domain' ];
																														$code        = array_search( "$country", $countrycodes );
																														$countrycode = strtolower( $code );
?>

<h4>CPANEL</h4>
<table class="table">
<tr>
  <td>Country</td>
  <td><b><span class="flag-icon flag-icon-<?php
																														echo htmlspecialchars( $countrycode );
?>"></span> <?php
																														echo htmlspecialchars( $country );
?></b></td>
</tr>

  <tr>
  <td>Detect Hosting</td>
  <td><b><?php
																														echo htmlspecialchars( $hosting );
?></b></td>
</tr>

  <tr>
  <td>Domain</td>
  <td><b><?php
																														echo $domain;
?></b></td>
</tr>

  <tr>
  <td>Url</td>
  <td><b><a href='http://<?php
																														echo $maindom;
?>:2083' onclick='window.open(this.href);return false;'>https://<?php
																														echo $maindom;
?>:2083</a></b></td>
</tr>

  <tr>
  <td>non-https Url</td>
  <td><b><a href='http://<?php
																														echo $maindom;
?>:2082' onclick='window.open(this.href);return false;'>http://<?php
																														echo $maindom;
?>:2082</a></b></td>
</tr>

  <tr>
  <td>Username</td>
  <td><b><input id='username' onClick='this.setSelectionRange(0, this.value.length)' value='<?php
																														echo htmlspecialchars( $login );
?>' /></b></td>
</tr>

  <tr>
  <td>Password</td>
  <td><b><input id='password' onClick='this.setSelectionRange(0, this.value.length)' value='<?php
																														echo htmlspecialchars( $pass );
?>' /></b></td>
</tr>

  		
</table>
<?php
																														}
																				}
										//////////////End if cPanel
?>
<?php
										///////////////// Shell
										if ( $row[ 'type' ] == "shell" )
																				{
																				$itemid = $row[ 's_id' ];
																				$qe = mysqli_query( $dbcon, "SELECT * FROM stufs WHERE id='$itemid'" ) or die( mysql_error() );
																				while ( $rowe = mysqli_fetch_assoc( $qe ) )
																														{
																														$country     = $rowe[ 'country' ];
																														$information = $rowe[ 'url' ];
																														$code        = array_search( "$country", $countrycodes );
																														$countrycode = strtolower( $code );
?>
<script type="text/javascript">
	   $('.copyit').tooltip({
	   	trigger: 'click',
	   	placement: 'left',
	   	animation:true});
</script>
<h4>SHELL</h4>
<table class="table">
<tr>
  <td>Country</td>
  <td><b><span class="flag-icon flag-icon-<?php
																														echo htmlspecialchars( $countrycode );
?>"></span> <?php
																														echo htmlspecialchars( $country );
?></b></td>
</tr>

  <tr>
  <td>Shell</td>
  <td><b><a href='<?php
																														echo htmlspecialchars( $information );
?>' onclick='window.open(this.href);return false;'><?php
																														echo htmlspecialchars( $information );
?></a></b></td>
</tr>

  		
</table>



<?php
																														}
																				}
										//////////////End if Shell
?>
<?php
										///////////////// rdp
										if ( $row[ 'type' ] == "rdp" )
																				{
																				$itemid = $row[ 's_id' ];
																				$qe = mysqli_query( $dbcon, "SELECT * FROM rdps WHERE id='$itemid'" ) or die( mysql_error() );
																				while ( $rowe = mysqli_fetch_assoc( $qe ) )
																														{
																														$country     = $rowe[ 'country' ];
																														$access      = $rowe[ 'access' ];
																														$windows     = $rowe[ 'windows' ];
																														$ram         = $rowe[ 'ram' ];
																														$state       = $rowe[ 'city' ];
																														$hosting     = $rowe[ 'hosting' ];
																														$information = $rowe[ 'url' ];
																														$code        = array_search( "$country", $countrycodes );
																														$countrycode = strtolower( $code );
																														$information = $rowe[ 'url' ];
																														$d           = explode( "|", $information );
																														$url         = srl( $d[ 0 ] );
																														$login       = srl( $d[ 1 ] );
																														$pass        = srl( $d[ 2 ] );
?>

<script type="text/javascript">
	   $('.copyit').tooltip({
	   	trigger: 'click',
	   	placement: 'left',
	   	animation:true});
</script>
<h4>RDP</h4>
<table class="table">
<tr>
  <td>Country</td>
  <td><b><span class="flag-icon flag-icon-<?php
																														echo htmlspecialchars( $countrycode );
?>"></span> <?php
																														echo htmlspecialchars( $country );
?></b></td>
</tr>

  <tr>
  <td>State</td>
  <td><b><?php
																														echo htmlspecialchars( $state );
?></b></td>
</tr>

  <tr>
  <td>Host</td>
  <td><b><div class="form-group">
  		<div class="input-group col-xs-9">
    	<input class='form-control input-sm' id='host' onClick='this.setSelectionRange(0, this.value.length)' value='<?php
																														echo htmlspecialchars( $url );
?>' />
    	<span class="input-group-btn">
			<button class="btn btn-primary btn-sm copyit" data-clipboard-target="#host">Copy <i class="glyphicon glyphicon-copy"></i></button>
		</span>
  		</div>
		</div></b></td>
</tr>

  <tr>
  <td>Login</td>
  <td><b><div class="form-group">
  		<div class="input-group col-xs-9">
    	<input class='form-control input-sm' id='login' onClick='this.setSelectionRange(0, this.value.length)' value='<?php
																														echo htmlspecialchars( $login );
?>' />
    	<span class="input-group-btn">
			<button class="btn btn-primary btn-sm copyit" data-clipboard-target="#login">Copy <i class="glyphicon glyphicon-copy"></i></button>
		</span>
  		</div>
		</div></b></td>
</tr>

  <tr>
  <td>Password</td>
  <td><b><div class="form-group">
  		<div class="input-group col-xs-9">
    	<input class='form-control input-sm' id='password' onClick='this.setSelectionRange(0, this.value.length)' value='<?php
																														echo htmlspecialchars( $pass );
?>' />
    	<span class="input-group-btn">
			<button class="btn btn-primary btn-sm copyit" data-clipboard-target="#password">Copy <i class="glyphicon glyphicon-copy"></i></button>
		</span>
  		</div>
		</div></b></td>
</tr>

  <tr>
  <td>Windows</td>
  <td><b><?php
																														echo htmlspecialchars( $windows );
?></b></td>
</tr>

  <tr>
  <td>Access</td>
  <td><b><?php
																														echo htmlspecialchars( $access );
?></b></td>
</tr>

  <tr>
  <td>Ram</td>
  <td><b><?php
																														echo htmlspecialchars( $ram );
?></b></td>
</tr>

  <tr>
  <td>Detect Hosting</td>
  <td><b><?php
																														echo htmlspecialchars( $hosting );
?></b></td>
</tr>

  		
</table>



<?php
																														}
																				}
										//////////////End if rdp
?>
	 
<?php
										///////////////// Mailer
										if ( $row[ 'type' ] == "mailer" )
																				{
																				$itemid = $row[ 's_id' ];
																				$qe = mysqli_query( $dbcon, "SELECT * FROM mailers WHERE id='$itemid'" ) or die( mysql_error() );
																				while ( $rowe = mysqli_fetch_assoc( $qe ) )
																														{
																														$country     = $rowe[ 'country' ];
																														$information = $rowe[ 'url' ];
																														$code        = array_search( "$country", $countrycodes );
																														$countrycode = strtolower( $code );
?>

<h4>MAILER</h4>
<table class="table">
<tr>
  <td>Country</td>
  <td><b><span class="flag-icon flag-icon-<?php
																														echo htmlspecialchars( $countrycode );
?>"></span> <?php
																														echo htmlspecialchars( $country );
?></b></td>
</tr>

  <tr>
  <td>Mailer</td>
  <td><b><a href='<?php
																														echo htmlspecialchars( $information );
?>' onclick='window.open(this.href);return false;'><?php
																														echo htmlspecialchars( $information );
?></a></b></td>
</tr>

  		
</table>
<?php
																														}
																				}
										//////////////End if mailer
?>
<?php
										///////////////// Smtp
										if ( $row[ 'type' ] == "smtp" )
																				{
																				$itemid = $row[ 's_id' ];
																				$qe = mysqli_query( $dbcon, "SELECT * FROM smtps WHERE id='$itemid'" ) or die( mysql_error() );
																				while ( $rowe = mysqli_fetch_assoc( $qe ) )
																														{
																														$country     = $rowe[ 'country' ];
																														$hosting     = $rowe[ 'infos' ];
																														$information = $rowe[ 'url' ];
																														$d           = explode( "|", $information );
																														$url         = srl( $d[ 0 ] );
																														$login       = srl( $d[ 1 ] );
																														$pass        = srl( $d[ 2 ] );
																														$port        = srl( $d[ 3 ] );
																														$maindom     = parse_url( $url, PHP_URL_HOST );
																														$code        = array_search( "$country", $countrycodes );
																														$countrycode = strtolower( $code );
?>

<h4>SMTP</h4>
<table class="table">
<tr>
  <td>Country</td>
  <td><b><span class="flag-icon flag-icon-<?php
																														echo htmlspecialchars( $countrycode );
?>"></span> <?php
																														echo htmlspecialchars( $country );
?></b></td>
</tr>

  <tr>
  <td>HOST/IP</td>
  <td><b><input id='host/ip' onClick='this.setSelectionRange(0, this.value.length)' value='<?php
																														echo htmlspecialchars( $url );
?>' /></b></td>
</tr>

  <tr>
  <td>Port</td>
  <td><b><?php
																														echo htmlspecialchars( $port );
?></b></td>
</tr>

  <tr>
  <td>User</td>
  <td><b><input id='user' onClick='this.setSelectionRange(0, this.value.length)' value='<?php
																														echo htmlspecialchars( $login );
?>' /></b></td>
</tr>

  <tr>
  <td>Pass</td>
  <td><b><input id='pass' onClick='this.setSelectionRange(0, this.value.length)' value='<?php
																														echo htmlspecialchars( $pass );
?>' /></b></td>
</tr>

  <tr>
  <td>Sender Email</td>
  <td><b><input id='senderemail' onClick='this.setSelectionRange(0, this.value.length)' value='<?php
																														echo htmlspecialchars( $login );
?>' /></b></td>
</tr>
	
</table>
<?php
																														}
																				}
										//////////////End if Smtp
?>
	  
<?php
										///////////////// Leads
										if ( $row[ 'type' ] == "leads" )
																				{
																				$itemid = $row[ 's_id' ];
																				$qe = mysqli_query( $dbcon, "SELECT * FROM leads WHERE id='$itemid'" ) or die( mysql_error() );
																				while ( $rowe = mysqli_fetch_assoc( $qe ) )
																														{
																														$country     = $rowe[ 'country' ];
																														$description = $rowe[ 'infos' ];
																														$number      = $rowe[ 'number' ];
																														$information = $rowe[ 'url' ];
																														$code        = array_search( "$country", $countrycodes );
																														$countrycode = strtolower( $code );
?>

<script type="text/javascript">
	   $('.copyit').tooltip({
	   	trigger: 'click',
	   	placement: 'left',
	   	animation:true});
</script>
<h4>LEADS</h4>
<table class="table">
<tr>
  <td>Country</td>
  <td><b><span class="flag-icon flag-icon-<?php
																														echo htmlspecialchars( $countrycode );
?>"></span> <?php
																														echo htmlspecialchars( $country );
?></b></td>
</tr>

  <tr>
  <td>Number</td>
  <td><b><?php
																														echo htmlspecialchars( $number );
?></b></td>
</tr>

  <tr>
  <td>About</td>
  <td><b><?php
																														echo htmlspecialchars( $description );
?></b></td>
</tr>

  <tr>
  <td>Download</td>
  <td><b><a href='<?php
																														echo htmlspecialchars( $information );
?>' onclick='window.open(this.href);return false;'><?php
																														echo htmlspecialchars( $information );
?></a></b></td>
</tr>

  		
</table>



<?php
																														}
																				}
										//////////////End if leads
?>

<?php
										///////////////// premium
										if ( $row[ 'type' ] == "account" )
																				{
																				$itemid = $row[ 's_id' ];
																				$qe = mysqli_query( $dbcon, "SELECT * FROM accounts WHERE id='$itemid'" ) or die( mysql_error() );
																				while ( $rowe = mysqli_fetch_assoc( $qe ) )
																														{
																														$country     = $rowe[ 'country' ];
																														$site        = $rowe[ 'sitename' ];
																														$description = $rowe[ 'infos' ];
																														$information = $rowe[ 'url' ];
																														$code        = array_search( "$country", $countrycodes );
																														$countrycode = strtolower( $code );
?>

<h4>PREMIUM</h4>
<table class="table">
<tr>
  <td>Country</td>
  <td><b><span class="flag-icon flag-icon-<?php
																														echo htmlspecialchars( $countrycode );
?>"></span> <?php
																														echo htmlspecialchars( $country );
?></b></td>
</tr>

  <tr>
  <td>Available Information</td>
  <td><b><?php
																														echo htmlspecialchars( $description );
?></b></td>
</tr>

  <tr>
  <td>Website</td>
  <td><b><a><?php
																														echo htmlspecialchars( $site );
?></a></b></td>
</tr>

  <tr>
  <td>Account Info</td>
  <td><b><textarea rows='10' cols='30' ><?php
																														echo htmlspecialchars( $information );
?></textarea></b></td>
</tr>

  		
</table>
<?php
																														}
																				}
										//////////////End if premium
?>

<?php
										///////////////// banks
										if ( $row[ 'type' ] == "banks" )
																				{
																				$itemid = $row[ 's_id' ];
																				$qe = mysqli_query( $dbcon, "SELECT * FROM banks WHERE id='$itemid'" ) or die( mysql_error() );
																				while ( $rowe = mysqli_fetch_assoc( $qe ) )
																														{
																														$country     = $rowe[ 'country' ];
																														$bankname    = $rowe[ 'bankname' ];
																														$balance     = $rowe[ 'balance' ];
																														$description = $rowe[ 'infos' ];
																														$information = $rowe[ 'url' ];
																														$code        = array_search( "$country", $countrycodes );
																														$countrycode = strtolower( $code );
?>

<h4>BANKS</h4>
<table class="table">
<tr>
  <td>Country</td>
  <td><b><span class="flag-icon flag-icon-<?php
																														echo htmlspecialchars( $countrycode );
?>"></span> <?php
																														echo htmlspecialchars( $country );
?></b></td>
</tr>

  <tr>
  <td>Bank Name</td>
  <td><b><?php
																														echo htmlspecialchars( $bankname );
?></b></td>
</tr>

  <tr>
  <td>Available Information</td>
  <td><b><?php
																														echo htmlspecialchars( $description );
?></b></td>
</tr>

  <tr>
  <td>Balance</td>
  <td><b><a><?php
																														echo htmlspecialchars( $balance );
?></a></b></td>
</tr>

  <tr>
  <td>Account Info</td>
  <td><b><textarea rows='10' cols='30' ><?php
																														echo htmlspecialchars( $information );
?></textarea></b></td>
</tr>

  		
</table>
<?php
																														}
																				}
										//////////////End if banks
?>

<?php
										///////////////// scampage
										if ( $row[ 'type' ] == "scampage" )
																				{
																				$itemid = $row[ 's_id' ];
																				$qe = mysqli_query( $dbcon, "SELECT * FROM scampages WHERE id='$itemid'" ) or die( mysql_error() );
																				while ( $rowe = mysqli_fetch_assoc( $qe ) )
																														{
																														$scamname    = $rowe[ 'scamname' ];
																														$description = $rowe[ 'infos' ];
																														$information = $rowe[ 'url' ];
?>

<h4>SCAMPAGE</h4>
<table class="table">
<tr>
  <td>Name</td>
  <td><b><?php
																														echo htmlspecialchars( $scamname );
?></b></td>
</tr>

  <tr>
  <td>Information</td>
  <td><b><?php
																														echo htmlspecialchars( $description );
?></b></td>
</tr>

  <tr>
  <td>Download</td>
  <td><b><a href='<?php
																														echo htmlspecialchars( $information );
?>' onclick='window.open(this.href);return false;'><?php
																														echo htmlspecialchars( $information );
?></a></b></td>
</tr>

  		
</table>
<?php
																														}
																				}
										//////////////End if scampage
?>

<?php
										///////////////// tutorial
										if ( $row[ 'type' ] == "tutorial" )
																				{
																				$itemid = $row[ 's_id' ];
																				$qe = mysqli_query( $dbcon, "SELECT * FROM tutorials WHERE id='$itemid'" ) or die( mysql_error() );
																				while ( $rowe = mysqli_fetch_assoc( $qe ) )
																														{
																														$tutoname    = $rowe[ 'tutoname' ];
																														$description = $rowe[ 'infos' ];
																														$information = $rowe[ 'url' ];
?>

<h4>TUTORIAL</h4>
<table class="table">
<tr>
  <td>Name</td>
  <td><b><?php
																														echo htmlspecialchars( $tutoname );
?></b></td>
</tr>

  <tr>
  <td>Information</td>
  <td><b><?php
																														echo htmlspecialchars( $description );
?></b></td>
</tr>

  <tr>
  <td>Download</td>
  <td><b><a href='<?php
																														echo htmlspecialchars( $information );
?>' onclick='window.open(this.href);return false;'><?php
																														echo htmlspecialchars( $information );
?></a></b></td>
</tr>

  		
</table>
<?php
																														}
																				}
										//////////////End if tutorial
?>
	 <?php
										}
?>