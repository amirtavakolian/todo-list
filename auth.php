<?php
require "bootstrap/init.php";


if (isset($_COOKIE['email']) && isset($_COOKIE['pass'])){
  $data = ['email' => $_COOKIE['email'],'pass' => $_COOKIE['pass'] ];
  singIn($data);

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $data = array(
    "email" => $_POST["email"] ?? '',
    "pass" => $_POST["pass"] ?? ''
  );

  $data["name"] = $_POST['submit'] == "sign-in" ? "aaaaa" : $_POST["name"];


  if (analysisData($data)) {
    if ($_POST['submit'] == 'sign-up') {
      singUp($data);
    }else if ($_POST['submit'] == 'sign-in') {
      singIn($data);
    }
  }
}

require BASE_PATH . "tpl/tpl-auth.php";
