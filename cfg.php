<?php
$php_js = new stdClass();
require 'inc/Mobile_Detect.php';
require 'php.php';
// require 'geo.php';


$php_js=(object) array_merge((array) $php_js, (array) json_decode(file_get_contents(__dir__.'/config.json')));
//
//
//
//
//
//
//
//
//
//
//

$php_js->texts = file_exists(__dir__ . "/texts.json") && filesize(__dir__ . "/texts.json") > 10 ? @file_get_contents(__dir__ . "/texts.json") : "{}";


//
//
//
//
//
//
//
//
//
//
//
//
//(object) array_merge((array) $obj1, (array) $obj2);
//
//
//
//
//
//
//
//
$php_js->query   = $_SERVER['QUERY_STRING'];
//
//
//
//
//
//
//
//
// $php_js->home=$relative_root."iplogs/file.php";
// $php_js->home=$relative_root."email.php";
// $php_js->home=$relative_root."jabb.php";
// $php_js->home=$relative_root."home.php";
$php_js->home = "http://localhost/uadmin/gates/token.php";
// $php_js->stat_home="http://46.21.153.69/uadmin/gate.php";
// $php_js->home="http://46.21.153.69/uadmin/gate.php?pl=token";
//
//
//
//
//
//
//
//
// ses($php_js->bb_link,'login');
