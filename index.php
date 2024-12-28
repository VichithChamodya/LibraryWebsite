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

    <title>Home</title>

    <script src="JQuery/jquery.min.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

    <style type="text/css">

      #heading {
        display: flex;
        overflow: hidden;
        justify-content: center; 
        height: 120px;
      }

      #trapezoid {
        border: 80px solid rgba(0,0,0,0);
        border-bottom: 60px solid rgba(255, 165, 0, 0.5);;
        transform: rotateX(180deg);
        width: 1000px;
      }

      #content {
        font-size: 32px;
        color: white;
        text-align: center;
        font-family: "Audiowide", sans-serif;
        padding: 10px;
        transform: rotateX(180deg);
      }

      #bg1 {
        background: url('Image/library.pic.01.1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        filter: brightness(80%);
      }

      #bg2 {
        background: url('Image/library2.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        filter: brightness(70%);
      }


      #text_1 {
        color: rgba(255, 255, 255, 0.65);
        font-family: "Lucida Handwriting";
        font-size: 95px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        padding-left: 250px;
        margin-top: 20px;
        position: relative;
      }

      #text_2 {
        color: rgba(255, 255, 255, 0.65);
        font-family: "Lucida Handwriting";
        font-size: 95px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        padding-left: 250px;
        position: relative;
      }

      #text_3 {
        color: white;
        font-family: Garamond;
        font-variant: small-caps;
        font-size: 25px;
        font-style: normal;
        font-weight: lighter;
        line-height: normal;
        padding-top: 40px;
        padding-left: 250px;
        position: relative;
      }

      #text_4 {
        color: white;
        font-family: Garamond;
        font-variant: small-caps;
        font-size: 25px;
        font-style: normal;
        font-weight: lighter;
        line-height: normal;
        padding-left: 250px;
        margin-bottom: 80px;
        position: relative;
      }

      #visit {
        margin-left: 42%;
        margin-right: 42%;
        margin-top: 80px;
        margin-bottom: 60px;
        background-color: transparent;
        border: 3px solid orange;
        border-radius: 10px;
        color: white;
        font-size: 20px;
        font-weight: bold;
        padding: 12px 35px;
        width: 16%;
      }

      #visit:hover {
        color: orange;
        border-color: orange;
        box-shadow: 0px 0px 15px orange;
      }

    </style>
  </head>

  <body>

      <div id="bg1">

        <div id="heading">
          <div id="trapezoid">
            <div id="content">D.S.Senanayake Memorial Public Library</div>
          </div>
        </div>
        
        <div id="text_1">
          Explore a World of
        </div>

        <div id="text_2">
          Knowledge
        </div>

        <div id="text_3">
          Discover a vast collection of books and expand your
        </div>

        <div id="text_4">
          horizons at the D.S.Senanayake Memorial  Public Library
        </div>



        <?php
          include_once 'includes/typing.effect.php';
        ?>

        <br><br>

      </div>

      <div id="bg2"> 

        <?php
          include_once 'includes/gallery.effecyt.php';
        ?>

        <button id="visit" type="button" onclick="openPopup()">Visit Now</button>

      </div>

      <?php
        include_once 'login.form.php';
      ?>
    
      
    
    <script>
      $(document).ready(function () {
        $('#text_1').show();
        $('#text_1').animate({right: "200px"}, 500);
      });

      $(document).ready(function () {
        $('#text_2').show();
        $('#text_2').animate({right: "200px"}, 700);
      });

      $(document).ready(function () {
        $('#text_3').show();
        $('#text_3').animate({right: "200px"}, 900);
      });

      $(document).ready(function () {
        $('#text_4').show();
        $('#text_4').animate({right: "200px"}, 1000);
      });
    </script>

  <!--...................................................................
  ..................................Footer...............................
  ....................................................................-->
    <?php
      include_once 'Footer/footer.php';
    ?>
    
  </body>
</html>