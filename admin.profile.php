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
    include_once "admin.navigation.bar.php";
  ?>

    <div style="background: url('Image/admin1.jpg'); background-size: cover; background-repeat: no-repeat;">
      <div class="wrapper">

        <?php
          $sql="SELECT * FROM admins where adminsUsername='$_SESSION[admin_username]';";
          $result = mysqli_query($conn, $sql);
        ?>

        <h2 style="text-align: center; margin-top: 20px;">My Profile</h2>

        <?php
          $row = mysqli_fetch_assoc($result);

          echo "<div style='text-align: center'>
                  <img style='border: 3px solid orange; border-color: orange; border-radius: 50%; overflow: hidden; height: 120; width: 120;' src='Image/admins.profile.pic/".$row['adminsPic']."'>
                </div>";
        ?>
        
        <div style="text-align: center; font-size: 20px; margin-top: 15px;">
          <b>
            <?php echo $_SESSION['admin_username']; ?>
          </b>
        </div>
        <br>

        <form action="" method="post">
          <button class="btn btn-dark" name="submit_edit" type="submit" style="float: right; width: 150px; margin-bottom: 20px;"><img src = "icons\edit.svg"> Edit Details</button>
        </form>

        <?php
          if(isset($_POST['submit_edit'])) {
 				?>

 					<script type="text/javascript">
 						window.location="edit.admin.profile.php"
 					</script>

 				<?php
 				 }
        ?>  

        <?php

          echo "<table cellpadding='12' align='center' width='700px' style='background-color: rgba(0, 0, 0, 0.2); backdrop-filter: blur(4px); border-radius: 10px; color: black; box-shadow: 0 0 8px black;'>";
          
            echo "<tr>";
              echo "<td>";
                echo "<b>Name</b>";
              echo "</td>";;
              echo "<td style='color: white;'>";
                echo $row['adminsName'];
              echo "</td>";
            echo "</tr>";

            echo "<tr>";
              echo "<td>";
                echo "<b>Username</b>";
              echo "</td>";
              echo "<td style='color: white;'>";
                echo $row['adminsUsername'];
              echo "</td>";
            echo "</tr>";

            echo "<tr>";
              echo "<td>";
                echo "<b>NIC Number</b>";
              echo "</td>";
              echo "<td style='color: white;'>";
                echo $row['adminsNic'];
              echo "</td>";
            echo "</tr>";
          
            echo "<tr>";
              echo "<td>";
                echo "<b>Email</b>";
              echo "</td>";
              echo "<td style='color: white;'>";
                echo $row['adminsEmail'];
              echo "</td>";
            echo "</tr>";
                    
            echo "<tr>";
              echo "<td>";
                echo "<b>Mobile</b>";
              echo "</td>";
              echo "<td style='color: white;'>";
                echo $row['adminsMobile'];
              echo "</td>";
            echo "</tr>";

            echo "<tr>";
              echo "<td>";
                echo "<b>Position</b>";
              echo "</td>";
              echo "<td style='color: white;'>";
                echo $row['adminsPosition'];
              echo "</td>";
            echo "</tr>";

            echo "<tr>";
              echo "<td>";
                echo "<b>Staff ID</b>";
              echo "</td>";
              echo "<td style='color: white;'>";
                echo $row['adminsAid'];
              echo "</td>";
            echo "</tr>";

            echo "<tr>";
              echo "<td>";
                echo "<b>About</b>";
              echo "</td>";
              echo "<td style='color: white;'>";
                echo $row['adminsAbout'];
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