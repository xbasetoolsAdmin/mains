
            <?php
            ob_start();
            session_start();
            date_default_timezone_set('UTC');
            include "includes/config.php";
            if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
            header("location: ../");
            exit();
            }
            $usrid =mysqli_real_escape_string($dbcon, $_SESSION['sname']);
            ?>
<div class="row m-2 pt-3" style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">

<div class="col-sm-12 table-responsive" id="mainDiv">

<table id="banks_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);" ">
        <thead>

            <tr>
                 <th> </th>
                 <th>ID </th>
                <th>Country</th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Salary</th>
             <th>Start date</th>
            <th>Start date</th>
            </tr>
        </thead>
        <tbody>

 <?php
include("cr.php");
$q = mysqli_query($dbcon, "SELECT * FROM accounts WHERE sold='0' ORDER BY RAND()")or die(mysqli_error());
 while($row = mysqli_fetch_assoc($q)){
	 
	 	 $countryfullname = $row['country'];
	  $code = array_search("$countryfullname", $countrycodes);
	 $countrycode = strtolower($code);
	    $qer = mysqli_query($dbcon, "SELECT * FROM resseller WHERE username='".$row['resseller']."'")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
     echo "
 <tr>      
                  <td> </td>
	  <td> ".$row['id']."</td>			       
    <td id='bank_country'><i class='flag-icon flag-icon-$countrycode'></i>&nbsp;".htmlspecialchars($row['country'])." </td>
    <td id='bank_sitename'> ".htmlspecialchars($row['bankname'])." </td> 
    <td> ".htmlspecialchars($row['balance'])." </td> 
	<td> ".htmlspecialchars($row['infos'])." </td>
    <td id='bank_seller'> ".htmlspecialchars($SellerNick)."</td>
    <td> ".htmlspecialchars($row['price'])."</td>
	    <td> ".$row['date']."</td>";
    echo '
    <td>
	<span id="bank'.$row['id'].'" title="buy" type="bank"><a onclick="javascript:buythistool('.$row['id'].')" class="btn btn-primary btn-xs"><font color=white>Buy</font></a></span><center>
    </td>
            </tr>
     ';
 }

	  ?>
 
    </tbody>
</table>
<script type="text/javascript">
 $(document).ready(function () {
$('#banks_data').DataTable({
 lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],
    });
});
                    $('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#sitename").text().toLowerCase() );var ck3 = $.trim( $(this).find("#seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="country"]').val().toLowerCase() );var val2 = $.trim( $('input[name="sitename"]').val().toLowerCase() );var val3 = $.trim( $('select[name="seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || (ck3 != val3 && val3 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});
                    function buythistool(id){
                    bootbox.confirm("Are you sure?", function(result) {
                    if(result ==true){
                    $.ajax({
                    method:"GET",
                    url:"buytool.php?id="+id+"&t=banks",
                    dataType:"text",
                    success:function(data){
                    if(data.match(/<button/)){
                    $("#bank"+id).html(data).show();
                    }else{
                    bootbox.alert('<center><img src="files/img/balance.png"><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class="btn btn-primary btn-xs"  href="addBalance" onclick="window.open(this.href);return false;" >Add Balance <span class="glyphicon glyphicon-plus"></span></a></h4></center>')
                    }
                    },
                    });
                    ;}
                    });
                    }
                    function openitem(order){
                    $("#myModalLabel").text('Order #'+order);
                    $('#myModal').modal('show');
                    $.ajax({
                    type:       'GET',
                    url:        'showOrder'+order+'.html',
                    success:    function(data)
                    {
                    $("#modelbody").html(data).show();
                    }});
                    }
                    </script>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
