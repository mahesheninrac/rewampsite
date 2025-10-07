<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
// require(APPPATH . 'views/functions/autoload.php');
$template = 'layouts';

$folder = APPPATH . 'views/frontend/functions/';
$a = scandir($folder);
$a = array_diff($a, array('..', '.', 'autoload.php'));
$a = array_values($a);
foreach ($a as $key => $value) {
    require($folder . $value);
}


defined('BASEPATH') or exit('No direct script access allowed');
if (!empty($theme)) {
    if (!isset($default_page) || $default_page == false) {
        require(APPPATH . 'views/frontend/' . $template . '/header.php');
    }
}
?>
<?php
if (isset($theme) || !empty($theme)) {
    echo "<div class='theme_import'>";
    require(APPPATH . 'views/frontend/pages/' . $theme . '.php');
    echo "</div>";
}
?>
<?php
if (!empty($theme)) {
    if (!isset($default_page) || $default_page == false) {
        require(APPPATH . 'views/frontend/' . $template . '/footer.php');
    }
}
?>