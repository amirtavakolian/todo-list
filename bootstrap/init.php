<?php
session_start(); 

require "constants.php";
require BASE_PATH . "bootstrap/config.php";


try {
  $dbObj = new PDO($dbConfig['dsn'], $dbConfig['user'], $dbConfig['pass'], $dbConfig['utf8']);
  $dbObj->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

require BASE_PATH . "libs/lib-db.php";
require BASE_PATH . "libs/lib-auth.php";