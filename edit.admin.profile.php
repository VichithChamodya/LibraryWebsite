<?php
  session_start();
	include_once "includes\dbh.inc.php";
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
    include_once "admin.navigation.bar.php";
  ?>

    <h2 style="text-align: center; margin-top: 30px; color: black;">Edit Information</h2>

    <?php
      $sql="SELECT * FROM admins where adminsUsername='$_SESSION[admin_username]' ;";
      $result = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_assoc($result)) {
        $adminName = $row['adminsName'];
        $adminUsername = $row['adminsUsername'];
        $adminNic = $row['adminsNic'];
        $adminEmail = $row['adminsEmail'];
        $adminMobile = $row['adminsMobile'];
        $adminPosition = $row['adminsPosition'];
        $adminAid = $row['adminsAid'];
        $adminAbout = $row['adminsAbout'];
      }
    ?>

    <div class="profile_info" style="text-align: center;">	
      <h3 style="color: orange;"><?php echo $_SESSION['admin_username']; ?></h3>
    </div>

    <?php
          echo "<div style='text-align: center'>
                  <img style='border: 3px solid orange; border-color: orange; border-radius: 50%; overflow: hidden; height: 120; width: 120;' src='Image/admins.profile.pic/".$_SESSION['admin_pic']."'>
                </div>";
        ?>
    
    <div class="form1">
      <form action="" method="post" enctype="multipart/form-data" style="margin-bottom: 100px;">
      
        <label><h6><b>Profile Picture</b></h6></label>
        <input class="form-control row" type="file" name="file">
    
        <label><h6><b>Name</b></h6></label>
        <input class="form-control" type="text" name="admin_name" value="<?php echo $adminName; ?>">

        <label><h6><b>Username</b></h6></label>
        <input class="form-control" type="text" name="admin_username" value="<?php echo $adminUsername; ?>">

        <label><h6><b>NIC Number</b></h6></label>
        <input class="form-control" type="text" name="admin_nic" value="<?php echo $adminNic; ?>">

        <label><h6><b>Email</b></h6></label>
        <input class="form-control" type="email" name="admin_email" value="<?php echo $adminEmail; ?>">

        <label><h6><b>Mobile</b></h6></label>
        <input class="form-control" type="text" name="admin_mobile" value="<?php echo $adminMobile; ?>">

        <label><h6><b>Position</b></h6></label>
        <select class="form-select" name="admin_position">
          <option value="<?php echo $adminPosition; ?>"><?php echo $adminPosition; ?></option>
          <option value="Position 1">Position 1</option>
          <option value="Position 2">Position 2</option>
          <option value="Position 3">Position 3</option>
          <option value="Position 4">Position 4</option>
          <option value="Position 5">Position 5</option>
          <option value="Position 6">Position 6</option>
          <option value="Position 7">Position 7</option>
          <option value="Position 8">Position 8</option>
        </select>

        <label><h6><b>Staff ID</b></h6></label>
        <input class="form-control" type="text" name="admin_id" value="<?php echo $adminAid; ?>">

        <label><h6><b>About</b></h6></label>
        <input class="form-control" type="text" name="admin_about" value="<?php echo $adminAbout; ?>">

        <button class="btn btn-dark" name="submit" type="submit" style="float: right; width: 170px; margin-top: 20px; margin-bottom: 20px;"><img src = "icons\save.svg"> Save Changes</button>
  
      </form>
    </div>
    
    <?php 

      if(isset($_POST['submit'])) {

        move_uploaded_file($_FILES['file']['tmp_name'],"Image/admins.profile.pic/".$_FILES['file']['name']);

        $adminName = $_POST["admin_name"];
        $adminUsername = $_POST["admin_username"];
        $adminNic = $_POST["admin_nic"];
        $adminEmail = $_POST["admin_email"];
        $adminMobile = $_POST["admin_mobile"];
        $adminPosition = $_POST["admin_position"];
        $adminAid = $_POST["admin_id"];
        $adminAbout = $_POST["admin_about"];
        $adminPic = $_FILES['file']['name'];

        $sql = "UPDATE admins SET adminsName='$adminName', adminsUsername='$adminUsername', adminsNic='$adminNic', adminsEmail='$adminEmail', adminsMobile='$adminMobile', 	adminsPosition='$adminPosition', adminsAid='$adminAid', adminsAbout='$adminAbout', 	adminsPic='$adminPic' WHERE adminsUsername='".$_SESSION['admin_username']."';";

        if(mysqli_query($conn, $sql))
        {
          ?>
            <script type="text/javascript">
              alert("Saved Successfully");
              window.location="admin.profile.php";
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