$(".product").on('click', function () {
	let link = $(this).attr('href');
	location.href=link;
});
