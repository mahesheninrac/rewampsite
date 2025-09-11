<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/userguide3/general/hooks.html
|
*/

// Environment Hook - Load .env variables early
$hook['pre_system'][] = [
    'class'    => 'Environment_hook',
    'function' => 'load',
    'filename' => 'Environment_hook.php',
    'filepath' => 'hooks',
    'params'   => []
];
