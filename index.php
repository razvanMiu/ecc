<?php
  if(empty($_GET['userId'])) {
    header("Location: register.php");
  }

  include("./config.php");
  include("./classes/User.php");

  $user = new User($con);

  $user->setUserId($_GET['userId']);
  $user->getUser();

  $html = file_get_contents("index.html");
  echo $html;
?>
