<?php
  session_start();
  include_once 'includes/functions.inc.php';
  include_once 'includes/dbh.inc.php';
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

    <title>Admin</title>

    <style>

    </style>

  </head>

  <body>

  <!--...................................................................
  ..........................Admin Navigation Bar.............................
  ....................................................................-->
  <?php
    include_once 'admin.navigation.bar.php';
  ?>

    <div class="row m-4">
      <div class="col-9">
        <h1 style="font-family: Audiowide, sans-serif;">Hello
          <?php
            if (isset($_SESSION["admin_username"])) {
              $name = get_admin_name($conn, $_SESSION['admin_username']);
              echo $name.'....!';
            }
            else {
              echo 'Admin....!';
            }
          ?>
        </h1>
      </div>

      <div class="col-3"></div>
    
      <div class="col-3 m-3 mt-5">
        <a href="admin.register.form.php">
          <button type="button" class="btn btn-warning btn-lg">Signup New Admin</button>
        </a>
      </div>
      <div class="col-9"></div>
      <hr>

      <div class="col-5 m-3">
          <a href="admin.add.books.php">
            <button type="button" class="btn btn-primary">Add Books</button>
          </a>
      </div>
      <div class="col-9"></div>

      <div class="col-5 m-3">
          <a href="admin.edit.books.php">
            <button type="button" class="btn btn-dark">Edit Book</button>
          </a>
        </div>
        <div class="col-9"></div>

      <div class="col-5 m-3">
        <a href="admin.delete.books.php">
          <button type="button" class="btn btn-danger">Delete Book</button>
        </a>
      </div>
      <div class="col-9"></div>
            <hr>
      <div class="col-5 m-3">
        <a href="admin.add.news.php">
          <button type="button" class="btn btn-primary">Add News</button>
        </a>
      </div>
      <div class="col-9"></div>

      <div class="col-5 m-3">
        <a href="admin.update.news.php">
          <button type="button" class="btn btn-dark">Update News</button>
        </a>
      </div>
      <div class="col-9"></div>

      <div class="col-5 m-3">
        <a href="admin.delete.news.php">
          <button type="button" class="btn btn-danger">Delete News</button>
        </a>
      </div>
      <div class="col-9"></div>

    </div>
            
    <!--...................................................................
    ..................................Footer...............................
    ....................................................................-->

    <?php
      include_once 'Footer/footer.php';
    ?>

  </body>
</html>