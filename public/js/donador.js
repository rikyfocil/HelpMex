
$(".work-item img").click(function(){

	var item = $(this).closest("div");

	if(!item.hasClass("selected"))
		item.addClass("selected")
	else
		item.removeClass("selected")
});
