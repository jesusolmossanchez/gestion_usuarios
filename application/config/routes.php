<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| FRONTEND Routing
| -------------------------------------------------------------------------
*/

$route['default_controller'] = 'admin/admin';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



/*
| -------------------------------------------------------------------------
| BACKEND Routing
| -------------------------------------------------------------------------
*/


/* *************************************** */
/* ************** BACKEND **************** */
/* *************************************** */

/* Zona - Backend LOGIN / HOME */
$route['admin'] = 'admin/admin';
$route['admin/home'] = 'admin/home_admin';
$route['admin/login'] = 'admin/auth/login';
$route['admin/logout'] = 'admin/auth/logout';



$route['admin/socios'] = 'admin/socios_admin';

$route['admin/socios/crear'] = 'admin/socios_admin/crear';
$route['admin/socios/(:any)'] = 'admin/socios_admin/editar/$1';
$route['admin/socios/borrar/(:any)'] = 'admin/socios_admin/borrar/$1';

$route['admin/guardar-socio'] = 'admin/socios_admin/guardar';

/*
| -------------------------------------------------------------------------
| API Routing
| -------------------------------------------------------------------------
*/

//Todo lo que no sea una ruta controlada, lanzo el controlador por defecto
$route['(:any)*'] = 'app/home';