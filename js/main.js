$(".product").on('click', function () {
	let link = $(this).attr('href')

	window.location.replace(link);
});