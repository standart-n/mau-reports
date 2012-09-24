

$(document).ready(function(){
	$(".form-table-link").on("click",function(){
		window.open($(this).data("path"),"","width=1090,resizable=yes,scrollbars=yes,status=yes");
	});
});
