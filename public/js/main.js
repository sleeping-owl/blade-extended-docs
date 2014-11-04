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

	var demo = function () {
		var chevron = 'fa-chevron-circle-right';
		var loading = 'fa-spinner fa-spin';
		var demoReload = $('.demo-reload');
		if (demoReload.length == 0) return;

		var demoSourceRun = function ()
		{
			demoReload.removeClass(chevron);
			demoReload.addClass(loading);
			$.post('/demo', {'source' : $('.demo-source').val()}, function (data) {
				demoReload.removeClass(loading);
				demoReload.addClass(chevron);
				$('.demo-result').text(data);
			});
		}
		demoSourceRun();
		demoReload.click(demoSourceRun);
	}
	demo();

});

hljs.initHighlightingOnLoad();