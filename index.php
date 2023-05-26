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
    <div class="container-fluid" id="mainDiv">
	<!--<span><a href=" addBalance.php?do=balance" class="btn btn-primary" style="color:#fff; font-size: 12 px">Add Balance</a></span>--->
	<!--<span><a href="addBalance.php?do=details" class="btn btn-primary" style="color:#fff; font-size: 12 px">Balance Info</a></span>--->
</div>
<script type="text/javascript">
$(document).ready((function ()
{
  $("#mainDiv").DataTable(
  {
    lengthMenu: [
      [10, 25, 100, 500, -1],
      [10, 25, 100, 500, "All"]
    ],
    iDisplayLength: 1e3,
    aaSorting: []
  })
})), $(document).keydown((function (t)
{
  "17" == t.which && !0
})), $(document).keyup((function ()
{
  !1
}));
$(window).on("popstate", (function (t)
{
  location.replace(document.location)
})), $(window).on("load", (function ()
{
  $(".dropdown").hover((function ()
  {
    $(".dropdown-toggle", this).trigger("click")
  })), pageDiv(0, "main - XbaseTools", "main", 1), 
new Clipboard(".copyit").on("success", (function (t)
  {
    ! function setTooltip(t, e)
    {
      $(t).tooltip("hide").attr("data-original-title", e).tooltip("show")
    }(t.trigger, "Copied!"),
    function hideTooltip(t)
    {
      setTimeout((function ()
      {
        $(t).tooltip("hide")
      }), 1e3)
    }(t.trigger), t.clearSelection()
  }))
})), $("#filterbutton").click((function ()
{
  $("#table tbody tr").each((function ()
  {
    var t = $.trim($(this).find("#country").text().toLowerCase()),
      e = $.trim($(this).find("#tld").text().toLowerCase()),
      o = $.trim($(this).find("#hosting").text().toLowerCase()),
      n = $.trim($(this).find("#seller").text().toLowerCase()),
						
      i = $.trim($('select[name="country"]').val().toLowerCase()),
      l = $.trim($('input[name="tld"]').val().toLowerCase()),
      a = $.trim($('input[name="hosting"]').val().toLowerCase()),
      c = $.trim($('select[name="seller"]').val().toLowerCase());
						
    t != i && "" != i || -1 == e.indexOf(l) || -1 == o.indexOf(a) || n != c && "" != c ? $(this).hide() : $(this).show()
				
  })), $("#filterbutton").prop("disabled", !0)
})), $(".filterselect").change((function ()
{
  $("#filterbutton").prop("disabled", !1)
})), $(".filterinput").keyup((function ()
{
  $("#filterbutton").prop("disabled", !1)
})), xcheck = 0;
</script>
</body>
</html>