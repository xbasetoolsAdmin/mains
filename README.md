<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
			<h4 class="modal-title" id="myModalLabel"></h4>
		</div>
		<div class="modal-body" id="modelbody">
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready((function ()
{
  $("#leads_table").DataTable(
  {
    lengthMenu: [
      [10, 25, 100, 500, -1],
      [10, 25, 100, 500, "All"]
    ],
    iDisplayLength: 1e3,
    aaSorting: []
  })
})),
