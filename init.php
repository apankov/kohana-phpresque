<?php defined('SYSPATH') or die('No direct script access.');

if ( ! class_exists('Resque'))
{
	require_once Kohana::find_file(NULL, 'vendor/php-resque/lib/Resque');
}
