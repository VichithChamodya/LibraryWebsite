<?php

  if (isset($_POST["submit"])) {

    $adminName = $_POST["admin_name"];
    $adminUsername = $_POST["admin_username"];
    $adminPwd = $_POST["admin_password"];
    $adminRepeatPwd = $_POST["con_admin_password"];
    $adminNic = $_POST["admin_nic"];
    $adminEmail = $_POST["admin_email"];
    $adminMobile = $_POST["admin_mobile"];
    $adminPosition = $_POST["admin_position"];
    $adminAid = $_POST["admin_id"];
    $adminAbout = $_POST["admin_about"];
    $adminAgree = isset($_POST["agree"]) ? $_POST["agree"] : null;

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    $aidExists = aidExists ($conn, $adminUsername);

    if ($aidExists) {
      header ("Location:../admin.register.form.php?error=usernametaken");
      exit();
    }

    createAdmin ($conn, $adminName, $adminUsername, $adminPwd, $adminNic, $adminEmail, $adminMobile, $adminPosition, $adminAid, $adminAbout);

    }

    else {
      header ('Location:../staff.php');
    }