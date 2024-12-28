<?php
  session_start();
	include_once "includes/dbh.inc.php";
  include_once 'includes/functions.inc.php';
?>

<html>
  <head>

      <!--boostrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>

    <title>edit profile</title>
    <style type="text/css">

      .form-control {
        width:400px;
      }

      .form1 {
        margin:0 540px;
      }

      label {
        color: black;
        margin-top: 10px;
      }

    </style>
  </head>
  <body>

  <?php
    include_once "navigation.bar.php";
  ?>

    <h2 style="text-align: center; margin-top: 30px; color: black;">Edit Information</h2>



    <div class="profile_info" style="text-align: center;">	
      <h3 style="color: orange;"><?php echo $_SESSION['username']; ?></h3>
    </div>

    <?php
          echo "<div style='text-align: center'>
                  <img style='border: 3px solid orange; border-color: orange; border-radius: 50%; overflow: hidden; height: 120; width: 120;' src='Image/users.profile.pic/".get_user_pic($conn, $_SESSION['username'])."'>
                </div>";
        ?>
    
    <div class="form1">
      <form action="" method="post" enctype="multipart/form-data" style="margin-bottom: 100px;">
      
        <label><h6><b>Profile Picture</b></h6></label>
        <input class="form-control row" type="file" name="file">
    
        <label><h6><b>First Name</b></h6></label>
        <input class="form-control" type="text" name="first_name" value="<?php echo get_user_fname($conn, $_SESSION["username"]); ?>">

        <label><h6><b>Last Name</b></h6></label>
        <input class="form-control" type="text" name="last_name" value="<?php echo get_user_lname($conn, $_SESSION["username"]); ?>">

        <label><h6><b>Username</b></h6></label>
        <input class="form-control" type="text" name="username" value="<?php echo $_SESSION["username"]; ?>">

        <label><h6><b>Member ID</b></h6></label>
        <input class="form-control" type="text" name="memberid" value="<?php echo get_user_memberid($conn, $_SESSION["username"]); ?>">

        <label><h6><b>NIC Number</b></h6></label>
        <input class="form-control" type="text" name="nic" value="<?php echo get_user_nic($conn, $_SESSION["username"]); ?>">

        <label><h6><b>Birthday</b></h6></label>
        <input class="form-control" type="date" name="birthday" value="<?php echo get_user_bday($conn, $_SESSION["username"]); ?>">

        <label><h6><b>Address</b></h6></label>
        <input class="form-control" type="text" name="address" value="<?php echo get_user_address($conn, $_SESSION["username"]); ?>">

        <label><h6><b>Email</b></h6></label>
        <input class="form-control" type="text" name="email" value="<?php echo get_user_email($conn, $_SESSION["username"]); ?>">

        <label><h6><b>Mobile</b></h6></label>
        <input class="form-control" type="text" name="mobile" value="<?php echo get_user_mobile($conn, $_SESSION["username"]); ?>">

        <label><h6><b>City</b></h6></label>
        <select class="form-select" name="city">
          <option value="<?php echo get_user_city($conn, $_SESSION["username"]); ?>"><?php echo get_user_city($conn, $_SESSION["username"]); ?></option>
          <option value="Ampara">Ampara</option>
          <option value="Anuradhapura">Anuradhapura</option>
          <option value="Badulla">Badulla</option>
          <option value="Batticaloa">Batticaloa</option>
          <option value="Colombo">Colombo</option>
          <option value="Galle">Galle</option>
          <option value="Gampaha">Gampaha</option>
          <option value="Hambantota">Hambantota</option>
          <option value="Jaffna">Jaffna</option>
          <option value="Kalutara">Kalutara</option>
          <option value="Kandy">Kandy</option>
          <option value="Kegalle">Kegalle</option>
          <option value="Kilinochchi">Kilinochchi</option>
          <option value="Kurunegala">Kurunegala</option>
          <option value="Monaragala">Monaragala</option>
          <option value="Mannar">Mannar</option>
          <option value="Matale">Matale</option>
          <option value="Matara">Matara</option>
          <option value="Mullaitivu">Mullaitivu</option>
          <option value="Nuwara_Eliya">Nuwara Eliya</option>
          <option value="Polonnaruwa">Polonnaruwa</option>
          <option value="Puttalam">Puttalam</option>
          <option value="Ratnapura">Ratnapura</option>
          <option value="Trincomalee">Trincomalee</option>
          <option value="Vavuniya">Vavuniya</option>
        </select>

        <label><h6><b>Zip</b></h6></label>
        <input class="form-control" type="text" name="zip" value="<?php echo get_user_zip($conn, $_SESSION["username"]); ?>">

        <label><h6><b>Gender</b></h6></label>
        <select class="form-select" name="gen">
          <option value="<?php get_user_gender($conn, $_SESSION["username"]); ?>"><?php echo get_user_gender($conn, $_SESSION["username"]); ?></option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>

          <button class="btn btn-dark" name="submit" type="submit" style="float: right; width: 170px; margin-top: 20px; margin-bottom: 20px;"><img src = "icons\save.svg"> Save Changes</button>
  
      </form>
    </div>
    
    <?php 

      if(isset($_POST['submit'])) {

        move_uploaded_file($_FILES['file']['tmp_name'],"Image/users.profile.pic/".$_FILES['file']['name']);

        $firstName = $_POST["first_name"];
        $lastName = $_POST["last_name"];
        $username = $_POST["username"];
        $memberId = $_POST["memberid"];
        $nic = $_POST["nic"];
        $birthday = $_POST["birthday"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $city = $_POST["city"];
        $zip = $_POST["zip"];
        $gen = isset($_POST["gen"]) ? $_POST["gen"] : null;
        $pic=$_FILES['file']['name'];

        $sql = "UPDATE users SET usersFirstName='$firstName', usersLastName='$lastName', usersUsername='$username', usersMemberId='$memberId', usersNic='$nic', usersBirthday='$birthday', usersAddress='$address', usersEmail='$email', usersMobile='$mobile', usersCity='$city', usersZip='$zip', usersGender='$gen', usersPic='$pic' WHERE usersUsername='".$_SESSION['username']."';";

        if(mysqli_query($conn, $sql))
        {
          ?>
            <script type="text/javascript">
              alert("Saved Successfully");
              window.location="user.profile.php";
            </script>
          <?php
        }
      }
    ?>
      
    <!--...................................................................
    ..................................Footer...............................
    ....................................................................-->

    <?php
      include_once 'Footer/footer.php';
    ?>

  </body>
</html>