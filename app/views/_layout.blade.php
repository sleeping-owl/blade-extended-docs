<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SleepingOwl BladeExtended</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/main.css') }}
	{{ HTML::style('css/daux-blue.css') }}
	{{ HTML::style('css/font-awesome.min.css') }}
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<a id="top" class="navbar-brand navbar-brand-active" bd-attr-href="route('index', $lang)">SleepingOwl
					BladeExtended</a>
			</div>
			<ul class="nav navbar-nav" bd-include="$lang . '.menu'"></ul>
			<div bd-include="'_partials.lang_control'" bd-unwrap></div>
		</div>
	</div>

	<div class="container" bd-yield="'content'"></div>

	<div class="well container footer text-right">
		&copy; 2014{{ (date('Y') != 2014) ? '&mdash;' . date('Y') : '' }} <a href="mailto:owl.sleeping@yahoo.com">Sleeping Owl</a>
	</div>

	{{ HTML::script('js/jquery-1.11.0.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/highlight.min.js') }}
	{{ HTML::script('js/main.js') }}
</body>
</html>
