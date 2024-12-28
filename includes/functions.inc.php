<?php

  //-------------------------Users Username Validity--------------------------------
  // Function should return boolean value and only a boolean value
  function uidExists ($conn, $username) {
    $sql = "SELECT * FROM users WHERE usersUsername = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header ("Location:../application.php?error=stmtfaild");
      exit();
    }
    
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($resultData)) {
        mysqli_stmt_close($stmt);
        return true;
      }
      
      else {
        mysqli_stmt_close($stmt);
        return false;
      }
    }

    //--------------------------Users Email Validity--------------------------------
    function userEmailExist($conn, $email) {
      $sql = "SELECT * FROM users WHERE usersEmail = ?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("Location:../application.php?error=stmtfaild");
        exit();
      }
      
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($resultData)) {
        mysqli_stmt_close($stmt);
        return true;
      }
      
      else {
        mysqli_stmt_close($stmt);
        return false;
      }
    }

    //------------------------Users Password Check-----------------------------------
    function check_user_password($conn, $username, $password) {
      $sql = "SELECT usersUsername, usersPassword FROM users WHERE usersUsername = ?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("Location:../application.php?error=stmtfaild");
        exit();
      }
      
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($resultData);
        mysqli_stmt_close($stmt);

        if (password_verify($password, $row['usersPassword'])) {
          return true;
        }
        
        else {
          return false;
        }
    }

    // -------------------------------Get User First Name----------------------------------
    function get_user_fname($conn, $username) {
      $sql = "SELECT * FROM users WHERE usersUsername = ?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ('location:../application.php?error=stmtfaild');
        exit();
      }

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($resultData);
      mysqli_stmt_close($stmt);

      return $row['usersFirstName'];
    }

    // --------------------------------Get User Last Name------------------------------------
    function get_user_lname($conn, $username) {
      $sql = "SELECT * FROM users WHERE usersUsername = ?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ('location:../application.php?error=stmtfaild');
        exit();
      }

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($resultData);
      mysqli_stmt_close($stmt);

      return $row['usersLastName'];
    }

    // -------------------------------Get User Pic-------------------------------------------
    function get_user_pic($conn, $username) {
      $sql = "SELECT * FROM users WHERE usersUsername = ?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ('location:../application.php?error=stmtfaild');
        exit();
      }

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($resultData);
      mysqli_stmt_close($stmt);

      return $row['usersPic'];
    }

    // -------------------------------Get User Member ID-------------------------------------
    function get_user_memberid($conn, $username) {
      $sql = "SELECT * FROM users WHERE usersUsername = ?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ('location:../application.php?error=stmtfaild');
        exit();
      }

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($resultData);
      mysqli_stmt_close($stmt);

      return $row['usersMemberId'];
    }

    // -------------------------------Get User NIC-------------------------------------------
    function get_user_nic($conn, $username) {
      $sql = "SELECT * FROM users WHERE usersUsername = ?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ('location:../application.php?error=stmtfaild');
        exit();
      }

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($resultData);
      mysqli_stmt_close($stmt);

      return $row['usersNic'];
    }

    // -------------------------------Get User Birthday--------------------------------------
    function get_user_bday($conn, $username) {
      $sql = "SELECT * FROM users WHERE usersUsername = ?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ('location:../application.php?error=stmtfaild');
        exit();
      }

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($resultData);
      mysqli_stmt_close($stmt);

      return $row['usersBirthday'];
    }

    // -------------------------------Get User Address---------------------------------------
    function get_user_address($conn, $username) {
      $sql = "SELECT * FROM users WHERE usersUsername = ?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ('location:../application.php?error=stmtfaild');
        exit();
      }

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);

      $row = mysqli_fetch_assoc($resultData);
      mysqli_stmt_close($stmt);
      return $row['usersAddress'];
    }

    // -------------------------------Get User Email-----------------------------------------
    function get_user_email($conn, $username) {
      $sql = "SELECT * FROM users WHERE usersUsername = ?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ('location:../application.php?error=stmtfaild');
        exit();
      }

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);

      $row = mysqli_fetch_assoc($resultData);

      mysqli_stmt_close($stmt);

      return $row['usersEmail'];
    }

    // -------------------------------Get User Mobile----------------------------------------
    function get_user_mobile($conn, $username) {
      $sql = "SELECT * FROM users WHERE usersUsername = ?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ('location:../application.php?error=stmtfaild');
        exit();
      }

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);

      $row = mysqli_fetch_assoc($resultData);

      mysqli_stmt_close($stmt);

      return $row['usersMobile'];
    }

    // -------------------------------Get User City------------------------------------------
    function get_user_city($conn, $username) {
      $sql = "SELECT * FROM users WHERE usersUsername = ?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ('location:../application.php?error=stmtfaild');
        exit();
      }

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);

      $row = mysqli_fetch_assoc($resultData);

      mysqli_stmt_close($stmt);

      return $row['usersCity'];
    }

    // -------------------------------Get User Zip------------------------------------------
    function get_user_zip($conn, $username) {
      $sql = "SELECT * FROM users WHERE usersUsername = ?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ('location:../application.php?error=stmtfaild');
        exit();
      }

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);

      $row = mysqli_fetch_assoc($resultData);

      mysqli_stmt_close($stmt);

      return $row['usersZip'];
    }

    // -------------------------------Get User Gender----------------------------------------
    function get_user_gender($conn, $username) {
      $sql = "SELECT * FROM users WHERE usersUsername = ?;";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ('location:../application.php?error=stmtfaild');
        exit();
      }

      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);

      $row = mysqli_fetch_assoc($resultData);

      mysqli_stmt_close($stmt);

      return $row['usersGender'];
    }

    //--------------------------------Create User-------------------------------------------
    function createUser ($conn, $firstName, $lastName, $username, $memberId, $pwd, $nic, $birthday, $address, $email, $mobile, $city, $zip, $gen, $verificationCode) {
      $sql = "INSERT INTO users (usersFirstName, usersLastName, usersUsername, usersMemberId, usersPassword, usersNic, usersBirthday, usersAddress, usersEmail, usersMobile, usersCity, usersZip, usersGender, usersVerificationCode, isActive) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,false);";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../application.php?error=stmtfaild");
        exit();
      }

      $hashedPwd = password_hash ($pwd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param ($stmt, "sssisssssisiss", $firstName, $lastName, $username, $memberId, $hashedPwd, $nic, $birthday, $address, $email, $mobile, $city, $zip, $gen, $verificationCode);
        mysqli_stmt_execute ($stmt);
        mysqli_stmt_close ($stmt);
    }

    //---------------------------Delete User-----------------------------------
    function deleteUser ($conn, $nic) {
      $sql = "DELETE FROM users WHERE nic = ?;";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../admin.php?error=stmtfaild");
        exit();
      }

        mysqli_stmt_bind_param ($stmt, "s", $nic);
        mysqli_stmt_execute ($stmt);
        mysqli_stmt_close ($stmt);
        header ("Location:../admin.page.php?error=none");
        exit();
    }

    //---------------------------------Login User-------------------------------------------
    function LoginUser ($conn, $uname, $password) {
      $uidExists = uidExists ($conn, $uname);
      if (!$uidExists) {
        header ("Location:../index.php?error=usernamedoesnotexist");
        exit();
      }

      $pwdCorrect = check_user_password($conn, $uname, $password);

      if (!$pwdCorrect) {
        header ("Location:../index.php?error=invalidpassword");
        exit();
      }
      
      else if ($pwdCorrect) {
        session_start();
        $_SESSION["userid"] = $uidExists ["usersId"];
        $_SESSION["username"] = $uname;
        $_SESSION["first_name"] = get_user_fname($conn, $uname);
        $_SESSION["last_name"] = get_user_lname($conn, $uname);
        $_SESSION["pic"] = get_user_pic($conn, $uname);
        $_SESSION['member_id'] = get_user_memberid($conn, $uname);
        $_SESSION['nic'] = get_user_nic($conn, $uname);
        $_SESSION['birthday'] = get_user_bday($conn, $uname);
        $_SESSION['address'] = get_user_address($conn, $uname);
        $_SESSION['email'] = get_user_email($conn, $uname);
        $_SESSION['mobile'] = get_user_mobile($conn, $uname);
        $_SESSION['city'] = get_user_city($conn, $uname);
        $_SESSION['zip'] = get_user_zip($conn, $uname);
        $_SESSION['gender'] = get_user_gender($conn, $uname);
          header ("Location:../member.page.php");
          exit();
      }
    }
    
    //-------------------------Admins Username Validity-------------------------------------
    function aidExists ($conn, $adminUsername) {
      $sql = "SELECT * FROM admins WHERE adminsUsername = ?;";
      $stmt = mysqli_stmt_init($conn);
  
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("Location:../application.php?error=stmtfaild");
        exit();
      }
      
      mysqli_stmt_bind_param($stmt, "s", $adminUsername);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);
  
      if ($row = mysqli_fetch_assoc($resultData)) {
        mysqli_stmt_close($stmt);
        return true;
      }
      else {
        mysqli_stmt_close($stmt);
        return false;
      }
    }

    //-------------------------Admin Password Check-----------------------------------------
    function check_admin_password ($conn, $adminUsername, $adminPassword) {
      $sql = "SELECT * FROM admins WHERE adminsUsername = ?;";
      $stmt = mysqli_stmt_init($conn);
  
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("Location:../application.php?error=stmtfaild");
        exit();
      }
      
      mysqli_stmt_bind_param($stmt, "s", $adminUsername);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);
  
      $row = mysqli_fetch_assoc($resultData);
      mysqli_stmt_close($stmt);
      $checkAdminPwd = password_verify ($adminPassword, $row['adminsPassword']);
      if ($checkAdminPwd) {
        return true;
      }

      else {
        return false;
      }

    }

    //-------------------------Get Admin Name-----------------------------------------------
    function get_admin_name($conn, $adminUsername) {
      $sql = "SELECT * FROM admins WHERE adminsUsername = ?;";
      $stmt = mysqli_stmt_init($conn);
  
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("Location:../application.php?error=stmtfaild");
        exit();
      }
      
      mysqli_stmt_bind_param($stmt, "s", $adminUsername);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);
  
      $row = mysqli_fetch_assoc($resultData);
      mysqli_stmt_close($stmt);
      return $row['adminsName'];
      
    }

    //-------------------------Get Admin ID------------------------------------------------
    function get_admin_id($conn, $adminUsername) {
      $sql = "SELECT * FROM admins WHERE adminsUsername = ?;";
      $stmt = mysqli_stmt_init($conn);
  
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("Location:../application.php?error=stmtfaild");
        exit();
      }
      
      mysqli_stmt_bind_param($stmt, "s", $adminUsername);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);
  
      $row = mysqli_fetch_assoc($resultData);
      mysqli_stmt_close($stmt);
      return $row['adminsId'];
      
    }

    //-------------------------Get Admin Pic-----------------------------------------------
    function get_admin_pic($conn, $adminUsername) {
      $sql = "SELECT * FROM admins WHERE adminsUsername = ?;";
      $stmt = mysqli_stmt_init($conn);
  
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header ("Location:../application.php?error=stmtfaild");
        exit();
      }
      
      mysqli_stmt_bind_param($stmt, "s", $adminUsername);
      mysqli_stmt_execute($stmt);
      $resultData = mysqli_stmt_get_result($stmt);
  
      $row = mysqli_fetch_assoc($resultData);
      mysqli_stmt_close($stmt);
      return $row['adminsPic'];
      
    }

        //--------------------------------Create Admin-------------------------------------
        function createAdmin ($conn, $adminName, $adminUsername, $adminPwd, $adminNic, $adminEmail, $adminMobile, $adminPosition, $adminAid, $adminAbout) {
          $sql = "INSERT INTO admins (adminsName, adminsUsername, adminsPassword, adminsNic, adminsEmail, adminsMobile, adminsPosition, adminsAid, adminsAbout) VALUES (?,?,?,?,?,?,?,?,?);";
          $stmt = mysqli_stmt_init ($conn);
          if (!mysqli_stmt_prepare ($stmt, $sql)) {
            header ("Location:../admin.php?error=stmtfaild");
            exit();
          }
    
          $hashedAdminPwd = password_hash ($adminPwd, PASSWORD_DEFAULT);
    
            mysqli_stmt_bind_param ($stmt, "sssssisis", $adminName, $adminUsername, $hashedAdminPwd, $adminNic, $adminEmail, $adminMobile, $adminPosition, $adminAid, $adminAbout);
            mysqli_stmt_execute ($stmt);
            mysqli_stmt_close ($stmt);
            header ("Location:../staff.php?error=none");
            exit();
        }

    //------------------------Login Admin--------------------------------------------------
    function loginAdmin ($conn, $admin_uname, $admin_password) {
      $aidExists = aidExists ($conn, $admin_uname);
      if (!$aidExists) {
        header ("Location:../staff.php?error=usernamedoesnotexist");
        exit();
      }

      $checkAdminPwd = check_admin_password($conn, $admin_uname, $admin_password);

      if (!$checkAdminPwd) {
        header ("Location:../staff.php?error=invalidpassword");
        exit();
      }
      
      else if ($checkAdminPwd) {
        session_start();
        $_SESSION["adminid"] = get_admin_id($conn, $admin_uname);
        $_SESSION["admin_username"] = $admin_uname;
        $_SESSION["admin_name"] = get_admin_name($conn, $admin_uname);
        $_SESSION["admin_pic"] = get_admin_pic($conn, $admin_uname);
          header ("Location:../admin.page.php");
          exit();
      }
    }


    //---------------------------Add New Book-----------------------------------
    function createBook ($conn, $bookName, $bookAuthor, $category, $bookId, $about, $description, $bookImg) {
      $sql = "INSERT INTO books (booksName, booksAuthor, booksCategory, booksBid, booksDescription_1, booksDescription_2, booksImage) VALUES (?,?,?,?,?,?,?);";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../admin.php?error=stmtfaild");
        exit();
      }

        if(!mysqli_stmt_bind_param ($stmt, "sssisss", $bookName, $bookAuthor, $category, $bookId, $about, $description, $bookImg)) {
          header('location:../admin.page.php?error=parambindfailed');
          exit();
        }
        if(!mysqli_stmt_execute ($stmt)) {
          header('location:../admin.page.php?error=executionfailed');
          exit();
        };
        mysqli_stmt_close ($stmt);
        header ("Location:../admin.page.php?error=none");
        exit();
    }

