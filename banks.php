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
               <thody
                  </tbody>
            </table>
        </div>
    </div>

























 <?php require "footer.php"; ?>
<script>
 $(document).ready(function() {
$('#dataTable').dataTable( {
    responsive": true
  "lengthChange": true
});
function delet(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./ajax/dbanks.php?id="+id,
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}
		</script>