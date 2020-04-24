<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once '././loadenv.php';

$env = new LoadEnv;

$env_variable = $env->Getdotenv();

$active_group = $env_variable['active_group'];

$query_builder = TRUE;


$db['development'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => $env_variable['database_user'],
	'password' => $env_variable['database_password'],
	'database' => $env_variable['database'],
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);



$db['production'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => $env_variable['database_user'],
	'password' => $env_variable['database_password'],
	'database' => $env_variable['database'],
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT === 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);




// $db['staging'] = array(
// 	'dsn'	=> '',
// 	'hostname' => 'pgsql:host='.$env_variable['pgqsl_host'].';dbname='.$env_variable['pgsq_dbname'],
// 	'username' => $env_variable['database_user'],
// 	'password' => $$env_variable['database_password'],
// 	'database' => $env_variable['database'],
// 	'dbdriver' => 'pdo',
// 	'dbprefix' => '',
// 	'pconnect' => FALSE,
// 	'db_debug' => (ENVIRONMENT !== 'production'),
// 	'cache_on' => FALSE,
// 	'cachedir' => '',
// 	'char_set' => 'utf8',
// 	'dbcollat' => 'utf8_general_ci',
// 	'swap_pre' => '',
// 	'encrypt' => FALSE,
// 	'compress' => FALSE,
// 	'stricton' => FALSE,
// 	'failover' => array(),
// 	'save_queries' => TRUE
// );
	
