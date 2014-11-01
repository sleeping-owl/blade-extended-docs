@extends('_layout')

@section('content')
	<div class="jumbotron">
		<p class="lead">
			<b>SleepingOwl BladeExtended</b> is a simple library, that adds <code>bd-foreach</code>, <code>bd-inner-foreach</code>, <code>bd-if</code> and <code>bd-class</code> attribute directives support to your blade templates.
		</p>
	</div>

	<div class="page-header">
		<div id="overview" class="fix-navbar-fixed"></div>
		<h2>Overview</h2>
	</div>
	<p>
	<h4>Create multiple `li` elements, but ignore item with name "_dev"</h4>
	<pre><code class="language-html">{{{ $examples['overview1'] }}}</code></pre>
	<h4>Using bd-inner-foreach you can create multiple element for each array item</h4>
	<pre><code class="language-html">{{{ $examples['overview2'] }}}</code></pre>
	<h4>Add class to element by condition</h4>
	<i>Note: Conditional classes will be added to existing ones or create class attribute if it doesnt exist.</i>
	<pre><code class="language-html">{{{ $examples['overview3'] }}}</code></pre>

	<div class="page-header">
		<div id="installation" class="fix-navbar-fixed"></div>
		<h2>Installation</h2>
	</div>
	<ol>
		<li>
			<p>Require this package in your composer.json and run <code>composer update</code> (or run <code>composer require sleeping-owl/blade-extended:1.x</code> directly):</p>
			<p><code>"sleeping-owl/blade-extended": "1.*"</code></p>
		</li>
		<li>
			<p>After composer update, add service providers to the <code>app/config/app.php</code>:</p>
			<p><code>'SleepingOwl\BladeExtended\BladeExtendedServiceProvider',</code></p>
		</li>
		<li>
			<p>All done! Now you can use new directives in your blade templates.</p>
		</li>
	</ol>

	<div class="page-header">
		<div id="directives" class="fix-navbar-fixed"></div>
		<h2>Directives</h2>
	</div>
	<h3>bd-foreach</h3>
	<p>You can use this directive to create multiple element for each array item. Usage is very similar to blade:</p>
	<pre><code class="language-html">{{{ $examples['bd-foreach'] }}}</code></pre>

	<h3>bd-inner-foreach</h3>
	<p>By using this directive you will repeat entire element content for every array item:</p>
	<pre><code class="language-html">{{{ $examples['bd-inner-foreach'] }}}</code></pre>

	<h3>bd-if</h3>
	<p>You can add or remove entire element using this directive:</p>
	<pre><code class="language-html">{{{ $examples['bd-if'] }}}</code></pre>

	<h3>bd-class</h3>
	<p>Use it if you want to dynamically add classes to the element:</p>
	<pre><code class="language-html">{{{ $examples['bd-class'] }}}</code></pre>

@stop