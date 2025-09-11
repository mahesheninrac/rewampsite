<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Home_Controller';
$route['404_override'] = 'Default_Controller/error404';
$route['translate_uri_dashes'] = FALSE;


// make it dynamic regarding api versioning

$api = [
    'entry_point' => 'api/v1',
    'backend_path' => 'Backend/',
    'backend_custom_path' => 'eco-panel/'
];

$route_paths = [
    APPPATH . "config/routers/backend/custom-api-routes/",
    APPPATH . "config/routers/backend/custom-web-routes/",
    APPPATH . "config/routers/frontend/custom-api-routes/",
    APPPATH . "config/routers/frontend/custom-web-routes/"
];

foreach ($route_paths as $folder) {
    if (is_dir($folder)) {
        $a = scandir($folder);
        $a = array_diff($a, array('..', '.'));
        $a = array_values($a);
        if (!empty($a)) {
            foreach ($a as $key => $file) {
                if (file_exists($folder . $file)) {
                    require($folder . $file);
                }
            }
        }
    }
}
