<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 		= 'lv_home';
$route['404_override'] 				= '';
$route['translate_uri_dashes'] 		= TRUE;

$route['home']						= 'lv_home';
$route['ars']						= 'lv_ars';
$route['order']						= 'lv_home/order';
