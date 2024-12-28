<?php
    session_start();
    require_once 'includes/dbh.inc.php';
    include_once 'includes/functions.inc.php';
?>
<?php

  function get_books_of_category($conn, $category) {
    $sql = 'SELECT * FROM books WHERE BooksCategory = ?';
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header ('location:../member.page.php?error=stmtfaild');
      exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $category);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $resultData;
  }

  function search_category($conn, $search_string, $category){
    $sql = "SELECT * FROM books WHERE booksName LIKE '%".$search_string."%' OR booksAuthor LIKE '%".$search_string."%' OR booksCategory = '".$category."'";

    $resultData = mysqli_query($conn, $sql);

    return $resultData;
  }

  $category = $_GET['category'];
  $result = get_books_of_category($conn, $category);

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
    
    <title><?php echo $category ?></title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

    <style>

      .bookcard {
        font-family: "Lexend Deca", sans-serif;
        margin-left: 50px;
        margin-right: 50px;
        margin-bottom: 40px;
        margin-top: 40px;
        align-items: center;
        justify-content: center;
      }

      section {
        display: flex;
        background: linear-gradient(90deg, rgba(0, 128, 128, 0.60), rgba(255, 153, 0, 0.00) 60%);
        color: white;
        border-radius: 30px;
        overflow: hidden;
        flex-direction: column-reverse;
        text-align: center;
      }

      .insight {
        font-weight: bold;
        color: black;
        text-shadow:  2px 2px 2px gray;
        font-family: cursive;
      }

      .bookimage {
        width: 200px;
        height: 300px;
        background-size: cover;
        background-blend-mode: luminosity;
      }
      
      .card-info {
        font-size: 16px;
        font-family: MV Boli;
        font-weight: 600;
        background: linear-gradient(90deg, black 20%, peru 60%);
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .card-content {
        padding: 30px;
      }

      @media (min-width: 500px) {
        section {
          flex-direction: row;
          text-align: left;
        }

        .bookimage {
          background-size: cover;
        }

      }

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
        box-shadow: 0 0 6px teal;
      }

      #table {
        background-color: black;
        border-radius: 6px;
        color: white;
        width: 325px;
        line: white;
        box-shadow: 0 0px 16px orange;
      }

    </style>

  </head>
  
  <body>

    <!--........................Navigation Bar..........................-->
    <?php
      include_once 'navigation.bar.php';
    ?>

    <div class="row">

      <div class="col-4"></div>
      <h1 class="col-4 mt-5" style="color: black; text-align: center; font-family: Audiowide, sans-serif;"><?php echo $category ?></h1>
      <div class="col-1"></div>

      <div class="col-3 mt-5" id="search" style="padding-top: 50px;"> 
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

    <?php 
      if ($result) {
        if (mysqli_num_rows ($result)>0) {
  
          while ($row = mysqli_fetch_assoc ($result)) {

            echo
            
            '<div class="bookcard">
              <a style="text-decoration: none;" href = "search.books.php?book='.$row['booksName'].'">
                <section>

                  <div class="card-content">
                    <h2><span class="insight">'.$row['booksName'].'</span></h2>
                    <br>
                    <h4 style="text-shadow: 2px 2px 2px gray; font-family: cursive;">Written by <text style="color: indigo; font-weight: bold;">'.$row['booksAuthor'].'</text></h4>
                    <br>
                    <p class="card-info">'.$row['booksDescription_2'].'</p>
                  </div>

                  <div class="bookimage">
                    <img style="height: 300px; width: 200px;" src="Image/books/'.$row['booksImage'].'">
                  </div>

                </section>
              </a>
            </div>';

          }
        }
        else {
          echo '<h4 style="color: black; text-align: center; padding-top: 150px; padding-bottom: 150px;">No results found</h4>';
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