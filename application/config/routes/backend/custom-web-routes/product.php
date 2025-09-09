<?php
$route[$backend_custom_path . "/product"] = $backend_path . 'Product_Controller/index';
$route[$backend_custom_path . "/product/add"] = $backend_path . 'Product_Controller/page_add';
$route[$backend_custom_path . "/product/edit/(:num)"] = $backend_path . 'Product_Controller/page_update/$1';
?>