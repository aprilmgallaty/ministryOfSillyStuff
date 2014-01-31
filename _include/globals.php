<?php
 
$rootLen = strlen($_SERVER['DOCUMENT_ROOT']);
$dirLen = strlen(__DIR__);
$subdir = substr(__DIR__, $rootLen, $dirLen - $rootLen - strlen("/_include"));
define('INCLUDE_DIR', $_SERVER['DOCUMENT_ROOT'] . $subdir . '/_include/');
define('CLASS_DIR', $_SERVER['DOCUMENT_ROOT'] . $subdir . '/_include/classes/');
define('FUNCTION_DIR', $_SERVER['DOCUMENT_ROOT'] . $subdir . '/_include/functions/');
define('IMG_UPLOAD_DIR', $_SERVER['DOCUMENT_ROOT'] . $subdir . '/_img/uploads/');
	
$suburl = str_replace("\\", "/", $subdir);
if (substr($suburl, 0, 1) != "/"){
	$suburl = "/" . $suburl;
}
define('TOP_URL', $suburl . '/');
define('INCLUDE_URL', $suburl . '/_include/');
define('CSS_URL', $suburl . '/_css/');
define('IMG_URL', $suburl . '/_img/');
define('IMG_UPLOAD_URL', $suburl . '/_img/uploads/');
define('FILES_URL', $suburl . '/_php/');
define('JS_URL', $suburl . '/_js/');

$dbConfig = array(
	'hostname' => 'localhost',
	'username' => 'gallatyc_silly',
	'password' => 'rnyHYmwDh6sZLmMV',
	'database' => 'gallatyc_silly'
); 

require_once FUNCTION_DIR . "sqlquery.2.0.php"; 
require_once FUNCTION_DIR . "sqlfunctions.1.6.php";
require_once FUNCTION_DIR . 'miscfunctions.php';	
require_once CLASS_DIR . 'Form.1.5.php';
require_once CLASS_DIR . 'Image.php';
require_once CLASS_DIR . 'SillyWalk.php';
require_once CLASS_DIR . 'Translator.php';

?>