//---------------------------Update Book (For editing all)-----------------------------------
function updateBookByName ($conn, $bookName, $bookAuthor, $category, $bookId, $about, $description, $bookImg) {
  $sql = "UPDATE books SET booksAuthor = ?, booksCategory = ?, booksBid = ?, booksDescription_1 = ?, booksDescription_2 = ?, booksImage = ? WHERE booksName = ?;";
  $stmt = mysqli_stmt_init ($conn);
  if (!mysqli_stmt_prepare ($stmt, $sql)) {
    header ("Location:../admin.php?error=stmtfaild");
    exit();
  }

    mysqli_stmt_bind_param ($stmt, "ssissss", $bookAuthor, $category, $bookId, $about, $description, $bookImg, $bookName);
    mysqli_stmt_execute ($stmt);
    mysqli_stmt_close ($stmt);
    header ("Location:../admin.page.php?error=none");
    exit();
}

//---------------------------Update Book (For editing all)-----------------------------------
function updateBookByBid ($conn, $bookName, $bookAuthor, $category, $bookBid, $about, $description, $bookImg) {
  $sql = "UPDATE books SET booksName = ?, booksAuthor = ?, booksCategory = ?, booksBid = ?, booksDescription_1 = ?, booksDescription_2 = ?, booksImage = ? WHERE booksBid = ?;";
  $stmt = mysqli_stmt_init ($conn);
  if (!mysqli_stmt_prepare ($stmt, $sql)) {
    header ("Location:../admin.php?error=stmtfaild");
    exit();
  }

    mysqli_stmt_bind_param ($stmt, "sssisssi", $bookName, $bookAuthor, $category, $bookBid, $about, $description, $bookImg, $bookBid);
    mysqli_stmt_execute ($stmt);
    mysqli_stmt_close ($stmt);
    header ("Location:../admin.page.php?error=none");
    exit();
}

