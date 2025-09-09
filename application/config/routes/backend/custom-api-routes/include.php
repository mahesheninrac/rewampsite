<?php
$route[$api_path . "/post/include"] = $backend_path . 'Include_Controller/api_insert_include';
$route[$api_path . "/get/include"] = $backend_path . 'Include_Controller/api_get_include';
$route[$api_path . "/get/include/(:num)"] = $backend_path . 'Include_Controller/api_get_single_include/$1';
$route[$api_path . "/post/include/(:num)"] = $backend_path . 'Include_Controller/api_update_include/$1';
$route[$api_path . "/delete/include/(:num)"] = $backend_path . 'Include_Controller/api_delete_include/$1';
?>