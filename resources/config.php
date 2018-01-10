<?php 

//output buffering
ob_start();

//begin sessions
session_start();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

//define paths with constants
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

//constants for database
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");

defined("DB_PASS") ? null : define("DB_PASS", "");
defined("DB_NAME") ? null : define("DB_NAME", "ecom_db");

//database connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//pulling in the functions file
require_once("functions.php");


 ?>