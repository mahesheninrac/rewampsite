<?php
$route["reports"] = 'Reports_Controller/index';
$route["reports/(:any)"] = 'Reports_Controller/Reports_Category/$1';

$route["reportsbycategory"] = 'Reports_Controller/reports_by_category';
?>