<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// Manage route...
$route['mpa/login'] 				= "mpa_login";
$route['mpa/logout'] 				= "mpa_login/logout";
$route['mpa/checkLogin'] 			= "mpa_login/checkLogin";
$route['mpa/lock-screen'] 			= "mpa_login/lockscreen";

$route['mpa/dashboard'] 			= "mpa_dashboard";

$route['mpa/agents/detail/(.*)']	= "mpa_agents/index/$1";

$route['mpa/user/profile/(.*)']		= "mpa_user_profile/index/$1";


//Fix
$route['content/merchant-power-etf-siminar'] 			= "content/merchantpoweretf";

$route['default_controller'] = 'home';
$route['404_override'] = 'pages/error404';
$route['translate_uri_dashes'] = FALSE;