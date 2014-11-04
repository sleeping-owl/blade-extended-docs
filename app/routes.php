<?php

Route::get('/{lang?}', [
	'as'   => 'index',
	'uses' => 'IndexController@getIndex'
])->where('lang', 'ru|en');

Route::get('{lang}/demo', [
	'as'   => 'demo',
	'uses' => 'IndexController@getDemo'
])->where('lang', 'ru|en');

Route::get('demo', 'IndexController@getDemo');
Route::post('demo', 'IndexController@postDemo');