<?php

use SleepingOwl\BladeExtended\BladeExtended;

BladeExtended::extend('bd-my', function (BladeExtended $bladeExtended, &$finded)
{
	$bladeExtended->replaceAttribute('bd-my', ' id="{{' . $finded['value'] . '}}"', $finded['opening']['start'], $finded['opening']['end']);
});

BladeExtended::extend('bd-test', function (BladeExtended $bladeExtended, &$finded)
{
	$bladeExtended->wrapOuterContent($finded, '@if(myCustomTest())', '@endif');
});
