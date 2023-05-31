

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
		
		
		
		