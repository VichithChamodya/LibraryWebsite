<style>
      .navibar {
        margin: 0;
        padding: 0;
        top: 0;
        text-align: center;
        background: dodgerBlue;
        overflow: hidden;
        position: sticky;
        z-index: 1;
      }

      .navi-item {
        float: right;
        width: 120px;
      }

      .navi-link {
        color: white;
        text-decoration: none;
        padding: 14px 0px;
        position: relative;
        cursor: pointer;
        font-weight: bold;
      }

      .navi-link:hover {
        color: orange;
        border-radius: 12px;
        transition: background-color .3s;
      }

      .navi-link:active {
        color: white;
        background-color: black;
      }

      .line.borderYtoX .navi-link:before, .line.borderYtoX .navi-link:after {
        position: absolute;
        opacity: 0.5;
        height: 100%;
        width: 0px;
        content: '';
        background: white;
        transition: all 0.5s;
      }

      .line.borderYtoX .navi-link:before {
        left: 0px;
        top: 0px;
      }

      .line.borderYtoX .navi-link:after {
        right: 0px;
        bottom: 0px;
      }

      .line.borderYtoX .navi-link:hover:before, .line.borderYtoX .navi-link:hover:after {
        opacity: 1;
        height: 8px;
        width: 50%;
        background: white;
        border-radius: 20px;
      }

      /*--------------------dropdown menu---------------------*/
      .dropdown-content {
        display: none;
        margin-top: 15px;
        border-radius: 15px;
        background: rgba(0, 0, 0, 0.7);
        backdrop-filter: blur(20px);
        box-shadow: 0 0px 10px black;
        position: fixed;
        z-index: 1;
      }

      .dropdown:hover .dropdown-content {
        display: block;
        padding:10px;
      }

      .dropdown-item {
        width: 220px;
        padding: 16px 20px;
        text-align: center;
        display: block;
        color: white;
        font-weight: bold;
      }

      .dropdown-item:hover {
        color: black;
        font-weight: bold;
        border-radius: 15px;
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0 0px 8px orange;
        transition: background-color .8s;
      }

      /*--------------------side navigation bar---------------------*/
      body {
        transition: background-color .5s;
      }

      .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #222;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
      }

      .sidenav-link {
        text-decoration: none;
        padding-bottom: 10px;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
      }

      .sidenav-link:hover {
        color: orange;
      }

      .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
      }

      #main {
        transition: margin-left .5s;
      }

      @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav-link {font-size: 18px;}
      }

      .img-circle {
        align-items: center;
        border: 4px solid orange;
        border-color: orange;
        border-radius: 50%;
        overflow: hidden;
      }

</style>

<body>
<div class="navibar line borderYtoX">
  <div id="main">
  
        <a class="navi-link navi-item" href="index.php"><img src = "icons\home.svg"> Home</a>

        <a class="navi-link navi-item dropdown"><img src = "icons\services.svg"> Services
          <table class="dropdown-content">
            <tr>
              <td><a href="calendar.php" class="dropdown-item">Calendar</a></td>
            </tr>
          </table>
        </a>

        <a class="navi-link navi-item" href=""><img src = "icons\contact.svg"> Contacts</a>
      
        <a class="navi-link navi-item" style="cursor:pointer; float: left;" onclick="openNav()"><img src = "icons\profile.svg">
              <?php
                if (isset($_SESSION["admin_username"])) {
                  echo $_SESSION["admin_username"];
                }
                else {
                  echo "User";
                }
              ?>
        </a>
      
        <a class="navi-link navi-item" style="float: left" onclick="openPopupLogout()"><img src = "icons\logout.svg"> Logout</a>
        
        <?php
          include_once 'logout.form.php';
        ?>
        
    </div>

    <!-------------------------------sidenav--------------------------------->
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn sidenav-link" onclick="closeNav()">&times;</a>
        <?php
          echo "<img class='img-circle profile_img' height=150 width=150 src='Image/admins.profile.pic/".$_SESSION['admin_pic']."'>";
          echo "</br></br>";
        ?>
      <h3 style="text-align: center; color: orange; margin-bottom: 40px; margin-top: 20px;">
        <?php
          echo $_SESSION["admin_name"];
        ?>
      </h3>
          
      <a class="sidenav-link" href="admin.page.php">Dashbord</a>
      <a class="sidenav-link" href="admin.profile.php">Profile</a>
      <a class="sidenav-link" href="#"></a>
      <a class="sidenav-link" href="#"></a>
    </div>

    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "400px";
        document.getElementById("main").style.marginLeft = "400px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.5)";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "";
      }
    </script>

    <script src="JQuery/jquery.min.js"></script>
      <script>
        $('.navi-link').on('mouseover', function(){
          $(this).css('font-weight', 'bold');
        });
        $('.navi-link').on('mouseleave', function(){
          $(this).css('font-weight', 'bold');
        });
      </script>
  </div>
</body>