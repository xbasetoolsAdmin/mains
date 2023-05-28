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

<ul>
            
            
 </ul>
</div>
<style>.display td{background:var(--color-card);color:var(--font-color)}.dataTables_wrapper .dataTables_paginate .paginate_button{color:var(--font-color)}#accounts_data_paginate .paginate_button{color:var(--font-color)}.alert-info{color:var(--color-info);background-color:var(--color-backinfo);border-color:var(--color-borderinfo)}#accounts_data_filter{color:var(--font-color)}#accounts_data_length{color:var(--font-color)}#accounts_data_paginate{color:var(--font-color)}#accounts_data_info{color:var(--font-color)}</style>

<div style="padding-center:20px; display:inline-block; margin-bottom:10px">


</div>

 
 
            <div class="row m-2 pt-3" style="max-width:100%; color: var(--font-color); background-color: var(--color-card);">
                <div class="col-sm-12 table-responsive">
                        </div>
                   <table id="mainDiv" class="display responsive table-hover" style="width:100%; color: var(--font-color); background-color: var(--color-card);" ">
               
                </table>
                </div>
          </div>
     </div>

<?php require"footer.php";?>
<script type="text/javascript" src="5dfyuiilfkjnfbxvxcgvh.js"> </script>
</body>
</html>
