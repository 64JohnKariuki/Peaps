<?php
// Kanyi - changed launit.com to localhost
//defined('server') ? null : define("server", "launit.com");
defined('server') ? null : define("server", "localhost");
defined('user') ? null : define ("user", "launitco_John") ;

// Kanyi
// password was not set so i set one for the user and assigned roles
defined('pass') ? null : define("pass","YA5?oeZn,96P");
defined('database_name') ? null : define("database_name", "launitco_Shop") ;

$this_file = str_replace('\\', '/', __File__) ;
$doc_root = $_SERVER['DOCUMENT_ROOT'];

$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('include/config.php' ,'', $this_file);


define ('web_root' , $web_root);
define('server_root' , $server_root);
?>