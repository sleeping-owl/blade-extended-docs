<li bd-foreach="['overview' => 'Overview', 'installation' => 'Installation', 'directives' => 'Directives'] as $item => $label">
	<a href="{{ route('index', $lang) }}#{{$item}}">{{ $label }}</a>
</li>
<li><a href="https://github.com/sleeping-owl/blade-extended"><i class="fa fa-github"></i> GitHub</a></li>
