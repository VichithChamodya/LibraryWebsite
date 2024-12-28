<?php

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if(isset($_GET['code'])) {

    $verification_code = mysqli_real_escape_string($conn, $_GET['code']);

    $sql = "SELECT * FROM users WHERE usersVerificationCode = '{$verification_code}'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows ($result) == 1) {
      $sql = "UPDATE users SET isActive = true, usersVerificationCode = NULL WHERE usersVerificationCode = '{$verification_code}' LIMIT 1";

      $result = mysqli_query($conn, $sql);

      if (mysqli_affected_rows($result) == 1) {
        echo '<h1>Email Address Verified Successfully..!</h1>';
      }
      else {
        echo 'Invalid Verification..!';
      }
  }

}

?>
<html>
  <body>
    <h1>Email Verification Successful!</h1>
  </body>
</html>