<?php
    session_start();
    require_once 'includes\dbh.inc.php';
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


    <title>Books</title>

    <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">

    <style>

      body {
        background-color: #fdf1ec;
      }

      .book {
        height: 500px;
        width: 700px;
        margin: 50px auto;
        border-radius: 12px;
        box-shadow: 0px 8px 15px gray;
      }

      .book-img {
        float: left;
        height: 500px;
        width: 350px;
      }

      .book-img img {
        border-radius: 12px;
      }

      .book-info {
        float: left;
        height: 500px;
        width: 350px;
        border-radius: 12px;
        background-color: #ffffff;
      }

      .book-text {
        height: 300px;
        width: 327px;
      }

      .book-text h1 {
        margin: 0 0 0 38px;
        padding-top: 52px;
        font-size: 34px;
        color: #474747;
      }

      .book-text h1,
      .product-price-btn p {
        font-family: 'Bentham', serif;
      }

      .book-text h2 {
        margin: 0 0 47px 38px;
        font-size: 13px;
        font-family: 'Raleway', sans-serif;
        font-weight: 400;
        text-transform: uppercase;
        color: #d2d2d2;
        letter-spacing: 0.2em;
      }

      .book-text p {
        height: 125px;
        margin: 0 0 0 38px;
        font-family: 'Playfair Display', serif;
        color: gray;
        line-height: 25px;
        font-size: 15px;
        overflow: hidden;
      }

      .book-btn button {
        display: inline-block;
        height: 50px;
        width: 176px;
        margin: 0 40px 0 20px;
        box-sizing: border-box;
        border: transparent;
        border-radius: 60px;
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 0.2em;
        color: white;
        background-color: black;
        cursor: pointer;
      }

      .book-btn button:hover {
        background-color: orange;
      }

      </style>
    </head>
  <body>
    
    <?php

    /*....................................................................
    ............................Navigation Bar............................
    ....................................................................*/
      include_once 'navigation.bar.php';

      
      $book = $_GET['book'];
      $sql = "SELECT * FROM books WHERE booksName = '$book'";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo
          '<div class="book">
            <div class="book-img">
              <img src="'.$row['booksImage'].'" height="500" width="350">
            </div>
            <div class="book-info">
              <div class="book-text">
                <h1>'.$row['booksName'].'</h1>
                <h2>'.$row['booksAuthor'].'</h2>
                <p>'.$row['booksDescription_1'].'</p>
              </div>
            </div>
          </div>'
        ;}
      ?>

    <!--...................................................................
    ..................................Footer...............................
    ....................................................................-->
    <?php
      include_once 'Footer/footer.php';
    ?>

  </body>
</html>