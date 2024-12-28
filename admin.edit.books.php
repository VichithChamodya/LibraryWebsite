<?php
  session_start();
  include_once 'includes/dbh.inc.php';
  include_once 'includes/functions.inc.php';

  if (isset($_GET['book'])) {
        $bookId = $_GET ['book'];


        $sql = "SELECT * FROM books WHERE booksId = ?;";
        if (!$stmt = mysqli_stmt_init($conn)) {
          header('location: admin.php?error=stmtinitfailed');
          exit();
        }
        if (!mysqli_stmt_prepare ($stmt, $sql)) {
          header ("Location:admin.php?error=stmtpreparefailed");
          exit();
        }
        if (!mysqli_stmt_bind_param($stmt, "i", $bookId)) {
          header('location: admin.php?error=stmtparambindfailed');
          exit();
        }
        mysqli_stmt_execute($stmt);

        if ($result = mysqli_stmt_get_result($stmt)) {
            if ($row = mysqli_fetch_assoc($result)) {
                $bookName = $row['booksName'];
                $bookAuthor = $row['booksAuthor'];
                $bookCategory = $row['booksCategory'];
                $bookBid = $row['booksBid'];
                $description1 = $row['booksDescription_1'];
                $description2 = $row['booksDescription_2'];
                $image = $row['booksImage'];
            }
        }
  }
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

      /*--------------------search bar----------------------*/
      

      input[type="text"] {
        width: 250px;
        transition: width .35s ease-in-out, .35s ease-in-out;
        box-sizing: border-box;
        box-shadow: 0 0 4px gray;
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
        box-shadow: 0 0px 16px orange;
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

    <div style="background-image: url('Image/admin4.jpg'); background-size: cover; background-repeat :no-repeat;">
      <br>

      <div class = "row">
        <div class="col-5"></div>
        <div class="col-6">
          <div id="search"> 
            <form class="d-flex" type="search" method="post">
              <input class="form-control me-2" type="text" name="search" placeholder="Search Books">
              <button class="btn btn btn-dark" type="submit" name="searchsubmit">Search</button>
            </form>

              <table id="table" cellpadding="12">
                <?php

                if (isset($_POST['searchsubmit'])) {
                  $search = $_POST ['search'];

                  $sql = "SELECT * FROM books WHERE booksName LIKE '%$search%' OR booksAuthor LIKE '%$search%'";
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                    if (mysqli_num_rows ($result)<5) {
                      echo '<thead>
                              <tr style="color: orange;">
                                <th>Book</th>
                                <th>Author</th>
                                <th>Category</th>
                              </tr>
                            </thead>';

                      while ($row = mysqli_fetch_assoc ($result)) {
                        echo '<tbody>
                                <tr>
                                  <td><a href = "admin.edit.books.php?book='.$row['booksId'].'">'.$row['booksName'].'</a></td>
                                  <td>'.$row['booksAuthor'].'</td>
                                  <td>'.$row['booksCategory'].'</td>
                                </tr>
                              </tbody>';
                      }
                    }

                    else {
                      echo  '<thead>
                              <tr>
                                <td style="color: orange; font-weight: bold;">No results found</td>
                              </tr>
                            </thead><br>';
                    }
                  }
                }

              ?>
            </table>
          </div>
        </div>
      </div>



      <?php if (isset($_GET['book'])) { ?>
        <form class="needs-validation border p-4 row" action="includes/bookedit.php?book=<?php echo $_GET['book'] ?>" method="post" enctype="multipart/form-data" style="border-radius: 12px; margin-left: 30px; margin-right: 30px;">

            <h3 style="color: white;">Update Book</h3>
            
            <!--...........................Book Name.................................-->
            <div class="col-3 mt-3">
                <label for="name" class="form-label">Book Name</label>
                <input required type="text" class="form-control" id="book_name" name="book_name" value="<?php echo $bookName; ?>" placeholder="<?php echo $bookName; ?>">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--...........................Book Author.................................-->
            <div class="col-3 mt-3">
                <label for="name" class="form-label">Book Author</label>
                <input required type="text" class="form-control" id="book_author" name="book_author" value="<?php echo $bookAuthor; ?>" placeholder="<?php echo $bookAuthor; ?>">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--..........................Book Category..............................-->
            <div class="col-3 mt-3">
                <label for="position" class="form-label">Category</label>
                <select required class="form-select" id="category" name="category">
                <option value="<?php echo $bookCategory; ?>"><?php echo $bookCategory; ?></option>
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
                <input required type="text" class="form-control" id="book_id" name="book_id" value="<?php echo $bookBid; ?>" placeholder="<?php echo $bookBid; ?>">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--........................Description 1..............................-->
            <div class="col-3 mt-3">
                <label for="username" class="form-label">About Book</label>
                <input required type="text" class="form-control" id="about" name="about" value="<?php echo $description1; ?>" placeholder="<?php echo $description1; ?>">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--........................Description 2...............................-->
            <div class="col-3 mt-3">
                <label for="username" class="form-label">Description</label>
                <input required type="text" class="form-control" id="description" name="description" value="<?php echo $description2; ?>" placeholder="<?php echo $description2; ?>">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--..........................Book Image................................-->
            <div class="col-3 mt-3">
            <label><h6><b>Book Image</b></h6></label>
            <input required class="form-control row" type="file" name="file" value="<?php echo $image; ?>" placeholder="<?php echo $image; ?>">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--.........................Submit Button..........................-->
            <button class="btn btn-outline-warning col-1 mt-5" type="submit" id="submit" name="formsubmit" style="margin-left: 12px;">Update</button>

          </form>
      <?php } else { ?>
        <form class="needs-validation border p-4 row" action="includes/bookedit.php" method="post" enctype="multipart/form-data" style="border-radius: 12px; margin-left: 30px; margin-right: 30px;">

            <h3 style="color: white;">Update Book</h3>
            
            <!--...........................Book Name.................................-->
            <div class="col-3 mt-3">
                <label for="name" class="form-label">Book Name</label>
                <input required type="text" class="form-control" id="book_name" name="book_name" placeholder="Book Name">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--...........................Book Author.................................-->
            <div class="col-3 mt-3">
                <label for="name" class="form-label">Book Author</label>
                <input required type="text" class="form-control" id="book_author" name="book_author" placeholder="Book Author">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--..........................Book Category..............................-->
            <div class="col-3 mt-3">
                <label for="position" class="form-label">Category</label>
                <select required class="form-select" id="category" name="category">
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
                <input required type="text" class="form-control" id="book_id" name="book_id" placeholder="Book ID">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--........................Description 1..............................-->
            <div class="col-3 mt-3">
                <label for="username" class="form-label">About Book</label>
                <input required type="text" class="form-control" id="about" name="about" placeholder="About the Book">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--........................Description 2...............................-->
            <div class="col-3 mt-3">
                <label for="username" class="form-label">Description</label>
                <input required type="text" class="form-control" id="description" name="description" placeholder="Description">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--..........................Book Image................................-->
            <div class="col-3 mt-3">
            <label><h6><b>Book Image</b></h6></label>
            <input required class="form-control row" type="file" name="file" placeholder="Book Image">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--.........................Submit Button..........................-->
            <button class="btn btn-outline-warning col-1 mt-5" type="submit" id="submit" name="formsubmit" style="margin-left: 12px;">Update</button>

            </form>
          <?php } ?>
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