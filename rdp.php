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
]


<div id="mainDiv"></div>
<script type="text/javascript" src="function_cuntructors/8xfcglkjfsfdfghjjklk.js">
</script>
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
    rdpData(1,'Add Balance - OdinShop','rdp',1);
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
</html>
 <?php require"footer.php";?>
//<script type="text/javascript">
///$(document).keydown((function(event){"17"==event.which&&(cntrlIsPressed=!0)})),$(document).keyup((function(){cntrlIsPressed=!1}));var cntrlIsPressed=!1;function setTooltip(btn,message){$(btn).tooltip("hide").attr("data-original-title",message).tooltip("show")}function hideTooltip(btn){setTimeout((function(){$(btn).tooltip("hide")}),1e3)}$(window).on("popstate",(function(e){location.replace(document.location)})),$(window).on("load",(function(){$(".dropdown").hover((function(){$(".dropdown-toggle",this).trigger("click")})),rdpData(1,"RDPs - xBaseTools","rdp",1),new Clipboard(".copyit").on("success",(function(e){setTooltip(e.trigger,"Copied!"),hideTooltip(e.trigger),e.clearSelection()}))}));
 </script>
</body>
</html>
