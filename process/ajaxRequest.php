<?php

require "../bootstrap/init.php";

if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
  header("location:" . BASE_URL);
}

echo "salasm";