<?php
  $serverName = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "d_s_senanayake_memorial_public_library";

  $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

  if (!$conn) {
    die("Connection failed : " .mysqli_connect_error());
  }