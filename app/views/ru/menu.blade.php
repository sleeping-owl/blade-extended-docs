<li bd-foreach="['overview' => 'Обзор', 'installation' => 'Установка', 'directives' => 'Директивы', 'extensions' => 'Расширения'] as $item => $label">
	<a href="{{ route('index', $lang) }}#{{$item}}">{{ $label }}</a>
</li>
<li><a href="{{ route('demo', $lang) }}">Демо</a></li>
<li><a href="https://github.com/sleeping-owl/blade-extended"><i class="fa fa-github"></i> GitHub</a></li>
