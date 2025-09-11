<?php
$route[$api_path . "/post/filter"] = $backend_path . 'Filter_Controller/api_insert_filter';
$route[$api_path . "/get/filter"] = $backend_path . 'Filter_Controller/api_get_filter';
$route[$api_path . "/get/filter/(:num)"] = $backend_path . 'Filter_Controller/api_get_single_filter/$1';
$route[$api_path . "/post/filter/(:num)"] = $backend_path . 'Filter_Controller/api_update_filter/$1';
$route[$api_path . "/delete/filter/(:num)"] = $backend_path . 'Filter_Controller/api_delete_filter/$1';
?>