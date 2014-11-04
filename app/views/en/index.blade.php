@extends('_layout')

@section('content')
	<div class="jumbotron">
		<p class="lead">
			<b>SleepingOwl BladeExtended</b> is a simple library, that adds control directives attributes to your blade templates (<code>bd-foreach</code>, <code>bd-inner-foreach</code>, <code>bd-if</code>, <code>bd-attr-&lt;name&gt;</code>, <code>bd-class</code> and other).
			<p><a class="btn btn-primary btn-lg" role="button" href="{{ route('demo') }}">Show Demo</a></p>
		</p>
	</div>

	<div class="page-header">
		<div id="overview" class="fix-navbar-fixed"></div>
		<h2>Overview</h2>
	</div>
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

	<h3>bd-attr-&lt;attribute name&gt;</h3>
	<p>Use it if you want to dynamically add attribute to the element:</p>
	<pre><code class="language-html">{{{ $examples['bd-attr'] }}}</code></pre>

	<h3>bd-yield</h3>
	<p>This directive adds <code>{{'@' . 'yield' }}()</code> content inside your tag:</p>
	<pre><code class="language-html">{{{ $examples['bd-yield'] }}}</code></pre>

	<h3>bd-include</h3>
	<p>This directive adds <code>{{'@' . 'include' }}()</code> content inside your tag:</p>
	<pre><code class="language-html">{{{ $examples['bd-include'] }}}</code></pre>

	<h3>bd-unwrap</h3>
	<p>Use this directive to unwrap tag (replace entire tag with it content):</p>
	<pre><code class="language-html">{{{ $examples['bd-unwrap'] }}}</code></pre>

	<div class="page-header">
		<div id="extensions" class="fix-navbar-fixed"></div>
		<h2>Extensions</h2>
	</div>
	<p>You can register your own extensions. Create file <code>blade_extensions.php</code> in your <code>app/</code> folder
		and write any extensions you want. Require this file from your <code>app/start/global.php</code>:</p>
	<pre><code class="language-php">{{{ $examples['extension-require'] }}}</code></pre>
	<p>Example of simple extension:</p>
	<pre><code class="language-php">{{{ $examples['extension-example'] }}}</code></pre>
	<p>This extension will replace every <code>bd-my="$anything"</code> attribute with <code>id="{{'{'.'{$anything}'.'}'}}"</code>.</p>
	<h4>How to Create Your Own</h4>
	<p><strong>Important:</strong> don't forget to clear compiled views after changes.</p>
	<p><code>BladeExtended::extend</code> expect 2 arguments:</p>
	<ol>
		<li>attribute name (or regexp). <i>e.g.: <code>'bd-my'</code>, <code>'bd-test-(?&lt;argument&gt;[a-z]+)'</code></i></li>
		<li>closure, that expects 2 parameters:
			<ol>
				<li><code>SleepingOwl\BladeExtended\BladeExtended</code> instance</li>
				<li>
					<code>&$finded</code> array:
					<pre><code class="language-php">{{{ $examples['extension-finded'] }}}</code></pre>
				</li>
			</ol>
		</li>
	</ol>
	<h4>BladeExtended Methods to Use</h4>
	<p>There are several methods you can use to alter result html:</p>
	<ul>
		<li><code>insertContent($position, $insertString)</code> &mdash; insert string at specific position</li>
		<li><code>removeContent($from, $to)</code> &mdash; remove content from <code>$from</code> position to <code>$to</code> position</li>
		<li><code>replaceContent($from, $to, $string)</code> &mdash; replace content from <code>$from</code> position to <code>$to</code> position with <code>$string</code></li>
		<li><code>replaceAttribute($attribute, $replacement, $start, $end)</code> &mdash; replace whole attribute with <code>$replacement</code> in part of html from <code>$start</code> to <code>$end</code></li>
		<li><code>deleteAttribute($attribute, $start, $end)</code> &mdash; remove attribute in part of html from <code>$start</code> to <code>$end</code></li>
		<li><code>wrapOuterContent($finded, $before, $after)</code> &mdash; wrap whole tag with <code>$before</code> and <code>$after</code></li>
		<li><code>wrapInnerContent($finded, $before, $after)</code> &mdash; wrap tag content with <code>$before</code> and <code>$after</code></li>
		<li><code>parseShortSyntax($value)</code> &mdash; parse short syntax from <code>$var ? 'value'</code> to <code>$var ? 'value' : NULL</code></li>
	</ul>

@stop