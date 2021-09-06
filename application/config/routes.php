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
| URL normally follow this patern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'publik';
$route['longsor_publik'] = 'publik/longsor_publik';
$route['tambah_user'] = 'publik/data_user';
$route['tambahdata_user'] = 'publik/tambah_user';
$route['detail_publik'] = 'publik/detail_longsor_publik';

// data
$route['detail'] = 'Redirect_controller/detail_longsor';
$route['longsor'] = 'Redirect_controller/longsor';
$route['halaman_login'] = 'Redirect_controller/halaman_login';
$route['login'] = 'Login';
$route['logout'] = 'Redirect_controller/logout';
$route['index'] = 'Redirect_controller/index';
$route['home'] = 'Redirect_controller/home';
$route['home_front'] = 'Redirect_controller/home_front';
$route['home_awal'] = 'publik/home_awal';
$route['data_longsor'] = 'Redirect_controller/data_longsor';
$route['data_longsor_valid'] = 'publik/data_longsor_valid';
$route['data_artikel'] = 'Redirect_controller/data_artikel';


//Bagian edit
$route['edit_longsor'] = 'Redirect_controller/edit_longsor';
$route['edit_admin'] = 'Redirect_controller/edit_admin';
$route['edit_artikel'] = 'Redirect_controller/edit_artikel';
//detail
$route['detail_futsal'] = 'Redirect_controller/detail_futsal';

//tambah
$route['tambah_longsor'] = 'Redirect_controller/tambah_longsor';
$route['tambah_longsor_user'] = 'publik/tambah_longsor_user';
$route['tambah_artikel'] = 'Redirect_controller/tambah_artikel';
$route['tambah_admin'] = 'Redirect_controller/data_admin';
$route['tambahdata_admin'] = 'Redirect_controller/tambah_admin';
//cetak
$route['ganti_password'] = 'Redirect_controller/ganti_password';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
