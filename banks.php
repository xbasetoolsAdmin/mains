 <?php require "header.php"; ?>
          <center>			
               <h2>Banks</h2> 
          </center>
								
   <div class="alert alert-info text-left" role="alert" style="margin: 15px;">
        <ul>
            <li>We Have Fresh  Banks Logs With Fullz info + E-mails access  of  Diffrents Countries ( You Can Use it for Spam ). </li>
            <li>Our E-mails Lists Guarante for you Good results because most of them are from Shops and Big Sites .</li>
            <li>Combo use for cracking (Brute forcing attack) not use for login to email.</li>
       <center>				<h5><li>There is <b> <b><?php $s12 = mysqli_query($dbcon, "SELECT * FROM banks where resseller='$uid'");$r11=mysqli_num_rows($s12);
 echo $r11;?></b> </b> Available.</li></h5><center>
        </ul>
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



               
            </select>
        </div>
        <div class="col-xs-6 col-sm-4 col-lg-2" style="display:inline-block">
      
         
      <label for="seller" style="margin-bottom: 10px; margin-top: 5px">Seller :</label>
            <select name="seller" id="seller" class="form-control" style="color: var(--font-color); background-color: var(--color-card);">
                <option value="">All</option>

            </select>
        </div>
    </div>
    <div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive">
            <table id="dataTable" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);">
                <thead>
                    <tr>
       <th data-priority="1"></th>
      
      <th class="all">ID</th>
      
<th data-priority="3">Type</th>

 <th data-priority="6">Country</th>

 <th data-priority="7">Bank Name</th>

 <th data-priority="8">Balance</th>

 <th data-priority="2">Information</th>

 <th data-priority="9"> Seller </th>
                                             <th data-priority="10">Date added </th>
               
   <th data-priority="11">Price </th>  
                        <th class="all">Action</th>
                    </tr>
                </thead>
               <thody> <?php
$uid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$qu = mysqli_query($dbcon, "SELECT * FROM banks WHERE acctype='banks' AND resseller='$uid' and sold='0' ORDER BY id DESC")or die(mysqli_error());

 while($row = mysqli_fetch_assoc($qu)){
	 
    echo "<tr class='banks-tabel'>
    <td> ".htmlspecialchars($row['id'])." </td>
    <td> ".strtoupper(htmlspecialchars($row['acctype']))." </td>
    <td> ".htmlspecialchars($row['country'])." </td>
    <td> ".htmlspecialchars($row['bankname'])." </td>
	<td> ".htmlspecialchars($row['balance'])." </td>
    <td> ".htmlspecialchars($row['infos'])." </td>
	<td>  "; ?>
	<a data-toggle="modal" class="btn btn-primary btn-xs" data-target="#myModald<?php echo  $row['id']; ?>" >
<font color=white>Open #<? echo htmlspecialchars($row['id']); ?> </a></center> 
<?php
  echo '
 
<div class="modal fade" id="myModald' . $row['id'] . '" >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">
                                           <font color="black"> Banks #' . $row['id'] . ' </font>
                                            </h4>
                                        </div>
                                        <div class="modal-body">
					<font color="black">			'.htmlspecialchars($row['url']).' </font>
					</div>								
					<div class="modal-footer">
<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
</div>';
echo "
</td>
    <td> ".htmlspecialchars($row['date'])." </td>
    <td> ".htmlspecialchars($row['price'])."</td>
    <td> ";
if ($row['sold'] == "0") {
 echo '<div id="shop'.$row["id"].'" type="delete"><a onclick="javascript:delet('.$row["id"].');" class="btn btn-danger btn-xs">remove</a></div>';
 }elseif ($row['sold'] == "deleted") {
	echo "<font color=gray>Deleted</font>"; } else {
echo "<font color=green>[Sold]</font>";	    
	}
    echo "</td>
    </tr>";
 }

 

 ?>

 </tbody>
 </table>   
























 <?php require "footer.php"; ?>
