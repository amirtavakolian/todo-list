<?php

require "../bootstrap/init.php";

if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
  header("location:" . BASE_URL);
}

$data = $_POST['data'];
$action = $_POST['action'];


switch($action) {
  case 'addFolder':
    addFolder();
  break;


  default:
    echo "Action Error ";
    die();
    
}