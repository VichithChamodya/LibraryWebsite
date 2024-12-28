<?php

  if (isset($_POST["submit"])) {

    $admin_uname = $_POST["admin_uname"];
    $admin_pwd = $_POST["admin_pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    loginAdmin ($conn, $admin_uname, $admin_pwd);

  }

  else {

    header ('Location:../staff.php?');

  }
