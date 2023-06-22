<?php
session_start();
require "config/config.php";
require "config/connection.php";
require "config/createdb.php";
require "helpers/dbHelper.php";
require "helpers/helpers.php";
require "helpers/logic.php";

// Auto Load Classes
spl_autoload_register(function ($className) {
   require_once 'libraries/' . $className . '.php';
});
?>