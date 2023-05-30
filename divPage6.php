I'm <?php
   ob_start();
   session_start();
   date_default_timezone_set('UTC');
   include "includes/config.php";
   
   if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
       header("location: ../");
       exit();
   }
   $usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
 
{
    "data": [
        {
            "Country": [
                "&nbsp;\".htmlspecialchars($row['country']).\" "
            ]
        },
        {
            "Description": [
                " \".htmlspecialchars($row['infos']).\" "
            ]
        },
        {
            "Email N": [
                " \".htmlspecialchars($row['number']).\" "
            ]
        },
        {
            "Seller": [
                " \".htmlspecialchars($SellerNick).\""
            ]
        },
        {
            "Price": [
                " \".htmlspecialchars($row['price']).\""
            ]
        },
        {
            "Added on ": [
                " \".$row['date'].\""
            ]
        },
        {
            "Buy": [
                "\n\tBuy\n    "
            ]
        }
    ]
}
  ?>

<script type="text/javascript">
let table = new DataTable('#table', {
    responsive: true
});
$('#filterbutton').click(function () {$("#table tbody tr").each(function() {var ck1 = $.trim( $(this).find("#country").text().toLowerCase() );var ck2 = $.trim( $(this).find("#tld").text().toLowerCase() );var ck3 = $.trim( $(this).find("#hosting").text().toLowerCase() );var ck4 = $.trim( $(this).find("#seller").text().toLowerCase() ); var val1 = $.trim( $('select[name="country"]').val().toLowerCase() );var val2 = $.trim( $('input[name="tld"]').val().toLowerCase() );var val3 = $.trim( $('input[name="hosting"]').val().toLowerCase() );var val4 = $.trim( $('select[name="seller"]').val().toLowerCase() ); if((ck1 != val1 && val1 != '' ) || ck2.indexOf(val2)==-1 || ck3.indexOf(val3)==-1 || (ck4 != val4 && val4 != '' )){ $(this).hide();  }else{ $(this).show(); } });$('#filterbutton').prop('disabled', true);});$('.filterselect').change(function () {$('#filterbutton').prop('disabled', false);});$('.filterinput').keyup(function () {$('#filterbutton').prop('disabled', false);});
function buythistool(id){
  bootbox.confirm("Are you sure?", function(result) {
        if(result ==true){
      $.ajax({
     method:"GET",
     url:"buytool.php?id="+id+"&t=leads",
     dataType:"text",
     success:function(data){
         if(data.match(/<button/)){
		 $("#lead"+id).html(data).show();
         }else{
            bootbox.alert('<center><img src="files/img/balance.png"><h2><b>No enough balance !</b></h2><h4>Please refill your balance <a class="btn btn-primary btn-xs"  href="addBalance.html" onclick="window.open(this.href);return false;" >Add Balance <span class="glyphicon glyphicon-plus"></span></a></h4></center>')
         }
     },
   });
       ;}
  });
}
g:xcheck=0;
function check(id){   
     if(xcheck > 1){
    bootbox.alert("<b>Wait</b> - Other checking operation is executed!");
  } else {
    xcheck++;
    var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('Checking...').show();
	$.ajax({
	type: 		'GET',
	url: 		'Checklead'+id+'.html',
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
		xcheck--;
	}});
} }

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
</div>
