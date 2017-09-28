$('button.actualizar').click(function(){
	$.confirm({
	    title: 'Subcategor&iacute;a',
	    content: 'url:' + window.location.href  + '/subcat',
	    onContentReady: function () {
	    	$('.subcat div p').unbind("click");
			$('.subcat div p').click(changeUrgencySelection);
	    },
	    columnClass: 'medium',
	});
});

function changeUrgencySelection(){
	$(this).closest('.subcat').find('div.selected').removeClass('selected');
	$(this).closest('div').addClass('selected');
}

