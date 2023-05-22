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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

#alias = Nama CLass (controller) / namaFUngsi
$route['terserah'] = Blog::class."/profile";
$route['alias/(:any)/(:any)'] = Blog::class."/matakuliah/$1/$2";
$route['layout']=Blog::class."/layout";
$route['hobi'] = Blog::class."/hobi";
$route['add_matakuliah'] = Blog::class."/add_matakuliah";
$route['barang'] = "barang";
$route['home'] = "home";

$route['wrap'] = "wrap";
$route['latihan/mall'] = "latihan/mall";
$route['control_uts'] = control_uts::class. "/viewInput";
$route['control_uts'] = control_uts::class. "/viewDaftar";
$route['save_country'] = home::class."/save_country";
$route['index']=home::class."/index";

$route['tampil'] = mall::class."/tampil";

$route['wrap'] = "wrap";
$route['viewUsers'] = wrap::class."/viewUsers";
$route['profile_user/(:any)'] = wrap::class."/profile_user/$1";
$route['view_datamovies/(:any)'] = wrap::class."/view_datamovies/$1";

$route['control_uas'] = "control_uas";
$route['viewLogin'] = control_uas::class."/viewLogin";
$route['viewRegistration'] = control_uas::class."/viewRegistration";
$route['forgotPassword'] = control_uas::class."/forgotPassword";
$route['changePassword'] = control_uas::class."/changePassword";

$route['admin'] = "admin";
$route['viewmanageUser'] = admin::class."/viewmanageUser";
$route['deleteuserData'] = admin::class."/deleteuserData";
$route['updateuserData'] = admin::class."/updateuserData";
$route['adminMovies'] = admin::class."/adminMovies";
$route['addMoviesManage'] = admin::class."/addMoviesManage";
$route['deleteMoviesManage'] = admin::class."/deleteMoviesManage";

$route['User'] = "User";
$route['userMovies'] = User::class."/userMovies";
$route['addWatchlistUser'] = User::class."/addWatchlistUser";
$route['deleteUserWatchlist'] = User::class."/deleteUserWatchlist";
$route['userRating'] = User::class."/userRating";




