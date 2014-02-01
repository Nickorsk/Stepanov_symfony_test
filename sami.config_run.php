<?php

use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
	->files()
	->name('*.php')
	->exclude('Resources')
	->exclude('Tests')
	->in('/var/www/symfony2.ru/src/Stepanov');

return new Sami($iterator,array(
	'title'                => 'Symfony2 API',
	'build_dir'            => __DIR__.'/doc/build',
	'cache_dir'            => __DIR__.'/doc/cache',
	'default_opened_level' => 2,
));