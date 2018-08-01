<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['startup_cen'] = 'dashboard/index';
$route['user/register'] = 'user/register';
$route['startups/register'] = 'startup/upload';
$route['startups'] = 'startup/index';
$route['default_controller'] = 'home/view';
$route['(:any)'] = 'home/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
