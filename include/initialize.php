<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'launitco');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');

//load the database configuration first.
require_once($_SERVER["DOCUMENT_ROOT"] . "/include/config.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/include/function.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/include/session.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/include/accounts.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/include/autonumbers.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/include/products.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/include/stockin.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/include/categories.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/include/sidebarFunction.php"); 
require_once($_SERVER["DOCUMENT_ROOT"] . "/include/promos.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/include/customers.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/include/orders.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/include/summary.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/include/settings.php");


require_once($_SERVER["DOCUMENT_ROOT"] . "/include/database.php");
?>