$(function ()
{

	var selectCurrentLink = function ()
	{
		var currentPage = window.location.href;

		$('.nav:first li.active').removeClass('active');
		var currentPageLink = $('.nav a[href="' + currentPage + '"]');
		currentPageLink.closest('li').addClass('active');
	};

	$('.nav:first li').click(function ()
	{
		setTimeout(selectCurrentLink, 100);
	});
	selectCurrentLink();
});
