]function deletrdps(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=rdps",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}

function deletshells(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=stufs",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}

function deletcpanels(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=cpanels",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}

function deletmailers(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=mailers",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}

function deletsmtps(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=smtps",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}

function deletleads(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=leads",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}

function deletbanks(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=banks",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}

function deletpremium(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=accounts",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}
function deletscam(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=scampages",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}
function delettuto(id)
{   var type = $("#shop"+id).attr('type')
	$("#shop"+id).html('processing ..').show();
	$.ajax({
	METHOD: 		'GET',
     url:"./delete.php?id="+id+"&table=tutorials",
	success:	function(data)
	{
		$("#shop"+id).html(data).show();
	}});
}

