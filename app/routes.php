<?php

Route::group([
	'prefix' => '{lang?}',
	'where'  => [
		'lang' => 'en|ru'
	],
], function ()
{
	Route::get('/', [
		'as'   => 'index',
		'uses' => 'IndexController@getIndex'
	]);
});
