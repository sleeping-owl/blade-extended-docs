@extends('_layout')

@section('content')
	<div class="jumbotron">
		<p>Введите blade-extended шаблон и посмотрите blade шаблон, который будет сгенерирован.</p>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="page-header">
				<h2>Blade-extended шаблон</h2>
			</div>
			<textarea class="form-control demo-source">{{{ $demoSource }}}</textarea>
		</div>
		<div class="col-lg-1 text-center">
			<i class="fa fa-5x fa-chevron-circle-right demo-reload"></i>
		</div>
		<div class="col-lg-5">
			<div class="page-header">
				<h2>Blade шаблон</h2>
			</div>
			<div><pre><code class="demo-result"></code></pre></div>
		</div>
	</div>
@stop