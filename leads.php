 <?php require"header.php";
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
<div class="alert alert-info text-center" role="alert" style="margin: 15px;">
</div>
<style>
	.display td {
	background: var(--color-card);
	color: var(--font-color);
	}
	.dataTables_wrapper .dataTables_paginate .paginate_button {
	color: var(--font-color);
	}
	#leads_table_paginate .paginate_button {
	color: var(--font-color);
	}
	.alert-info {
	color: var(--color-info);
	background-color: var(--color-backinfo);
	border-color: var(--color-borderinfo);
	}
	#leads_table_filter {
	color: var(--font-color);
	}
	#leads_table_length {
	color: var(--font-color);
	}
	#leads_table_paginate {
	color: var(--font-color);
	}
	#leads_table_info {
	color: var(--font-color);
	}
</style>

		 

    <div style="padding-left:20px; display:inline-block; margin-bottom:10px">
        <span><a href="addBalance.php?do=balance" class="btn btn-primary" style="color:#fff; font-size: 12 px">Add Balance</a></span>
        <span><a href="addBalance.php?do=details" class="btn btn-primary" style="color:#fff; font-size: 12 px">Balance Info</a></span>
    </div>
    <div id="mainDiv"></div>
    <script type="text/javascript">
        $(document).keydown(function(event) {
            if (event.which == "17")
                cntrlIsPressed = true;
        });
 
        $(document).keyup(function() {
            cntrlIsPressed = false;
        });
 
        var cntrlIsPressed = false;
 
 
        $(window).on("popstate", function(e) {
            location.replace(document.location);
 
        });
 
 
        $(window).on('load', function() {
            $('.dropdown').hover(function() {
                $('.dropdown-toggle', this).trigger('click');
            });
            pageDiv(6, 'Add Balance - OdinShop', 'leads', 1);
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
            setTimeout(function() {
                $(btn).tooltip('hide'); /*console.log("hide-2");*/
            }, 1000);
        }
    </script>
</body>
 
</html>