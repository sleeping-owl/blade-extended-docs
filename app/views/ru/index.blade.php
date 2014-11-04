@extends('_layout')

@section('content')
	<div class="jumbotron">
		<p class="lead">
			<b>SleepingOwl BladeExtended</b> &mdash; небольшая библиотека, добавляющая поддержку директив в ваши Blade шаблоны (<code>bd-foreach</code>, <code>bd-inner-foreach</code>, <code>bd-if</code>, <code>bd-attr-&lt;name&gt;</code>, <code>bd-class</code> и другие).
		</p>
	</div>

	<div class="page-header">
		<div id="overview" class="fix-navbar-fixed"></div>
		<h2>Обзор</h2>
	</div>
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

	<h3>bd-attr-&lt;attribute name&gt;</h3>
	<p>Используется для динамического добавления аттрибутов элементу:</p>
	<pre><code class="language-html">{{{ $examples['bd-attr-ru'] }}}</code></pre>

	<h3>bd-yield</h3>
	<p>Эта директива добавляет <code>{{'@' . 'yield' }}()</code> в содержимое тэга:</p>
	<pre><code class="language-html">{{{ $examples['bd-yield'] }}}</code></pre>

	<h3>bd-include</h3>
	<p>Эта директива добавляет <code>{{'@' . 'include' }}()</code> в содержимое тэга:</p>
	<pre><code class="language-html">{{{ $examples['bd-include'] }}}</code></pre>

	<h3>bd-unwrap</h3>
	<p>Используйте эту директиву для замены тэга его содержимым (может быть полезно использование совместно с bd-yield или bd-include):</p>
	<pre><code class="language-html">{{{ $examples['bd-unwrap'] }}}</code></pre>

	<div class="page-header">
		<div id="extensions" class="fix-navbar-fixed"></div>
		<h2>Расширения</h2>
	</div>
	<p>Вы можете регистрировать свои расширения. Создайте файл <code>blade_extensions.php</code> в директории <code>app/</code>
		и опишите свои расширения в нем. Необходимо добавить подключение этого файла в <code>app/start/global.php</code>:</p>
	<pre><code class="language-php">{{{ $examples['extension-require'] }}}</code></pre>
	<p>Примеры простых расширений:</p>
	<pre><code class="language-php">{{{ $examples['extension-example'] }}}</code></pre>
	<p>Первое расширение заменит каждый аттрибут <code>bd-my="$anything"</code> на <code>id="{{'{'.'{$anything}'.'}'}}"</code>.</p>
	<p>Второе расширение обрамит тэг условием, значение аттрибута будет проигнорировано.</p>
	<h4>Как создать свое расширение</h4>
	<p><strong>Важно:</strong> не забудьте очистить скомпилированные шаблоны для внесения изменений.</p>
	<p><code>BladeExtended::extend</code> принимает 2 параметра:</p>
	<ol>
		<li>название аттрибута (или regexp для его получения). <i>например.: <code>'bd-my'</code>, <code>'bd-test-(?&lt;argument&gt;[a-z]+)'</code></i></li>
		<li>closure, которое принимает 2 параметра:
			<ol>
				<li>объект класса <code>SleepingOwl\BladeExtended\BladeExtended</code></li>
				<li>
					массив <code>&$finded</code>:
					<pre><code class="language-php">{{{ $examples['extension-finded-ru'] }}}</code></pre>
				</li>
			</ol>
		</li>
	</ol>
	<h4>Методы BladeExtended</h4>
	<p>Есть несколько методов, которые вы можете использовать для изменения шаблона:</p>
	<ul>
		<li><code>insertContent($position, $insertString)</code> &mdash; вставка строки в определенную позицию</li>
		<li><code>removeContent($from, $to)</code> &mdash; удаление подстроки с <code>$from</code> по <code>$to</code> позиции</li>
		<li><code>replaceContent($from, $to, $string)</code> &mdash; замена подстроки с <code>$from</code> по <code>$to</code> позиции на <code>$string</code></li>
		<li><code>replaceAttribute($attribute, $replacement, $start, $end)</code> &mdash; заменить аттрибут на <code>$replacement</code> в части шаблона с <code>$start</code> по <code>$end</code></li>
		<li><code>deleteAttribute($attribute, $start, $end)</code> &mdash; удалить аттрибут в части шаблона с <code>$start</code> по <code>$end</code></li>
		<li><code>wrapOuterContent($finded, $before, $after)</code> &mdash; обрамить тэг, используя <code>$before</code> и <code>$after</code></li>
		<li><code>wrapInnerContent($finded, $before, $after)</code> &mdash; обрамить содержимое тэга, используя <code>$before</code> и <code>$after</code></li>
		<li><code>parseShortSyntax($value)</code> &mdash; привести короткий синтаксис <code>$var ? 'value'</code> к виду <code>$var ? 'value' : NULL</code></li>
	</ul>

@stop