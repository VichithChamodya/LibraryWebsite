<?php

  if (isset($_POST["submit"])){

    $uname = $_POST["uname"];
    $password = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    loginUser ($conn, $uname, $password);

  }
  else {
    header ('Location:../index.php?');
    exit();
  }