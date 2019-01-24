$(document).ready(function(){
	// check change event of the text field
	$("#steamid").keyup(function(){
		// get text steamid text field value
		var steamid = $("#steamid").val();

		// check steamid name only if length is greater than or equal to 3
		if(steamid.length >= 3)
		{
			$("#status").html('<i class="fa fa-refresh fa-spin fa-1x fa-fw margin-bottom"></i> wait ...');
			// check steamid
			$.post("/test2/csgo/inc/check_form/username_check.php", {steamid: steamid}, function(data, status){
				$("#status").html(data);
			});
		}
	});
});