//---------------------------Update Book (For editing all)-----------------------------------
function updateBookById ($conn, $bookId, $bookName, $bookAuthor, $category, $bookBid, $about, $description, $bookImg) {
  $sql = "UPDATE books SET booksName = ?, booksAuthor = ?, booksCategory = ?, booksBid = ?, booksDescription_1 = ?, booksDescription_2 = ?, booksImage = ? WHERE booksId = ?;";
  if (!$stmt = mysqli_stmt_init ($conn)) {
    header ("Location:../admin.php?error=stmtinitfaild");
    exit();
  }
  if (!mysqli_stmt_prepare ($stmt, $sql)) {
    header ("Location:../admin.php?error=stmtprepfaild");
    exit();
  }
  if (!mysqli_stmt_bind_param ($stmt, "sssisssi", $bookName, $bookAuthor, $category, $bookBid, $about, $description, $bookImg, $bookId)) {
    header ("Location:../admin.php?error=stmtbindparamfaild");
    exit();
  }
  if (!mysqli_stmt_execute ($stmt)) {
    header ("Location:../admin.php?error=stmtexecfaild");
    exit();
  }
  if (mysqli_stmt_close ($stmt)) {
    header ("Location:../admin.page.php?error=stmtclosefailed");
    exit();
  }
    
    header ("Location:../admin.page.php?error=none");
    exit();
}

    //---------------------------Update Book (For editing author)-----------------------------------
    function updateBookAuthor ($conn, $bookName, $bookAuthor) {
      $sql = "UPDATE books SET booksAuthor = ? WHERE booksName = ?;";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../admin.php?error=stmtfaild");
        exit();
      }

        mysqli_stmt_bind_param ($stmt, "ss", $bookAuthor, $bookName);
        mysqli_stmt_execute ($stmt);
        mysqli_stmt_close ($stmt);
        header ("Location:../admin.page.php?error=none");
        exit();
    }

    //---------------------------Update Book (For editing category)-----------------------------------
    function updateBookCategory ($conn, $bookName, $bookCategory) {
      $sql = "UPDATE books SET booksCategory = ? WHERE booksName = ?;";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../admin.php?error=stmtfaild");
        exit();
      }

        mysqli_stmt_bind_param ($stmt, "ss", $bookCategory, $bookName);
        mysqli_stmt_execute ($stmt);
        mysqli_stmt_close ($stmt);
        header ("Location:../admin.page.php?error=none");
        exit();
    }

    //---------------------------Update Book (For editing bookBid)-----------------------------------
    function updateBookId ($conn, $bookName, $bookId) {
      $sql = "UPDATE books SET booksBid = ? WHERE booksName = ?;";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../admin.php?error=stmtfaild");
        exit();
      }

        mysqli_stmt_bind_param ($stmt, "is", $bookId, $bookName);
        mysqli_stmt_execute ($stmt);
        mysqli_stmt_close ($stmt);
        header ("Location:../admin.page.php?error=none");
        exit();
    }

    //---------------------------Update Book (For editing description 1)-----------------------------------
    function updateBookDescription1 ($conn, $bookName, $about) {
      $sql = "UPDATE books SET booksDescription_1 = ? WHERE booksName = ?;";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../admin.php?error=stmtfaild");
        exit();
      }

        mysqli_stmt_bind_param ($stmt, "ss", $description, $bookName);
        mysqli_stmt_execute ($stmt);
        mysqli_stmt_close ($stmt);
        header ("Location:../admin.page.php?error=none");
        exit();
    }

    //---------------------------Update Book (For editing description 2)-----------------------------------
    function updateBookDescription2 ($conn, $bookName, $description) {
      $sql = "UPDATE books SET booksDescription_2 = ? WHERE booksName = ?;";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../admin.php?error=stmtfaild");
        exit();
      }

        mysqli_stmt_bind_param ($stmt, "ss", $description, $bookName);
        mysqli_stmt_execute ($stmt);
        mysqli_stmt_close ($stmt);
        header ("Location:../admin.page.php?error=none");
        exit();
    }

    //---------------------------Update Book (For editing image)-----------------------------------
    function updateBookImage ($conn, $bookName, $bookImg) {
      $sql = "UPDATE books SET booksImage = ? WHERE booksName = ?;";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../admin.php?error=stmtfaild");
        exit();
      }

        mysqli_stmt_bind_param ($stmt, "ss", $bookImg, $bookName);
        mysqli_stmt_execute ($stmt);
        mysqli_stmt_close ($stmt);
        header ("Location:../admin.page.php?error=none");
        exit();
    }

    //---------------------------Delete Book-----------------------------------
    function deleteBookByName ($conn, $bookName) {
      $sql = "DELETE FROM books WHERE booksName = ?;";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../admin.php?error=stmtfaild");
        exit();
      }

        mysqli_stmt_bind_param ($stmt, "s", $bookName);
        mysqli_stmt_execute ($stmt);
        mysqli_stmt_close ($stmt);
        header ("Location:../admin.page.php?error=none");
        exit();
    }

    //---------------------------Delete Book-----------------------------------
    function deleteBookByBid ($conn, $bookBid) {
      $sql = "DELETE FROM books WHERE booksBid = ?;";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../admin.php?error=stmtfaild");
        exit();
      }

        mysqli_stmt_bind_param ($stmt, "i", $bookBid);
        mysqli_stmt_execute ($stmt);
        mysqli_stmt_close ($stmt);
        header ("Location:../admin.page.php?error=none");
        exit();
    }

    //---------------------------Get Books Count of a category-----------------------------------
    function getBooksCountByCategory ($conn, $bookName) {
      $sql = "SELECT * FROM books WHERE booksname = ?;";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../admin.php?error=stmtfaild");
        exit();
      }

        mysqli_stmt_bind_param ($stmt, "s", $bookName);
        mysqli_stmt_execute ($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $num_row = mysqli_num_rows($result);
        mysqli_stmt_close ($stmt);
        header ("Location:../admin.page.php?error=none");
        return $num_row;
    }

    //---------------------------Add News-----------------------------------
    function addNews ($conn, $title, $date, $about, $picture, $display) {
      $sql = "INSERT INTO news (title, date, about, picture, on_off) VALUES (?, ?, ?, ?, ?);";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../admin.php?error=stmtfaild");
        exit();
      }

        mysqli_stmt_bind_param ($stmt, "sssss", $title, $date, $about, $picture, $display);
        mysqli_stmt_execute ($stmt);
        mysqli_stmt_close ($stmt);
        header ("Location:../admin.page.php?error=none");
        exit();
    }

    //---------------------------Update News-----------------------------------
    function updateNews ($conn, $title, $date, $about, $picture, $display) {
      $sql = "UPDATE news SET date = ?, about = ?, picture = ?, on_off = ? WHERE title = ?;";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../admin.php?error=stmtfaild");
        exit();
      }

        mysqli_stmt_bind_param ($stmt, "sssss", $date, $about, $picture, $display, $title);
        mysqli_stmt_execute ($stmt);
        mysqli_stmt_close ($stmt);
        header ("Location:../admin.page.php?error=none");
        exit();
    }

    //---------------------------Delete News-----------------------------------
    function deleteNews ($conn, $title) {
      $sql = "DELETE FROM news WHERE title = ?;";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../admin.php?error=stmtfaild");
        exit();
      }

        mysqli_stmt_bind_param ($stmt, "s", $Title);
        mysqli_stmt_execute ($stmt);
        mysqli_stmt_close ($stmt);
        header ("Location:../admin.page.php?error=none");
        exit();
    }

    //---------------------------Get News-----------------------------------
    function getNews ($conn, $title) {
      $sql = "SELECT * FROM news WHERE title = ?;";
      $stmt = mysqli_stmt_init ($conn);
      if (!mysqli_stmt_prepare ($stmt, $sql)) {
        header ("Location:../admin.php?error=stmtfaild");
        exit();
      }

        mysqli_stmt_bind_param ($stmt, "s", $title);
        mysqli_stmt_execute ($stmt);
        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close ($stmt);
        header ("Location:../admin.page.php?error=none");
        return $result;
    }

    //---------------------------Get News Count-----------------------------------
    function getNewsCount ($conn) {
      $sql = "SELECT * FROM news;";
      $result = mysqli_query ($conn, $sql);
      $num_row = mysqli_num_rows($result);
      header ("Location:../admin.page.php?error=none");
      return $num_row;
    }