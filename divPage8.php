
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
            
            </div>
          <div class="row m-2 pt-3 " style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
    <div class="col-sm-12 table-responsive">
        <table id=" " class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);"></div>
</div>
<div class="row m-2 pt-3" style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
<div class="col-sm-12 table-responsive" id="mainDiv">
<table id="banks_data" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);" ">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
             <th>Start date</th>
            <th>Start date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>."id".</td>
                <td>Name</td>
                <td>Position</td>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
    </tbody>
</table>
</div>
</div>
</table>
    </div></div>
                    <script type="text/javascript">
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
