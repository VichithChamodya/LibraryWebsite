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

    <title>Profile</title>
    
    <style type="text/css">

      .wrapper
      {
        width: 700px;
        margin: 0 auto;
        color: black;
      }

    </style>
  </head>

  <body>

  <?php
    include_once "navigation.bar.php";
  ?>

    <div style="background: url('Image/user.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center center;">
      <div class="wrapper">

        

        <h2 style="text-align: center; margin-top: 20px;">My Profile</h2>

        <?php
          

          echo "<div style='text-align: center'>
                  <img style='border: 3px solid orange; border-color: orange; border-radius: 50%; overflow: hidden; height: 120; width: 120;' src='Image/users.profile.pic/".get_user_pic($conn, $_SESSION['username'])."'>
                </div>";
        ?>
        
        <div style="text-align: center; font-size: 25px; color: orange; text-shadow: 0px 0px 5px black;">
          <b>
            <?php echo $_SESSION['username']; ?>
          </b>
        </div>
        <br>

        <form action="" method="post">
          <button class="btn btn-dark" name="submit1" type="submit" style="float: right; width: 150px; margin-bottom: 20px;"><img src = "icons\edit.svg"> Edit Details</button>
        </form>

        <?php
          if(isset($_POST['submit1'])) {
 				?>

 					<script type="text/javascript">
 						window.location="edit.user.profile.php"
 					</script>

 				<?php
 				 }
        ?>  

        <?php

          echo "<table cellpadding='10' align='center' width='700px' style='background-color: rgba(0, 0, 0, 0.2); backdrop-filter: blur(4px); border-radius: 10px; color: black; box-shadow: 0 0 8px black;'>";
          
            echo "<tr>";
              echo "<td style='color: orange;'>";
                echo "<b>First Name</b>";
              echo "</td>";
              echo "<td style='font-weight: bold;'>";
                echo get_user_fname($conn, $_SESSION["username"]);
              echo "</td>";
            echo "</tr>";

            echo "<tr>";
              echo "<td style='color: white;'>";
                echo "<b>Last Name</b>";
              echo "</td>";
              echo "<td style='font-weight: bold;'>";
                echo get_user_lname($conn, $_SESSION["username"]);
              echo "</td>";
            echo "</tr>";

            echo "<tr>";
              echo "<td style='color: orange;'>";
                echo "<b>User Name</b>";
              echo "</td>";
              echo "<td style='font-weight: bold;'>";
                echo $_SESSION["username"];
              echo "</td>";
            echo "</tr>";

            echo "<tr>";
              echo "<td style='color: white;'>";
                echo "<b>Member Id</b>";
              echo "</td>";
              echo "<td style='font-weight: bold;'>";
                echo get_user_memberid($conn, $_SESSION["username"]);
              echo "</td>";
            echo "</tr>";

            echo "<tr>";
              echo "<td style='color: orange;'>";
                echo "<b>NIC Number</b>";
              echo "</td>";
              echo "<td style='font-weight: bold;'>";
                echo get_user_nic($conn, $_SESSION["username"]);
              echo "</td>";
            echo "</tr>";
          
            echo "<tr>";
              echo "<td style='color: white;'>";
                echo "<b>Birthday</b>";
              echo "</td>";
              echo "<td style='font-weight: bold;'>";
                echo get_user_bday($conn, $_SESSION["username"]);
              echo "</td>";
            echo "</tr>";
          
            echo "<tr>";
              echo "<td style='color: orange;'>";
                echo "<b>Address</b>";
              echo "</td>";
              echo "<td style='font-weight: bold;'>";
                echo get_user_address($conn, $_SESSION["username"]);
              echo "</td>";
            echo "</tr>";
          
            echo "<tr>";
              echo "<td style='color: white;'>";
                echo "<b>Email</b>";
              echo "</td>";
              echo "<td style='font-weight: bold;'>";
                echo get_user_email($conn, $_SESSION["username"]);
              echo "</td>";
            echo "</tr>";
                    
            echo "<tr>";
              echo "<td style='color: orange;'>";
                echo "<b>Mobile</b>";
              echo "</td>";
              echo "<td style='font-weight: bold;'>";
                echo get_user_mobile($conn, $_SESSION["username"]);
              echo "</td>";
            echo "</tr>";
          
            echo "<tr>";
              echo "<td style='color: white;'>";
                echo "<b>City</b>";
              echo "</td>";
              echo "<td style='font-weight: bold;'>";
                echo get_user_city($conn, $_SESSION["username"]);
              echo "</td>";
            echo "</tr>";
          
            echo "<tr>";
              echo "<td style='color: orange;'>";
                echo "<b>Zip</b>";
              echo "</td>";
              echo "<td style='font-weight: bold;'>";
                echo get_user_zip($conn, $_SESSION["username"]);
              echo "</td>";
            echo "</tr>";

          echo "<tr>";
              echo "<td style='color: white;'>";
                echo "<b>Gender</b>";
              echo "</td>";
              echo "<td style='font-weight: bold;'>";
                echo get_user_gender($conn, $_SESSION["username"]);
              echo "</td>";
            echo "</tr>";

          echo "</table>";

        ?>
      <br><br><br>
      </div>
    </div>
    
    <!--...................................................................
    ..................................Footer...............................
    ....................................................................-->

    <?php
      include_once 'Footer/footer.php';
    ?>

  </body>
 </html>