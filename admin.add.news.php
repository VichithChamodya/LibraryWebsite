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

    <div style="background-image: url('Image/admin5.jpg'); background-size: cover; background-repeat :no-repeat;">
    <br>

    <form class="needs-validation border p-4 row" action="includes/newsadd.php" method="post" enctype="multipart/form-data" style="border-radius: 12px; margin-left: 30px; margin-right: 30px;">

    <h3 style="color: black;">Add New News</h3>
      
      <!--...........................News...................................-->
      <div class="col-3 mt-3">
        <label for="name" class="form-label">News & Updates</label>
        <input required type="text" class="form-control" id="news" name="news" placeholder="News & Updates">
      </div>
      <div class="col-9"> <!--for space--> </div>

       <!--...........................About...................................-->
       <div class="col-3 mt-3">
        <label for="name" class="form-label">About</label>
        <input required type="text" class="form-control" id="about" name="about" placeholder="About">
      </div>
      <div class="col-9"> <!--for space--> </div>

      <!--...........................Date...................................-->
      <div class="col-3 mt-3">
        <label for="name" class="form-label">Date</label>
        <input required type="date" class="form-control" id="date" name="date" placeholder="Date">
      </div>
      <div class="col-9"> <!--for space--> </div>

      <!--..........................News Image................................-->
      <div class="col-3 mt-3">
      <label><h6><b>News Image</b></h6></label>
      <input required class="form-control row" type="file" name="file">
      </div>
      <div class="col-9"> <!--for space--> </div>

      <!--..........................News Display..............................-->
      <div class="col-3 mt-3">
        <label for="position" class="form-label">Display</label>
        <select class="form-select" id="on_off" name="on_off">
          <option value="none">Select Option</option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
        </select>
      </div>
      <div class="col-9"> <!--for space--> </div>

      <!--.........................Submit Button..........................-->
      <button class="btn btn-primary col-1 mt-5" type="submit" id="submit" name="submit" style="margin-left: 12px;">Add</button>

    </form>
  </div>

    <!--...................................................................
    ..................................Footer...............................
    ....................................................................-->

    <?php
      include_once 'Footer/footer.php';
    ?>
      
  </body>
</html>