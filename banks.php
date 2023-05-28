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
                               </div>
                         </div> 
                     </div>
                </div>       
            </div>
          </div>
     </div>
 </div>
<table width="100%" id="dataTable" class="display table-responsive table-hover dataTable no-footer" role="" aria-describedby="dataTable_info" style="width: 100%;">        
              <thead>
                <tr> 
                   <th>ID</th>
                  <th>Type</th>
                  <th>Country</th>
                   <th>Bank Name</th>
                  <th>Balance</th>
                  <th>Information</th>
                  <th>Seller</th>
                 <th>Date added</th>
                 <th>Price</th>
                <th>Action</th>
                </tr>
                </thead>
		    
         <tbody id='tbody2'>



























 <?php require "footer.php"; ?>
<script>
$('#dataTable').dataTable( {
  "lengthChange": false
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