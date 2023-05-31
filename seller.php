<?php 
include('header.php');
?>


<center<h4>PREMIUM</h4></center>



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





<table id="lead_data" class="display" style="width:100%">
  <thead>
    <tr>
      <th>id</th>
      <th>country</th>
      <th>infos</th>
      <th>seller</th>
      <th>price</th>
          </tr>
				      </thead>
			      	<tbody>
		        		</tr>
										
						 <th><?php
																														echo htmlspecialchars( $tutoname );
?></th>
      <th><?php
																														echo htmlspecialchars( $description );
?></th>
      <th><?php
																														echo htmlspecialchars( $site );
?></th>
      <th><?php
																														echo htmlspecialchars( $information );
?></th>
			    </tr>
  </tbody>
  </table>
		
		
		
		