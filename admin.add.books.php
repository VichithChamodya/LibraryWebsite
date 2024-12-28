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

    <title>Books</title>

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

    <form class="needs-validation border p-4 row" action="includes/books.php" method="post" enctype="multipart/form-data" style="border-radius: 12px; margin-left: 30px; margin-right: 30px;">

    <h3 style="color: white;">Add New Book</h3>
      
      <!--...........................Book Name.................................-->
      <div class="col-3 mt-3">
        <label for="name" class="form-label">Book Name</label>
        <input type="text" class="form-control" id="book_name" name="book_name" placeholder="Book Name">
      </div>
      <div class="col-9"> <!--for space--> </div>

      <!--...........................Book Author.................................-->
      <div class="col-3 mt-3">
        <label for="name" class="form-label">Book Name</label>
        <input type="text" class="form-control" id="book_author" name="book_author" placeholder="Book Author">
      </div>
      <div class="col-9"> <!--for space--> </div>

      <!--..........................Book Category..............................-->
      <div class="col-3 mt-3">
        <label for="position" class="form-label">Category</label>
        <select class="form-select" id="category" name="category">
          <option value="none">Select Category</option>
          <option value="Fantasy">Fantasy</option>
          <option value="Mystery / Thriller">Mystery/Thriller</option>
          <option value="Action and Adventure">Action & Adventure</option>
          <option value="Classics">Classics</option>
          <option value="Humor">Humor</option>
          <option value="Romance">Romance</option>
          <option value="Self-Help">Self-Help</option>
          <option value="Realistic Fiction">Realistic Fiction</option>
          <option value="Science Fiction">Science Fiction</option>
          <option value="Historical Fiction">Historical Fiction</option>
          <option value="Biography / Memoir">Biography/Memoir</option>
          <option value="Graphic Novel">Graphic Novel</option>
          <option value="Children's Literature">Children's Literature</option>
          <option value="Sports">Sports</option>
          <option value="Western">Western</option>
          <option value="Young Adult">Young Adult</option>
        </select>
      </div>
      <div class="col-9"> <!--for space--> </div>

      <!--.........................Book Id...............................-->
      <div class="col-3 mt-3">
        <label for="username" class="form-label">Book ID</label>
        <input type="text" class="form-control" id="book_id" name="book_id" placeholder="Book ID">
      </div>
      <div class="col-9"> <!--for space--> </div>

      <!--........................Description 1..............................-->
      <div class="col-3 mt-3">
        <label for="username" class="form-label">About Book</label>
        <input type="text" class="form-control" id="about" name="about" placeholder="About Book">
      </div>
      <div class="col-9"> <!--for space--> </div>

      <!--........................Description 2...............................-->
      <div class="col-3 mt-3">
        <label for="username" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Description">
      </div>
      <div class="col-9"> <!--for space--> </div>

      <!--..........................Book Image................................-->
      <div class="col-3 mt-3">
      <label><h6><b>Book Image</b></h6></label>
      <input class="form-control row" type="file" name="file">
      </div>
      <div class="col-9"> <!--for space--> </div>

      <!--.........................Submit Button..........................-->
      <button class="btn btn-outline-warning col-1 mt-5" type="submit" id="submit" name="submit" style="margin-left: 12px;">Add</button>

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