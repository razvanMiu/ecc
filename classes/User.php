<?php

  class User {
    private $con;
    private $userId;

    public function __construct($con) {
      $this->con = $con;
      $this->userId = -1;
    }

    public function getUserId() {
      return $this->userId;
    }

    public function setUserId($userId) {
      $this->userId = $userId;
    }

    public function getUser() {
      $query = mysqli_query($this->con, "SELECT * FROM users WHERE id='$this->userId'");
      $queryArray = mysqli_fetch_array($query);

      echo "<p>Name: " . $queryArray['name'] . "</p>
            <p>Email: " . $queryArray['email'] . "</p>
            <p>Sex: " . $queryArray['sex'] . "</p>";
    }

    public function login($un, $pw) {
      //$pw = md5($pw);

      $query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$un' AND password='$pw'");
      if(mysqli_num_rows($query)) {
        $queryArray = mysqli_fetch_array($query);

        $this->userId = $queryArray['id'];
        return true;
      } else {

        return false;
      }
    }

    public function register($un, $pw, $nm, $em, $sex) {
      $query = mysqli_query($this->con, "INSERT INTO users VALUES(default, '$un', '$pw', '$nm', '$em', '$sex')");

      return $query;
    }
  }

?>
