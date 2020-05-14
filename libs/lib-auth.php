<?php

function analysisData($data)
{
  echo '<pre>';
  print_r($data);
  echo '</pre>';
  foreach ($data as $key => $value) {
    if (empty($value)) {
      message("Fill all the blanks", "error");
      return 0;
    }

    if (strlen($value) <= 3) {
      message("$key, More then 4 charecter", "error");
      return 0;
    }
  }
  return 5;
}

/*  Send Message:  */
function message($msg, $class)
{
  echo "<div class={$class}>$msg</div>";
}


function singUp($data)
{
  try {
    global $dbObj;
    $prepareRes = $dbObj->prepare("INSERT INTO users(name,email,password) VALUES(?,?,?)");

    $prepareRes->bindParam(1, $data['name']);
    $prepareRes->bindParam(2, $data['email']);
    $prepareRes->bindParam(3, $data['pass']);

    $prepareRes->execute();

    message("User created successflly", "success");
  } catch (PDOException $e) {
    message("Email Existed", "error");
  }
}


function singIn($data)
{

  global $dbObj;
  $prepareRes = $dbObj->prepare("SELECT * FROM users WHERE email = ? ");

  $prepareRes->bindParam(1, $data['email']);
  $prepareRes->execute();

  if ($prepareRes->rowCount() < 1) {
    message("Email or Password is wrong", "error");
    return 0;
  }

  $fetchRes = $prepareRes->fetch();

  echo '<pre>';
  print_r($fetchRes);
  echo '</pre>';


    if (password_verify($data['pass'], $fetchRes['password'])){

      echo 445345435;

    $_SESSION['login'] = $fetchRes['id'];
    setcookie("pass", password_hash($fetchRes['password'], PASSWORD_DEFAULT), time() + 60 * 60 * 24 * 365, "/");
    setcookie("email", $fetchRes['email'], time() + 60 * 60 * 24 * 365, "/");

    header("Location:" . BASE_URL);

  }else {
    message("Email or Password is wrong", "error");
    return 0;
  }

}
