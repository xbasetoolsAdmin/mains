<?php 
ob_start();
session_start();
date_default_timezone_set('UTC');
require"header.php";
include "includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: login");
    exit(); }
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
$p_data = mysqli_real_escape_string($dbcon, $_GET['p_data']);
?>
         <div id="mainDiv"> </div>
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
            pageDiv('payment<?php echo $p_data; ?>','Add Balance - xBaseTools','Payment.php?p_data=<?php echo $p_data; ?>',0);
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
        setTimeout(function() {$(btn).tooltip('hide');
        /*console.log("hide-2");*/}, 1000);
        }
    </script>
 
 

</body>
</html>

