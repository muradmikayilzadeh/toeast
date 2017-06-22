$(".img").click(function(event) {
	
	var source = $(this).attr('src');

	console.log(source)

	$(".img").hide();
	$(".great-img").removeClass('hidden');
	$(".great-img img").attr('src', source);
	$(".great-img img").css({
		display: 'block',
		margin: '0 auto',
	});

});

$(".back").click(function(event) {

	$(".img").show();

	$(".great-img").addClass('hidden');
	$(".great-img img").css({
		display: 'none',
		// margin: '0 auto',
	});

});