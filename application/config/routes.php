<?php
defined('BASEPATH') or exit('No direct script access allowed');

$backend_path = 'backend/';
$backend_custom_path = 'eco-panel';
$api_path = 'api/v1';

$dir = [
    APPPATH . "config/routes/backend/custom-api-routes/",
    APPPATH . "config/routes/backend/custom-web-routes/",
    APPPATH . "config/routes/frontend/custom-api-routes/",
    APPPATH . "config/routes/frontend/custom-web-routes/"
];

$route['default_controller'] = 'Home_Controller';
$route['404_override'] = 'Default_Controller/error404';
$route['translate_uri_dashes'] = FALSE;

foreach ($dir as $folder) {
    if (is_dir($folder)) {
        $a = scandir($folder);
        $a = array_diff($a, array('..', '.'));
        $a = array_values($a);
        if (!empty($a)) {
            foreach ($a as $key => $file) {
                    require($folder . $file);
            }
        }
    }
}


// // $route["product_page"] = 'OpenAccess/product';
// // $route["custom_page"] = 'OpenAccess/custom';
// // // $route["contact_us"] = 'OpenAccess/contact';
// // $route["login"] = 'OpenAccess/login';
// // $route["event"] = 'OpenAccess/event';
// // $route["reports"] = 'OpenAccess/reports';
// // $route["survey"] = 'OpenAccess/survey';
// // $route["membership"] = 'OpenAccess/membership';
// // $route["test"] = 'OpenAccess/test';
// // $route["test2"] = 'OpenAccess/test2';
// // $route["landing_menu"] = 'OpenAccess/landing_menu';




