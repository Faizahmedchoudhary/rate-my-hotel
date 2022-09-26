<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'page/home';
$route['createhotel'] = 'hotels/createhotel';

// location
$route['location/mumbai'] = 'location/mumbai';
$route['location/delhi'] = 'location/delhi';
$route['location/pune'] = 'location/pune';
$route['location/bangalore'] = 'location/bangalore';
$route['location/hyderabad'] = 'location/hyderabad';
$route['location/manali'] = 'location/manali';
$route['location/goa'] = 'location/goa';

$route['createhotel'] = 'hotels/createhotel';

$route['login'] = 'page/login';
$route['signup'] = 'page/signup';

$route['location/(:any)'] = 'location/view/$1';

// location
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
