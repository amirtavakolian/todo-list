<?php
require "bootstrap/init.php";

if (!isset($_SESSION['login'])) {
  header ("Location: ". BASE_URL . "auth.php");
}

require BASE_PATH . "tpl/tpl-index.php";
