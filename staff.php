<?php
    require_once 'includes\dbh.inc.php';
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

    <title>Staff</title>

    <style>
      
      .staff {
        width: 100%;
        justify-content: space-between;
        background-size: cover;
        background-position: cover;
        display: flex;
        align-items: center;
        background-color: white;
        padding: 30px 10%;
      }

      .details {
        max-width: 700px;
      }

      .details h3 {
        font-size: 32px;
        font-weight: 700;
        color: black;
      }

      .details h1 {
        font-size: 50px;
        font-weight: 700;
        color: black;
      }

      span {
        color: orange;
      }

      .details p {
        display: inline;
        justify-content: space-between;
        align-items: center;
        width: 40px;
        font-size: 20px;
        color: gray;
        text-decoration: none;
        margin: 30px 15px 30px 0;
      }

      .profilepic {
        right: 100px;
        width: 280px;
        height: 280px;
        border-radius: 50%;
        border: 1px solid orange;
        border-color: orange;
        overflow: hidden;
      }

      .profilepic img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      html {
        scroll-behavior: smooth;
      }


      /*---------Button-----------*/
      #staff-btn {
        background-color: black;
        border: 2px solid white;
        border-radius: 10px;
        color: white;
        font-size: 15px;
        font-weight: bold;
        padding: 10px 25px;
        float: right;
        margin-top: 50px;
        margin-right: 50px;
      }

      #staff-btn:hover {
        color: orange;
        border-color: orange;
        box-shadow: 0px 0px 12px orange;
      }

    </style>
  </head>
  <body>
    <button id = "staff-btn" type="button" onclick="openPopup()">Staff Login</button>
    <?php
      include_once 'admin.login.form.php';
    ?>

    <?php
      $sql = "SELECT * FROM admins";
      $result = mysqli_query($conn, $sql);
        if ($result) {
          if (mysqli_num_rows ($result)>0) {

            while ($row = mysqli_fetch_assoc ($result)) {
              echo '<div class = "staff">
                    <div class = "details">
                      <h3>Hi Everyone !</h3>
                      <h1>I am <span>'.$row['adminsName'].'</span></h1>
                      <h3>'.$row['adminsPosition'].'</h3>
                      <p>'.$row['adminsAbout'].'</p>
                    </div>
                    <div class = "profilepic">
                      <img src="Image/admins.profile.pic/'.$row['adminsPic'].'">
                    </div>
                  </div>';
            }
          }

          else {
            echo  '<thead>
                    <tr>
                      <td style="color: orange; font-weight: bold;">No results found</td>
                    </tr>
                  </thead>';
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