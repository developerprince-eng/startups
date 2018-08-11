<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$route['startup_cen/delete'] = 'dashboard/delete_startup';
//$route['startup_cen/approve'] = 'dashboard/approve';
//$route['startup_cen/suspend'] = 'dashboard/suspend';
$route['startup_cen/globalnews'] = 'dashboard/globalnews';
$route['startup_cen/localnews'] = 'dashboard/localnews';
$route['startup_cen/market'] = 'dashboard/market';
$route['startup_cen/profile'] = 'dashboard/profile';
$route['startup_cen/list'] = 'dashboard/startups';
$route['startup_cen/list/(:any)'] = 'dashboard/startups/$1';
$route['startup_cen'] = 'dashboard/index';
$route['user'] = 'user/login';
$route['user/register'] = 'user/register';
$route['startups/register'] = 'startup/upload';
$route['startups'] = 'startup/index';
$route['startups/(:any)'] = 'startup/index/$1';
$route['default_controller'] = 'home/view';
$route['(:any)'] = 'home/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
