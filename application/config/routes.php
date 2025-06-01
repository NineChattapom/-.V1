<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'auth';
$route['login'] = 'auth/index';
$route['logout'] = 'auth/logout';
$route['admin'] = 'admin/index';
$route['admin_table'] = 'admin/admin_table';
$route['admin_table_insert'] = 'admin/admin_table_insert';
$route['editdata'] = 'admin/editdata';
$route['adding'] = 'admin/adding';
$route['sendmail'] = 'admin/sendmail';
$route['spin_random'] = 'admin/spin_random';
$route['admin_person/(:num)'] = 'admin/admin_person/$1';
$route['delete/(:num)'] = 'admin/delete/$1';
$route['deleteSubject/(:num)'] = 'admin/deleteSubject/$1';
$route['admin_edit/(:num)'] = 'admin/admin_edit/$1';
$route['calendar'] = 'admin/calendar';


$route['user'] = 'user/index';
$route['prefer'] = 'user/prefer';
$route['deferment'] = 'user/deferment';
$route['from_sign'] = 'user/from_sign';
$route['event_form'] = 'user/event_form';
$route['gallery'] = 'user/gallery';
$route['userprofile'] = 'user/userprofile';
$route['userprofile_view'] = 'user/userprofile_view';
$route['adding_person'] = 'user/adding_person';
$route['profile'] = 'user/profile';


$route['subject_list'] = 'subject/maincheck';
$route['checkInForm'] = 'subject/checkInForm';


$route['index'] = 'subject_register/index';
$route['detail'] = 'subject_register/detail';
$route['register'] = 'subject_register/register';


$route['homepage_email'] = 'Email_controller/homepage_email';









$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
