<?php
  include("./config.php");
  include("./classes/User.php");

  $user = new User($con);

  if(isset($_GET['error'])) {
    $error = $_GET['error'];
    echo "<h2>$error</h2>";
    unset($_GET['error']);
  }

  if(isset($_POST['loginButton'])) {
    $un = $_POST['username'];
    $pw = $_POST['password'];

    if($user->login($un, $pw)) {
      $userId = $user->getUserId();
      header("Location: index.php?userId=$userId");
    } else {
      $error = "Login failed";
      header("Location: register.php?error=$error");
    }
  }

  if(isset($_POST['registerButton'])) {
    if($userId->)
  }

  $html = file_get_contents("register.html");
  echo $html;

?>
