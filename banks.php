 <?php
ob_start();
session_start();
date_default_timezone_set('UTC');
require "header.php";
include "includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
header("location: ../");
exit(); }
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']); ?>
<style>
.display td {
background:var(--color-card);
color:var(--font-color)
}
.dataTables_wrapper .dataTables_paginate .paginate_button{color:var(--font-color)}#bank_data_paginate .paginate_button{color:var(--font-color)}.alert-info{color:var(--color-info);background-color:var(--color-backinfo);border-color:var(--color-borderinfo)}#banks_data_filter{color:var(--font-color)}#banks_data_length{color:var(--font-color)}#banks_data_paginate{color:var(--font-color)}#banks_data_info{color:var(--font-color)}</style>
<ul class="nav nav-tabs">
    <div class="alert alert-info text-center" role="alert" style="margin: 15px;">
    
    
    </div>


    
    
<table id="banks_data" class="display" style="width:100%">
        <thead>
       <tr>
  <th>ID</th>
  <th>Type</th>
  <th>Country</th>
  <th>Bank Name</th>
  <th>Balance</th>
  <th>Information</th>
  <th>Open</th>
  <th>Date added</th>
  <th>Price</th>
  <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                
            </tr>
        </tbody>
         <tfoot>
            <tr>
                <th>0</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4.</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
            </tr>
        </tfoot>
    </table>
<script  src="controllers/0fgdgfddffkjhgdfxd.js">

</script>             
<?php require"footer.php";?>
<script  type="text/javascript">
  $(document).ready(function(){
$('#banks_data').DataTable ({
       "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": true,
        "order": [],
        "lengthMenu": [[10, 25, 50, 100, 500, 10000], [10, 25, 50, 100, 500, "All"]],
        "columnDefs": [
             {
         "targets": [ 0 ],
          "visible": false
                  }
                  ], 
            ajax: 'data/objects.json',
    
           columns: [
            { data: '0' },
            { data: '1' },
            { data: '2' },
            { data: '3' },
            { data: '4' },
            { data: '5' },
            { data: '6' },
            { data: '7' },
            { data: '8' },
            { data: '9' },
        ],
    });
});
</script>
</div>
</body>
</html>
