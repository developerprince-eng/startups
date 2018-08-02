<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['startup_cen/globalnews'] = 'dashboard/globalnews';
$route['startup_cen/localnews'] = 'dashboard/localnews';
$route['startup_cen/market'] = 'dashboard/market';
$route['startup_cen/profile'] = 'dashboard/profile';
$route['startup_cen/list'] = 'dashboard/startups';
$route['startup_cen'] = 'dashboard/index';
$route['user'] = 'user/login';
$route['user/register'] = 'user/register';
$route['startups/register'] = 'startup/upload';
$route['startups'] = 'startup/index';
$route['default_controller'] = 'startup/upload';
$route['(:any)'] = 'home/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
