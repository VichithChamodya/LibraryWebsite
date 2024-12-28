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

    <title>Welcome</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

    <style>

      /*--------------------search bar----------------------*/
      #search {
        /*position: fixed;
        z-index: 1;*/
      }

      input[type="text"] {
        width: 250px;
        transition: width .35s ease-in-out, .35s ease-in-out;
        box-sizing: border-box;
        box-shadow: 0 0 3px black;
      }

      input[type="text"]:focus {
        width: 410px;
        margin-left: -160px;
        box-shadow: 0 0 6px orange;
      }

      #table {
        background-color: black;
        border-radius: 6px;
        color: white;
        width: 325px;
        line: white;
        box-shadow: 0 0px 16px orange;
      }

      /*--------------------pagination---------------------*/
      .pagination-container {
        text-align: center;
      }

      .pagination {
        display: inline-block;
      }

      .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        margin: 0 8px;
        text-decoration: none;
        border: 2px solid #ddd;
        border-radius: 5px;
        transition: background-color .3s;
      }

      .pagination a.active {
        color: white;
        background-color: #4CAF50;
        border: 2px solid #4CAF50;
      }

      .pagination a:hover:not(.active) {
        background-color: #ddd;
      }

    </style>

  </head>

  <body>

    <!--...................................................................
    ............................Navigation Bar.............................
    ....................................................................-->
    <?php
      include_once 'navigation.bar.php';
    ?>

    <!--...................................................................
    .............................User Details..............................
    ....................................................................-->
    <div class="row m-4">
      <div class="col-9">
        <h1 style="font-family: Audiowide, sans-serif;">Hello
          <?php
            if (isset($_SESSION["username"])) {
              $fname = get_user_fname($conn, $_SESSION['username']);
              echo $fname.'....!';
            }
            else {
              echo 'User....!';
            }
          ?>
        </h1>
        <p>Welcome to deep reservoir of knowledge...</p>
      </div>
      

      <!--...................................................................
      ..............................Search Bar...............................
      ....................................................................-->

      <div class="col-3 mt-2">
        <div id="search"> 
          <form class="d-flex" type="search" method="post">
            <input class="form-control me-2" type="text" name="search" placeholder="Search Books">
            <button class="btn btn btn-dark" type="submit" name="submit">Search</button>
          </form>

            <table id="table" cellpadding="12">
              <?php
                include_once 'includes/search.php';
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!--...................................................................
    ..............................Categories...............................
    ....................................................................-->
    <?php
      include_once 'categories.php'
    ?>

    <!--...................................................................
    ..............................Pagination...............................
    ....................................................................-->
    <!--<div class="pagination-container">
      <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#">1</a>
        <a href="#" class="active">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">7</a>
        <a href="#">8</a>
        <a href="#">9</a>
        <a href="#">&raquo;</a>
      </div>
    </div>
    <br><br></div>-->

      <!--...................................................................
      ..................................Footer...............................
      ....................................................................-->

    <?php
      include_once 'Footer/footer.php';
    ?>

  </body>
</html>