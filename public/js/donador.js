
$(".work-item img").click(function(){

	var item = $(this).closest("div");

	if(!item.hasClass("selected"))
		item.addClass("selected")
	else
		item.removeClass("selected")
});

$('button').click(function(){
	$.confirm({
	    title: 'Subcategor&iacute;a',
	    content: 'url:' + window.location.href  + '/subcat',
	    onContentReady: function () {
	    },
	    columnClass: 'medium',
	});
});
