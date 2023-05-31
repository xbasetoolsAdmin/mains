<?php 
include'header.php';
?>

<?php
										
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
<center<h4>PREMIUM</h4></center>

<table id="lead_data" class="display" style="width:100%">
  <thead>
    <tr>
      <th>id</th>
      <th>country</th>
      <th>infos</th>
      <th>seller</th>
      <th>price</th>
      <th>date</th>
          </tr>
				      </thead>
			      	<tfoot>
		        		</tr>
										<th></th>
						 <th>id</th>
      <th>country</th>
      <th>infos</th>
      <th>seller</th>
      <th>price</th>
      <th>date</th>
			    </tr>
  </tfoot>
  </table>
		
		
		
		