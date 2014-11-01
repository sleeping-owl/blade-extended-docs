@extends('_layout')

@section('content')
	<div class="jumbotron">
		<p class="lead">
			<b>SleepingOwl BladeExtended</b> &mdash; небольшая библиотека, добавляющая поддержку директив <code>bd-foreach</code>, <code>bd-inner-foreach</code>, <code>bd-if</code> и <code>bd-class</code> в ваши Blade шаблоны.
		</p>
	</div>

	<div class="page-header">
		<div id="overview" class="fix-navbar-fixed"></div>
		<h2>Обзор</h2>
	</div>
	<p>
	<h4>Создание нескольких элементов `li`, игнорируя элемент с названием "_dev"</h4>
	<pre><code class="language-html">{{{ $examples['overview1'] }}}</code></pre>
	<h4>Используя bd-inner-foreach вы можете создавать несколько элементов для каждой записи массива</h4>
	<pre><code class="language-html">{{{ $examples['overview2'] }}}</code></pre>
	<h4>Добавления класса элементу по условию</h4>
	<i>Примечание: динамические классы будут добавлены к существующему аттрибуту <code>class</code> либо данный аттрибут будет создан.</i>
	<pre><code class="language-html">{{{ $examples['overview3'] }}}</code></pre>

	<div class="page-header">
		<div id="installation" class="fix-navbar-fixed"></div>
		<h2>Установка</h2>
	</div>
	<ol>
		<li>
			<p>Добавьте данный пакет в ваш composer.json и выполните <code>composer update</code> (или выполните в терминале <code>composer require sleeping-owl/blade-extended:1.x</code>):</p>
			<p><code>"sleeping-owl/blade-extended": "1.*"</code></p>
		</li>
		<li>
			<p>Добавьте "service provider" в ваш конфигурационный файл <code>app/config/app.php</code>:</p>
			<p><code>'SleepingOwl\BladeExtended\BladeExtendedServiceProvider',</code></p>
		</li>
		<li>
			<p>Все готово! Теперь вы можете использовать новые директивы в ваших blade-шаблонах.</p>
		</li>
	</ol>

	<div class="page-header">
		<div id="directives" class="fix-navbar-fixed"></div>
		<h2>Директивы</h2>
	</div>
	<h3>bd-foreach</h3>
	<p>Вы можете использовать эту директиву для создания элемента для каждой записи в массиве. Синтаксис очень схож с синтаксисом blade:</p>
	<pre><code class="language-html">{{{ $examples['bd-foreach'] }}}</code></pre>

	<h3>bd-inner-foreach</h3>
	<p>Используя данную директиву вы можете повторять все содержимое элемента для каждой записи в массиве:</p>
	<pre><code class="language-html">{{{ $examples['bd-inner-foreach'] }}}</code></pre>

	<h3>bd-if</h3>
	<p>Вы можете добавить или удалить весь элемент используя эту директиву:</p>
	<pre><code class="language-html">{{{ $examples['bd-if'] }}}</code></pre>

	<h3>bd-class</h3>
	<p>Используется для динамического добавления классов элементу:</p>
	<pre><code class="language-html">{{{ $examples['bd-class-ru'] }}}</code></pre>

@stop