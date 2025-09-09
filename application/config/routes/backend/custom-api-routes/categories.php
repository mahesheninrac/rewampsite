<?php
$route[$api_path . "/post/categories"] = $backend_path . 'Categories_Controller/api_insert_categories';
$route[$api_path . "/get/categories"] = $backend_path . 'Categories_Controller/api_get_categories';
$route[$api_path . "/get/categories/(:num)"] = $backend_path . 'Categories_Controller/api_get_single_categories/$1';
$route[$api_path . "/post/categories/(:num)"] = $backend_path . 'Categories_Controller/api_update_categories/$1';
$route[$api_path . "/delete/categories/(:num)"] = $backend_path . 'Categories_Controller/api_delete_categories/$1';
?>