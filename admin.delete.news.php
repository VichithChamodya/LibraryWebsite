<?php
  session_start();
  include_once 'includes/dbh.inc.php';
?>

<html>
  <head?>

      <!--boostrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>

    <title>News</title>

    <style type="text/css">

      .form-control {
        width:400px;
      }

      .form1 {
        margin:0 540px;
      }

      label {
        color: white;
        margin-top: 10px;
      }

    </style>

  </head>
  <body>

    <!--...................................................................
    ..........................Admin Navigation Bar.............................
    ....................................................................-->
    <?php
      include_once 'admin.navigation.bar.php';
    ?>

    <div style="background-image: url('Image/admin3.jpg'); background-size: cover; background-repeat :no-repeat;">
    <br>

    <form class="needs-validation border p-4 row" action="includes/newsdelete.php" method="post" enctype="multipart/form-data" style="border-radius: 12px; margin-left: 30px; margin-right: 30px;">

    <h3 style="color: white;">Delete News</h3>
      
      <!--...........................News...................................-->
      <div class="col-3 mt-3">
        <label for="name" class="form-label">News</label>
        <input required type="text" class="form-control" id="news" name="news" placeholder="News">
      </div>
      <div class="col-9"> <!--for space--> </div>

       
      <!--.........................Submit Button..........................-->
      <button class="btn btn-outline-warning col-1 mt-5" type="submit" id="submit" name="submit" style="margin-left: 12px;">Delete</button>

    </form>
    <br>
  </div>

    <!--...................................................................
    ..................................Footer...............................
    ....................................................................-->

    <?php
      include_once 'Footer/footer.php';
    ?>
      
  </body>
</html>