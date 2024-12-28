<?php
  session_start();
  include_once 'includes/dbh.inc.php';
  include_once 'includes/functions.inc.php';

  if (isset($_GET['news'])) {
        $title = $_GET ['news'];


        $result = getNews($conn, $title);


        if ($row = mysqli_fetch_assoc($result)) {
            $title = $row['title'];
            $date = $row['date'];
            $about = $row['about'];
            $picture = $row['picture'];
            $display = $row['on_off'];
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

    <title>Update News</title>

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

    <div style="background-image: url('Image/admin3.jpg'); background-size: cover; background-repeat :no-repeat;">
      <br>

      <div class = "row">
        <div class="col-5"></div>
        <div class="col-6">
          <div id="search"> 
            <form class="d-flex" type="search" method="post">
              <input class="form-control me-2" type="text" name="search" placeholder="Search News">
              <button class="btn btn btn-dark" type="submit" name="searchsubmit">Search</button>
            </form>

              <table id="table" cellpadding="12">
                <?php

                if (isset($_POST['searchsubmit'])) {
                  $search = $_POST ['search'];

                  $sql = "SELECT * FROM news WHERE title LIKE '%$search%';";
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                    if (mysqli_num_rows ($result)<5) {
                      echo '<thead>
                              <tr style="color: orange;">
                                <th>Title</th>
                                <th>Date</th>
                                <th>About</th>
                              </tr>
                            </thead>';

                      while ($row = mysqli_fetch_assoc ($result)) {
                        echo '<tbody>
                                <tr>
                                  <td><a href = "admin.update.news.php?news='.$row['title'].'">'.$row['title'].'</a></td>
                                  <td>'.$row['date'].'</td>
                                  <td>'.$row['about'].'</td>
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



      <?php if (isset($_GET['news'])) { ?>
        <form class="needs-validation border p-4 row" action="includes/newsupdate.php" method="post" enctype="multipart/form-data" style="border-radius: 12px; margin-left: 30px; margin-right: 30px;">

            <h3 style="color: white;">Update News</h3>
            
            <!--...........................News Title.................................-->
            <div class="col-3 mt-3">
                <label for="name" class="form-label">News Title</label>
                <input required type="text" class="form-control" id="news_title" name="news_title" value="<?php echo $title; ?>" placeholder="<?php echo $title; ?>">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--...........................Date.................................-->
            <div class="col-3 mt-3">
                <label for="name" class="form-label">Date</label>
                <input required type="date" class="form-control" id="date" name="date" value="<?php echo $date; ?>" placeholder="<?php echo $date; ?>">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--..........................Display..............................-->
            <div class="col-3 mt-3">
                <label for="position" class="form-label">Display</label>
                <select required class="form-select" id="display" name="display">
                <option value="<?php echo $display; ?>"><?php echo $display; ?></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                </select>
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--........................About..............................-->
            <div class="col-3 mt-3">
                <label for="username" class="form-label">About</label>
                <input required type="text" class="form-control" id="about" name="about" value="<?php echo $about; ?>" placeholder="<?php echo $about; ?>">
            </div>
            <div class="col-9"> <!--for space--> </div>


            <!--..........................News Image................................-->
            <div class="col-3 mt-3">
            <label><h6><b>News Image</b></h6></label>
            <input class="form-control row" type="file" name="file" value="<?php echo $picture; ?>" placeholder="<?php echo $picture; ?>">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--.........................Submit Button..........................-->
            <button class="btn btn-outline-warning col-1 mt-5" type="submit" id="submit" name="formsubmit" style="margin-left: 12px;">Update</button>

          </form>
      <?php } else { ?>
        <form class="needs-validation border p-4 row" action="includes/newsupdate.php" method="post" enctype="multipart/form-data" style="border-radius: 12px; margin-left: 30px; margin-right: 30px;">

        <h3 style="color: white;">Update News</h3>
            
            <!--...........................News Title.................................-->
            <div class="col-3 mt-3">
                <label for="name" class="form-label">News Title</label>
                <input required type="text" class="form-control" id="news_title" name="news_title" placeholder="News Title">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--...........................Date.................................-->
            <div class="col-3 mt-3">
                <label for="name" class="form-label">Date</label>
                <input required type="date" class="form-control" id="date" name="date" placeholder="Date">
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--..........................Display..............................-->
            <div class="col-3 mt-3">
                <label for="position" class="form-label">Display</label>
                <select required class="form-select" id="display" name="display">
                <option value="<?php echo $display; ?>">Select Option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                </select>
            </div>
            <div class="col-9"> <!--for space--> </div>

            <!--........................About..............................-->
            <div class="col-3 mt-3">
                <label for="username" class="form-label">About</label>
                <input required type="text" class="form-control" id="about" name="about" placeholder="About">
            </div>
            <div class="col-9"> <!--for space--> </div>


            <!--..........................News Image................................-->
            <div class="col-3 mt-3">
            <label><h6><b>News Image</b></h6></label>
            <input required class="form-control row" type="file" name="file" placeholder="News Image">
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