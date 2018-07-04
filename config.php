<?php

  $con = mysqli_connect("localhost", "root", "3265", "ecommerce");

  if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
  }

  // $con = "root";
?>
