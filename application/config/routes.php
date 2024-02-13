<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['hello'] = 'home/hello';

$route['say/hi'] = 'home/say/hi';
$route['say_anything/(:any)'] = 'home/say_anything/';
$route['danger'] = 'home/danger';
?>