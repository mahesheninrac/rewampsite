<?php 

$route[$api_path . "/get/attachment"] = $backend_path . 'Attachment_Controller/api_get_attachment';
$route[$api_path . "/post/attachment/create"] = $backend_path . 'Attachment_Controller/api_insert_attachment';
$route[$api_path . "/get/attachment/delete/(:num)"] = $backend_path . 'Attachment_Controller/api_delete_attachment/$1';

?>