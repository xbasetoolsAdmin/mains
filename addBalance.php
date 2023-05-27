   <?php
ob_start();
session_start();
date_default_timezone_set('UTC');
require "header.php";
include "includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
header("location: ../");
exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?> 
 <div class="d-flex flex-row-reverse mt-0">
            <div class="p-2">
                <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round">
                    </span>
                </label>
            </div>
        </div>
  <div class="alert alert-info text-center" role="alert" style="margin: 15px;">
 
  </div>
<style>
 .panel-default {
    border-color: #ecf0f1;
}

.panel {
  background-color: var(--color-card);
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
  .card {
       background-color: var(--color-card);
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
    border-color: var(--color-card);
}

.panel-body {
    padding: 15px;
}

.panel-footer {
    padding: 10px 15px;
    background-color: var(--color-secondary2);
    border-top: 1px solid var(--color-secondary2);
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;

}

.panel-footer .label-info {
    background-color: #3498db;
}

.panel-footer .label-danger {
    background-color: #e74c3c;
}
.panel-footer .label-warning {
    background-color: #FFA726;
}


.panel-footer .label {

    display: inline;
    padding: .2em .6em .3em;
    font-size: 100%;
    font-weight: bold;
    line-height: 1;

    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
}
.display  td {
    background: var(--color-card);
      color: var(--font-color);

}
.dataTables_wrapper .dataTables_paginate .paginate_button {

    color: var(--font-color);

}
#balance_data_paginate .paginate_button {
color: var(--font-color);

}

.alert-info {
    color: var(--color-info);
    background-color: var(--color-backinfo);
    border-color: var(--color-borderinfo);

}

#balance_data_filter{
  color: var(--font-color);
}
#balance_data_length{
  color: var(--font-color);
}
#balance_data_paginate{
  color: var(--font-color);
}
#balance_data_info{
  color: var(--font-color);
}


<div style="padding-left:20px; display:inline-block; margin-bottom:10px">
<span><a href="addBalance.php?do=balance" class="btn btn-primary" style="color:#fff; font-size: 12 px">Add Balance</a></span>
<span><a href="addBalance.php?do=details" class="btn btn-primary" style="color:#fff; font-size: 12 px">Balance Info</a></span>
</div>
<div id="mainDiv"></div>
<script type="text/javascript">

    $(document).keydown(function(event){
        if(event.which=="17")
            cntrlIsPressed = true;
    });

    $(document).keyup(function(){
        cntrlIsPressed = false;
    });

    var cntrlIsPressed = false;


    $(window).on("popstate", function(e) {
        location.replace(document.location);

    });


    $(window).on('load', function() {
		$('.dropdown').hover(function(){ $('.dropdown-toggle', this).trigger('click'); });
	   	pageDiv(13,'Add Balance - OdinShop','addBalance',1);
	   var clipboard = new Clipboard('.copyit');
	    clipboard.on('success', function(e) {
	      setTooltip(e.trigger, 'Copied!');
	      hideTooltip(e.trigger);
	      e.clearSelection();
	   });

});


function setTooltip(btn, message) {
  //console.log("hide-1");
  $(btn).tooltip('hide')
    .attr('data-original-title', message)
    .tooltip('show');
     //console.log("show");
}

function hideTooltip(btn) {
  setTimeout(function() {$(btn).tooltip('hide'); /*console.log("hide-2");*/}, 1000);
}
</script>
</body>
